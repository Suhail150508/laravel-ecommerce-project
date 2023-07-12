<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\Redirect;



class HomeController extends Controller
{
    public function index(){

        $categories =  Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = Color::all();
        $products = Product::where('status',1)->latest()->limit(12)->get();

        $top_sales = DB::table('products')
            ->leftJoin('order__details','products.id','=','order__details.product_id')
            ->selectRaw('products.id, SUM(order__details.product_sales_quantity) as total')
            ->groupBy('products.id')
            ->orderBy('total','desc')
            ->take(8)
            ->get();

        $topProducts = [];
        foreach ($top_sales as $s){
            $p = Product::findOrFail($s->id);
            $p->totalQty = $s->total;
            $topProducts[] = $p;
        }
         return view('welcome',compact('categories','subcategories','brands','units','sizes','colors','products','topProducts'));

    }
public function search(Request $request){
$products = Product::orderBy('id','desc')->where('name','LIKE','%'.$request->product.'%');
if($request->category !='All')$products->where('cat_id',$request->category);
$products = $products->get();
$categories =  Category::all();
$subcategories = SubCategory::all();
$brands = Brand::all();
return view('frontend.pages.product_by_subCat',compact('categories','subcategories','brands','products'));


}
    public function view_details($id){

        $categories =  Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $product = Product::find($id);
        $sizes = Size::find($product->size_id);
        $colors = Color::find($product->color_id);
        $cat_id = $product->cat_id;
        $related_products = Product::where('cat_id',$cat_id)->limit(8)->get();
         return view('frontend.pages.view_details',compact('categories','subcategories','brands','units','sizes','colors','product','related_products'));
        // return $product;

    }


public function product_by_cat($id){
    $categories =  Category::all();
    $subcategories = SubCategory::all();
    $brands = Brand::all();
    $products = Product::where('status',1)->where('cat_id',$id)->limit(8)->get();
    return view('frontend.pages.product_by_cat',compact('categories','subcategories','brands','products'));
}
public function product_by_subCat($id){
    $categories =  Category::all();
    $subcategories = SubCategory::all();
    $brands = Brand::all();
    $products = Product::where('status',1)->where('subcat_id',$id)->limit(8)->get();
    return view('frontend.pages.product_by_subCat',compact('categories','subcategories','brands','products'));
}
public function product_by_brand($id){
    $categories =  Category::all();
    $subcategories = SubCategory::all();
    $brands = Brand::all();
    $products = Product::where('status',1)->where('br_id',$id)->limit(8)->get();
    return view('frontend.pages.product_by_brand',compact('categories','subcategories','brands','products'));
}


}

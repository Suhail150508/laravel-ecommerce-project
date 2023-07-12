<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['id','cat_id','subcat_id','br_id','unit_id','size_id','color_id','code','name','description','price','image','status'];

        public function category()
    {
        return  $this->belongsTo(Category::class,'cat_id');
    }

        public function subcategory()
    {
        return  $this->belongsTo(SubCategory::class,'subcat_id');
    }

        public function brand()
    {
        return  $this->belongsTo(Brand::class,'br__id');
    }

        public function unit()
    {
        return  $this->belongsTo(Unit::class,'unit_id');
    }

        public function size()
    {
        return  $this->belongsTo(Size::class,'size_id');
    }
        public function color()
    {
        return  $this->belongsTo(Color::class,'color_id');
    }

public static function cat_ProductCount($cat_id){

    $cat_count = Product::where('status',1)->where('cat_id',$cat_id)->count();
   return $cat_count;
}
public static function subCat_ProductCount($subcat_id){

    $subCat_count = Product::where('status',1)->where('subcat_id',$subcat_id)->count();
   return $subCat_count;
}
public static function brand_ProductCount($brand_id){

    $brand_count = Product::where('status',1)->where('br_id',$brand_id)->count();
   return $brand_count;
}

}



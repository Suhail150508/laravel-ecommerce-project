@extends('frontend.master')
@section('content')

<style>

.login-form-1{

    padding:5% 15%;
    background: #f05837;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h2{
    text-align: center;
    margin-bottom:5%;
    color: #fff;

}


</style>


    <div class=" login-form-1" style="  padding-top: -10rem">

        <h2 >Login</h2>
        <form action="{{ url('login_store') }}" method="post" >

            @csrf

            <div class="form-group">
                <input type="text" style="font-size: 2rem;text-align:center;margin-top:3rem;padding:.5rem" name="email" class="form-control" placeholder="Your Email *" value="" />
            </div>
            <div class="form-group">
                <input type="password" style="font-size: 2rem;text-align:center;margin-top:3rem;padding:.5rem" name="password" class="form-control" placeholder="Your Password *" value="" />
            </div>

            <div class="form-group">
                <input type="submit" style="font-size: 2rem; text-align:center; padding:2rem ; margin-left:50rem;margin-top:2rem" class="btn btn-success" value="Login" />
            </div>

        </form>

</div>

@endsection

{{-- @extends('frontend.master')
@section('content')

<form action="{{ url('registration') }}" method="post">
    @csrf
<input type="text" name="name" placeholder="name" >
<input type="text" name="email" placeholder="email" >
<input type="text" name="password" placeholder="password" >
<input type="text" name="mobile" placeholder="mobile" >
<button type="submit">Click</button>
</form>
@endsection --}}

@extends('frontend.master')
@section('content')

<style>
    .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-logo{
    position: relative;
    margin-left: -41.5%;
}
.login-logo img{
    position: absolute;
    width: 20%;
    margin-top: 19%;
    background: #282726;
    border-radius: 4.5rem;
    padding: 5%;
}
.login-form-1{
    padding: 9%;
    background:#282726;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    margin-bottom:12%;
    color:#fff;
}
.login-form-2{

    padding: 5% 15%;
    background: #f05837;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h2{
    text-align: center;
    margin-bottom:5%;
    color: #fff;

}


</style>


    <div class=" login-form-2" style="  padding-top: -10rem">
@foreach ($data as $value )

@endforeach
        <h2 >Registration</h2>
        <form action="{{ url('/registration') }}" method="post" >

            @csrf
            <div class="form-group">
                <input type="text" style="font-size: 2rem;text-align:center;margin-top:3rem;padding:.5rem" name="name" class="form-control" placeholder="Full Name *" value="" />
            </div>
            <div class="form-group">
                <input type="text" style="font-size: 2rem;text-align:center;margin-top:3rem;padding:.5rem" name="email" class="form-control" placeholder="Your Email *" value="" />
            </div>
            <div class="form-group">
                <input type="password" style="font-size: 2rem;text-align:center;margin-top:3rem;padding:.5rem" name="password" class="form-control" placeholder="Your Password *" value="" />
            </div>
            <div class="form-group">
                <input type="text" style="font-size: 2rem;text-align:center;margin-top:3rem;padding:.5rem" name="mobile" class="form-control" placeholder="Your Mobile *" value="" />
            </div>
            <div class="form-group">
                <input type="submit" style="font-size: 2rem; text-align:center; padding:2rem ; margin-left:50rem;margin-top:2rem" class="btn btn-success" value="Registration" />
            </div>

        </form>

</div>


@endsection



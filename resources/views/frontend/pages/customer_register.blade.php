
 @extends('frontend.master')
@section('content')


<style>
    .register-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.registerV-logo{
    position: relative;
    margin-left: -41.5%;
}
.registerV-logo img{
    position: absolute;
    width: 20%;
    margin-top: 19%;
    background: #282726;
    border-radius: 4.5rem;
    padding: 5%;
}
.registerV-form-1{
    padding: 9%;
    background:#282726;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.registerV-form-1 h3{
    text-align: center;
    margin-bottom:12%;
    color:#fff;
}
.login-form-2{
    padding: 9%;
    background: #f05837;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.registerV-form-2 h3{
    text-align: center;
    margin-bottom:12%;
    color: #fff;
}
.btnSubmit{
    font-weight: 600;
    width: 50%;
    color: #282726;
    background-color: #fff;
    border: none;
    border-radius: 1.5rem;
    padding:2%;
}


</style>

<div class="register">
    <h2>Registration</h2>
    <form action="{{ url('registration') }}" method="post">

        @csrf
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Full Name *" value="" />
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
        </div>
        <div class="form-group">
            <input type="text" name="mobile" class="form-control" placeholder="Your Password *" value="" />
        </div>
        <div class="form-group">
            <input type="submit" class="btnSubmit" value="Registration" />
        </div>

    </form>
</div>
@endsection

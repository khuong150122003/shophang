@extends('admin_login')

@section('content')

<div class="w3layouts-main">
    <h2>Sign In Now</h2>
    <?php
// use Illuminate\Support\Facades\Session;

// use Illuminate\Contracts\Session\Session;

    $message = Session::get('message');
    if ($message) {
        echo $message;
        Session::put('message', null);
    }
    ?>

    <form action="<?= url('/admin_dashboard'); ?>" method="post">
        {{csrf_field()}}
        <input type="email" class="ggg" name="admin_email" placeholder="E-MAIL" required="">
        <input type="password" class="ggg" name="admin_password" placeholder="PASSWORD" required="">
        <span><input type="checkbox" />Remember Me</span>
        <h6><a href="#">Forgot Password?</a></h6>
        <div class="clearfix"></div>
        <input type="submit" value="Sign In" name="login">
    </form>
    <p>Don't Have an Account ?<a href="{{url('/register')}}">Create an account</a></p>
</div>

@endsection

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Login</title>

        <!-- Bootstrap -->
        <link href="{{asset('admin_template/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('admin_template/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('admin_template/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{asset('admin_template/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{asset('admin_template/build/css/custom.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form action="{{url('adminLogin')}}" method="POST">
                            @csrf
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" class="form-control" name="email" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                            </div>
                            <div>
                                <button class="btn btn-default submit" type="submit" href="index.html">Log in</button>
                                <a class="reset_pass" href="#">Lost your password?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">New to site?
                                    <a href="#signup" class="to_register"> Create Account </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />
                            </div>
                        </form>
                    </section>
                </div>

                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <form>
                            <h1>Create Account</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <a class="btn btn-default submit" href="index.html">Submit</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Already a member ?
                                    <a href="#signin" class="to_register"> Log in </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <script src="{{url('template/js/jquery-3.4.1.min.js')}}"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}

    </body>
</html>

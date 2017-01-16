<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keyword" content="@yield('meta_keyword')">
    <meta name="description" content="@yield('meta_description')">
    <meta name="author" content="">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <title>@yield('title')</title>

    @section('css')
    <!-- Bootstrap Core CSS -->
    <link href="/templates/admin/paper-dashboard/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation library for notifications   -->
    <link href="/templates/admin/paper-dashboard/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="/templates/admin/paper-dashboard/assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="/templates/admin/paper-dashboard/assets/css/themify-icons.css" rel="stylesheet">
    @show

    <link href="/css/libs.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{ route('admin.auth.postLogin') }}" role="form">
                                {!! csrf_field() !!}
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <button class="btn btn-lg btn-success btn-block">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.wrapper -->

    @section('javascripts')
    <!-- jQuery -->
    <script src="/templates/admin/paper-dashboard/assets/js/jquery-1.10.2.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/templates/admin/paper-dashboard/assets/js/bootstrap.min.js"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="/templates/admin/paper-dashboard/assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="/templates/admin/paper-dashboard/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/templates/admin/paper-dashboard/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="/templates/admin/paper-dashboard/assets/js/paper-dashboard.js"></script>
    @show

    <script src="/js/libs.js"></script>

    @yield('inline_scripts')

    @include('layouts.partials.flash')

</body>

</html>
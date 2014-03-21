<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Agus Cahyono / balitax">
    <meta name="keyword" content="Simple Adminweb With Laravel">

    <title><?=$title ?></title>

    <!-- Bootstrap core CSS -->
    {{HTML::style('admin/css/bootstrap.min.css')}}
    {{HTML::style('admin/css/bootstrap-reset.css')}}
    {{HTML::style('admin/assets/font-awesome/css/font-awesome.css')}}
    {{HTML::style('admin/css/style.css')}}
    {{HTML::style('admin/css/style-responsive.css')}}
</head>
<body class="login-body">
  @yield('content')
  
</body>
</html>

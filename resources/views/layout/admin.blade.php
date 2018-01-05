<!doctype html>
<html lang="بش">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=">
    <title>مدیریت فروشگاه </title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="/css/admin-custom.css" rel="stylesheet">
</head>
<body>
    @include('admin.partials.nav')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ isset($panel_title) ? $panel_title :'' }} </div>
                    <div class="panel-body">
                        @yield('content')
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="/js/jquery.min.js" type="javascript"></script>
    <script src="/js/bootstrap.min.js" type="javascript"></script>
</body>
</html>
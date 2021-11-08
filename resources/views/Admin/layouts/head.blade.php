<title>@yield('title')</title>

<link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- morris css -->
<link rel="stylesheet" href="../plugins/morris/morris.css">

<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">

{{-- @if(App::getLocale() =='ar')
    <!-- ======= MAIN STYLES ======= -->
    <link rel="stylesheet" href="{{asset('admin/ar/assets/css/style.css')}}">
    <!-- ======= END MAIN STYLES ======= -->
@else
    <link rel="stylesheet" href="{{asset('admin/en/assets/css/style.css')}}">
@endif --}}

@yield('css')

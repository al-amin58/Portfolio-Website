<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Admin One Tailwind CSS Admin Dashboard</title>
    <!-- Tailwind is included -->
    <link rel="stylesheet" href="{{asset('assets-backend')}}/css/main.css?v=1628755089081">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets-backend')}}/pple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets-backend')}}/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets-backend')}}/favicon-16x16.png"/>
    <link rel="mask-icon" href="{{asset('assets-backend')}}/safari-pinned-tab.svg" color="#00b4b6"/>

</head>
<body>

<div id="app">

    @include('Backend.layouts.nav')

    @include('Backend.layouts.aside')

    @yield('body')

    @include('Backend.layouts.footer')
</div>
<!-- Scripts below are for demo only -->
<script type="text/javascript" src="{{asset('assets-backend')}}/js/main.min.js?v=1628755089081"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="{{asset('assets-backend')}}/js/chart.sample.min.js"></script>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>
</html>

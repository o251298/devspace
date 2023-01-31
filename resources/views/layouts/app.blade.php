<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/mediumish.css')}}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<!-- Begin Nav
================================================== -->
@include('layouts.navigation')

<!-- Page Heading -->
@if (isset($header))
    {{ $header }}
@endif
<!-- End Nav
================================================== -->

<!-- Begin Site Title
================================================== -->
<div class="container">
    <!-- End Site Title
    ================================================== -->
    {{$slot}}
    <!-- Begin Footer
    ================================================== -->
    <div class="footer">
        <p class="pull-left">
            Copyright &copy; 2017 Your Website Name
        </p>
        <p class="pull-right">
            Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
        </p>
        <div class="clearfix">
        </div>
    </div>
    <!-- End Footer
    ================================================== -->

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>

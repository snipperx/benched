<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="300000; url={{  route('logout')  }}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- core:css -->
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    {{--       <link rel="stylesheet" href="{{ asset('css/iconfont.css') }}">--}}

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <!-- Layout styles -->
    {{-- <link rel="stylesheet" href="../assets/css/demo_1/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- End layout styles -->
</head>
@yield('styles')

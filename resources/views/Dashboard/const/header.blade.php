<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dashboard</title>

@if(App::getLocale() == "en")

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("Dashborad/en/plugins/fontawesome-free/css/all.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{asset("Dashborad/en/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset("Dashborad/en/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{asset("Dashborad/en/plugins/jqvmap/jqvmap.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("Dashborad/en/dist/css/adminlte.min.css")}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset("Dashborad/en/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{asset("Dashborad/en/plugins/daterangepicker/daterangepicker.css")}}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{asset("Dashborad/en/plugins/summernote/summernote-bs4.min.css")}}">

@endif
    @if(App::getLocale()== "ar")
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("Dashborad/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset("Dashborad/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset("Dashborad/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset("Dashborad/plugins/jqvmap/jqvmap.min.css")}}">
      <link rel="stylesheet" href="{{asset("Dashborad/plugins/ekko-lightbox/ekko-lightbox.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("Dashborad/dist/css/adminlte.min.css")}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset("Dashborad/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset("Dashborad/plugins/daterangepicker/daterangepicker.css")}}">
      <link rel="stylesheet" href="{{asset("Dashborad/plugins/select2/css/select2.min.css")}}">
      <link rel="stylesheet" href="{{asset("Dashborad/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">

  <!-- summernote -->
  <link rel="stylesheet" href="{{asset("Dashborad/plugins/summernote/summernote-bs4.min.css")}}">
        @endif

</head>

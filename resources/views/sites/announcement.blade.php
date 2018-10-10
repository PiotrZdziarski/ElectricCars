@extends('layouts.app')
@section('title') XD @endsection

@section('specialScripts')
    <script src="{{asset('js/jquery.fancybox.min.js')}}" defer></script>
@endsection

@section('specialStyles')
    <link href="{{asset('css/jquery.fancybox.min.css')}}" defer rel="stylesheet">
@endsection

@section('content')
    <announcement advert="{{$advert}}"></announcement>
@endsection
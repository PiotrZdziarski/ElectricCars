@extends('layouts.app')
@section('title') XD @endsection

{{--@section('specialFonts')--}}
{{--<link href="https://fonts.googleapis.com/css?family=Overpass:400,600,700&amp;subset=latin-ext" rel="stylesheet">--}}
{{--@endsection--}}
@section('specialScripts')
    <script src="{{asset('js/jquery.fancybox.min.js')}}" defer></script>
@endsection

@section('specialStyles')
    <link href="{{asset('css/jquery.fancybox.min.css')}}" defer rel="stylesheet">
@endsection

@section('content')
    <announcement></announcement>
@endsection
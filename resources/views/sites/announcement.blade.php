@extends('layouts.app')
@section('title') XD @endsection

@section('specialScripts')
    <script src="{{asset('js/jquery.fancybox.min.js')}}" defer></script>
@endsection

@section('specialStyles')
    <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <announcement
            features="{{ $features }}"
            advert="{{ $advert }}"
            comparision_products="{{ $comparision_products }}">
    </announcement>
@endsection
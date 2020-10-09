@extends('layouts.app')

@section('title')
Menu - {{$settings["general"]->site_title}}
@endsection

@section('content')

<div id="menuPage">
 @include('includes.food-categories-slider')
</div>

@endsection
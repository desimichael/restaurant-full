@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content') 
    <div class="welcome-jumbo">
        <div class="status">NEW</div>
        <h1>Tony's</h1>
        <img src="/img/bar_food.png" class="burger-fries">
    </div>
@endsection
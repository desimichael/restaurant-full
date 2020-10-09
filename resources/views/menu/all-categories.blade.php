@extends('layouts.app')

@section('title')
Menu - {{$settings["general"]->site_title}}
@endsection

@section('content')

<div id="menuPage">
  <section id="foodPreview">
    <h1 class="sectionTitle">Sports and Great Eats!!</h1>
    <div class="container"> 
      <div class="leftBtn">
        <i class="fas fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="rightBtn">
        <i class="fas fa-chevron-right" aria-hidden="true"></i>
      </div>  
      <div class="foodSlider">
        <div class="slidingSystem">
        @foreach ($categories as $category)  
          <a href="/menu/{{$category->title}}" class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="foodTitle">
                {{$category->title}}
              </div>
              <p class="foodDesc">
                {{$category->description}}
              </p>
              <div class="foodImg">
                <img src="{{$category->image_url}}">
              </div>
            </div>     
          </a>  
        @endforeach
        </div>
      </div>
    </div>
  </section>
</div>

@endsection
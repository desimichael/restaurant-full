@extends('layouts.app')

@section('title')
{{$foodItem}} - {{$settings["general"]->site_title}}
@endsection

@section('content')

<div id="singleMenuPage">
  <div class="row">
    <div class="col-sm-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8">
      <div class="contentBox">
        <div class="col-md-12">
          <div class="title">
            {{$foodItem}}
          </div>
        </div>
        <div class="row">
          @foreach ($foodItems as $item)
            <div class="col-md-6">
              <div class="item">
                <div class="subtitle">   
                  <h5>{{$item->title}}</h5>
                  <span class="price">{{$item->price}}</span>
                </div>
                <div class="description">
                 {{$item->description}}
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
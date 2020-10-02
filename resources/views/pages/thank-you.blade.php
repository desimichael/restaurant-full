@extends('layouts.app')

@section('title')
Thanks from - {{$settings["general"]->site_title}}
@endsection

@section('content')

<div id="offersPage">
  <div class="contentBox">
    <div class="row">
      <div class="col-md-8 offset-md-2 thank-you">
        <div class="title">Thank You!!</div> 
        <p>We will contact you soon.</p>
      </div>
    </div>
  </div>
</div>

@endsection
@extends('layouts.landing')

@section('title')
{{$settings["general"]->site_title}} The Best Food and Entertainment
@endsection

@section('content')
<section id="infoSection">
    <div class="container">
      <div class="infoGrid">
        <div class="iBox">
          <div class="title">
            Groups & Parties
          </div>
            <p class="paragraph">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, deleniti. Enim amet accusantium provident non voluptatibus saepe nisi quas ea excepturi incidunt? A impedit eaque aut nihil nemo blanditiis voluptatem!
            </p>
            <a href="#" class="learnMore">
              <span>More</span>
              <div class="circleRight">
                <i class="fas fa-chevron-right"></i>
              </div>
            </a>
        </div>
        <div class="iBox">
          <div class="title">
            Hookahs
          </div>
          <div class="infoContainer">
            <p class="paragraph">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, deleniti. Enim amet accusantium provident non voluptatibus saepe nisi quas ea excepturi incidunt? A impedit eaque aut nihil nemo blanditiis voluptatem!
            </p>
            <a href="#" class="learnMore">
              <span>More</span>
              <div class="circleRight">
                <i class="fas fa-chevron-right"></i>
              </div>
            </a>
          </div>
        </div>
        <div class="iBox">
          <div class="title">
            VIP Program
          </div>
          <div class="infoContainer">
            <p class="paragraph">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, deleniti. Enim amet accusantium provident non voluptatibus saepe nisi quas ea excepturi incidunt? A impedit eaque aut nihil nemo blanditiis voluptatem!
            </p>
            <a href="#" class="learnMore">
              <span>More</span>
              <div class="circleRight">
                <i class="fas fa-chevron-right"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="happeningsSection">
    <div class="container"> 
    <h2 class="sectionTitle">Happenings</h2>
      <div class="happeningsGrid">
        <div class="happeningsBox">
          <img src="/img/happenings_event1.png" alt="poster">
        </div>
        <div class="happeningsBox">
          <img src="/img/happenings_event1.png" alt="poster">
        </div>
        <div class="happeningsBox">
          <img src="/img/happenings_event1.png" alt="poster">
        </div>
        <div class="happeningsBox">
          <img src="/img/happenings_event2.png" alt="poster">
        </div>
        <div class="happeningsBox">
          <img src="/img/happenings_event2.png" alt="poster">
        </div>
        <div class="happeningsBox">
          <img src="/img/happenings_event2.png" alt="poster">
        </div>
      </div>
    </div>
  </section>
  @include('includes.food-categories-slider')
@endsection
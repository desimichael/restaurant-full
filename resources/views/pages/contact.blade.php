@extends('layouts.app')

@section('title')
Contact - {{$settings["general"]->site_title}}
@endsection

@section('description')
Is franchised and adds value to any entrepreneur striving to break into the leisure and entertainment industry.
@endsection

@section('content')

  <div id="contactPage">
    <div class="contentBox">
      <div class="row">
        <div class="col-md-6">       
          <div class="title">Contact Us..</div>
            <div class="subtitle">Address</div>
              <p>
                {{$settings["general"]->address_1}}
                {{$settings["general"]->address_2}}
                <br>
                {{$settings["general"]->city}},
                  <br>
                {{$settings["general"]->state}}  
                {{$settings["general"]->zipcode}} 
              </p>
            <div class="subtitle">Phone Number</div>
              <p>
                <a href="tel:{{$settings["general"]->phone_number}}">
                    {{$settings["general"]->phone_number}}
                </a>
              </p>
            </div>
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14357.42532726853!2d-83.94864384431916!3d33.80442720516726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1609298962303!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
      </div>
    </div>
  </div>

@endsection
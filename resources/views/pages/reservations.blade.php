@extends('layouts.app')

@section('title')
Reservations - {{$settings["general"]->site_title}}
@endsection

@section('content')

<div id="reservationsPage">
  <div class="contentBox">
    <div class="row">
      <div class="col-md-6">
        <div class="title">Get in line on-the-go</div>    
          <form method="POST" action="/reservations">
            @csrf
            <div class="form-group">
              <label for="inputfname">First Name</label>
              <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus placeholder="John">
                @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
              <label for="inputlname">Last Name</label>
              <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="Jake">
                @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
              <label for="inputemail">Email</label>
              <input id="inputemail" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="jj@gmail.com">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
              <label for="inputphone">Phone number</label>
              <input id="inputphone" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus placeholder="7709876765">
                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
              <label for="guestsinput">Guest Total</label>
              <select class="form-control form-control-lg @error('guests_total') is-invalid @enderror" name="guests_total" id="guestinput">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              @error('guest_total')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="timeinput">Time</label>
              <select class="form-control form-control-lg @error('time') is-invalid @enderror" name="time" id="timeinput">
                <option value="5">5:00 pm</option>
                <option value="6">6:00 pm</option>
                <option value="7">7:00 pm</option>
                <option value="8">8:00 pm</option>
                <option value="9">9:00 pm</option>
              </select>
              @error('time')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <button type="submit value=""" class="btn btn-primary">Confirm</button>
            </div>
          </form>
      </div>
      <div class="col-md-6">
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo est natus ea accusamus corrupti esse, nesciunt aperiam? Animi, atque pariatur.
        </p>
      </div>
    </div>
  </div>
</div>

@endsection
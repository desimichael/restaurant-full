@extends('layouts.app')

@section('title')
Offers - {{$settings["general"]->site_title}}
@endsection

@section('content')

<div id="offersPage">
  <div class="contentBox">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="title">Get Offers!!</div>    
          <form method="POST" action="/offers">
            @csrf
            <div class="row">
              <div class="col-md-6">
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
                  <label for="inputemail">Email</label>
                  <input id="inputemail" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="jj@gmail.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi facilis ad, veritatis non vel dolores.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputlname">Last Name</label>
                  <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="John">
                    @error('lname')
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
                  <button type="submit value=""" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
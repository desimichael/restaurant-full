@extends('layouts.app')



@section('content')

<div id="waitlistPage">
  <div class="contentBox">
    <div class="row">
      <div class="col-md-6">
        <div class="title">Get in line on-the-go</div>    
          <form>
            <div class="form-group">
              <label for="emailInput">Email address</label>
              <input type="email" class="form-control" name="email" id="emailInput" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="phoneInput">Phone number</label>
              <input type="phone" class="form-control" name="phone" id="phoneInput" placeholder="404-588-4577">
            </div>
            <div class="form-group">
              <label for="guests">Number of guests</label>
              <select class="form-control" name="guests" id="guestInput">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="timeInput">Time</label>
              <select class="form-control" name="time" id="timeInput">
                <option value="5">5:00 pm</option>
                <option value="6">6:00 pm</option>
                <option value="7">7:00 pm</option>
                <option value="8">8:00 pm</option>
                <option value="9">9:00 pm</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit value=""" class="btn btn-primary">Submit</button>
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
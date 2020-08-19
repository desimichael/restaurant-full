@extends('layouts.app')



@section('content')

<div id="eventsPage">
  <div class="contentBox">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="title">Get Events and Offers!!</div>    
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstNameInput">First Name</label>
                  <input type="text" class="form-control" name="fname" id="firstNameInput" placeholder="James">
                </div>
                <div class="form-group">
                  <label for="emailInput">Email</label>
                  <input type="email" class="form-control" name="email" id="emailInput" placeholder="jamess@gmail.com">
                </div>
                <div class="form-group">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi facilis ad, veritatis non vel dolores.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastNameInput">Last Name</label>
                  <input type="text" class="form-control" name="phone" id="lastNameInput" placeholder="Smith">
                </div>
                <div class="form-group">
                  <label for="phoneInput">Phone number</label>
                  <input type="phone" class="form-control" name="phone" id="phoneInput" placeholder="404-588-4577">
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
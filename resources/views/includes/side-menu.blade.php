
            <div class="sideMenu">
              <a href="/" class="logo">
                <img src="{{$settings["general"]->logo_image_url}}" alt="Tonys">
              </a>
              <div class="menu">
                <!-- <div class="menuTitle">
                  menu
                </div> -->
                <ul class="links">
                  <li>
                    <a href="/menu">Menu</a>
                  </li>
                  <li>
                    <a href="/offers">Offers</a>
                  </li>   
                  <li>
                    <a href="/reservations">Reservations</a>
                  </li>    
                  <li>
                    <a href="/about">About Us</a>
                  </li>
                  <li>
                    <a href="/contact">Contact</a>
                  </li>
                </ul>
              </div> 
              <div class="socialIcons">
                <a href="{{$settings["social"]->facebook_url}}" target="new"><i class="fab fa-facebook-f"></i></a>
                <a href="{{$settings["social"]->twitter_url}}" target="new"><i class="fab fa-twitter"></i></a>
                <a href="{{$settings["social"]->instagram_url}}" target="new"><i class="fab fa-instagram"></i></a>
              </div>  
              <div class="location">
                <div class="address">
                  {{$settings["general"]->address_1}}
                  {{$settings["general"]->address_2}}
                  <br>
                  {{$settings["general"]->city}},
                   <br>
                  {{$settings["general"]->state}}  
                  {{$settings["general"]->zipcode}} 
                </div>
                <div class="contactNumber">
                  <a href="tel:{{$settings["general"]->phone_number}}">
                    {{$settings["general"]->phone_number}}
                  </a>
                </div>
                <div class="operations">
                  Everyday 12pm - 2:30am
                </div>
              </div>
            </div>
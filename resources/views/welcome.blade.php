@extends('layouts.app')

        <div class="container-fluid fh5co-home-banner col-md-12">
          <div class="card"> <video src="/img/portada.mp4" type="video/mp4" controls="" autoplay="" muted=""></video>
            <div class="card-img-overlay">
              <div class="center-text">
                <h2 class="card-title">Bienvenido al mejor centro turistico</h2>
                <a href="#" class="btn">
                  <svg width="201" height="51" viewBox="0 0 201 51">
                    <defs>
                      <style>
                      .cls-1 {
                        fill: none;
                        stroke-width: 1px;
                        stroke: url(#linear-gradient);
                      }
                    </style>
                    <linearGradient id="linear-gradient" x1="140.508" y1="50.5" x2="60.492" y2="0.5" gradientUnits="userSpaceOnUse">
                      <stop offset="0" stop-color="#e90e65"/>
                      <stop offset="1" stop-color="#fff"/>
                    </linearGradient>
                  </defs>
                  <rect id="Rounded_Rectangle_1" data-name="Rounded Rectangle 1" class="cls-1" x="0.5" y="0.5" width="200" height="50" rx="25" ry="25"/>
                </svg>
              Explore</a> </div>
            </div>
          </div>
        </div>    
        <div class="container recent" id="restaurantes">
          <div class="row">
            <h2 style="color: black">Los Mejores Restaurantes</h2>
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
              @forelse ($restaurantes as $restaurante)
              <div class="col-md-4" style="float:left">
                <div class="card mb-3">
                  <div class="card-img">
                    <iframe src="{{$restaurante['url-photo']}}" position="center" width="348" height="402" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">{{$restaurante->name}}</h4>
                    <p class="card-text">{{$restaurante->description}}</p>
                  </div>
                </div>
              </div>
              @empty
              <p>No se encuentra ningun Restaurant</p>
              @endforelse
              </div>
            </div>
          </div>
        </div>
        <div class="container recent" id="hospedajes">
          <div class="row">
            <h2 style="color: black">Los Mejores Hospedajes</h2>
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
              @forelse ($hospedajes as $hospedaje)
              <div class="col-md-4" style="float:left">
                <div class="card mb-3">
                  <div class="card-img">
                    <iframe src="{{$hospedaje['url-photo']}}" position="center" width="348" height="402" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">{{$hospedaje->name}}</h4>
                    <p class="card-text">{{$hospedaje->description}}</p>
                  </div>
                </div>
              </div>
              @empty
              <p>No se encuentra ningun Hospedaje</p> 
              @endforelse
              </div>
            </div>
          </div>
        </div>      
      </div>




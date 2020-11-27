@extends('layouts.app')

<div class="fh5co-home-banner">
  <div class="card">
    <video class="card-img"
      src="/img/portada.mp4"
      type="video/mp4"
      controls
      autoplay
      muted
    ></video>
  
    <div class="card-img-overlay">
      <div class="center-text">
        <h2 class="card-title">Bienvenido a Beas</h2>
        <a href="{{url('tours')}}" class="btn">
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
      Explora</a> </div>
    </div>
  </div>
</div>

<div class="container-fluid fh5co-two-img">
  <div class="row">
    <div class="col-sm-6 pr-0 pl-0">
      <div class="card">
        <img class="card-img" src="img/vista1.jpg" alt="" />
        <div class="card-img-overlay"></div>
      </div>
    </div>
    <div class="col-sm-6 pr-0 pl-0">
      <div class="card">
        <img class="card-img" src="img/vista2.jpg" alt="" />
        <div class="card-img-overlay"></div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid ">
  <div class="container contact-pop">
    <div class="row">
      <div class="col-md-6 pr-0">
        <div class="nuevo">
          <img
            class="card-img w-100"
            src="/img/beas.jpg"
            alt=""
          /><!--imagen de rotacion-->
        </div>
      </div>
      <div class="col-md-6 pl-0" id="about">
        <div class="content">
          <h3>BEAS</h3>
          <h4>"Tu mejor manera de crecer"</h4>
          <hr />
          <p>
          Estamos comprometidos con tu desarrollo por eso registra tu 
          empresa o negocio ahara y te ayudaremos a crecer.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container recent" id="activity">
  <div class="container">
    <h2>Las mejores Empresas</h2>
    <div class="d-flex flex-row justify-content-center alig-items-center">
      <div class="row col-md-12">
        <div>
          <div class="card">
            <img
              class="card-img"
              src="img/despegar.jpg"
              alt=""
            />
            <div class="card-img-overlay">
              <!--
              <a href="{{url('huancayo')}}"
              -->
              <img
                  src="img/heart.png"
                  class="heart"
                  alt="heart icon"
              /></a>
              <div class="bottom-text">
                <h5 class="card-title">Despegar</h5>
                <!--<p class="card-text"><b>La plaza Constitución vendría a ser el equivalente a la plaza de armas de la ciudad.
                                  Ubicada al costado de la calle Real brinda un espacio bello y lleno de historia, tradición y cultura.</b></p>
                                -->
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="card">
            <img 
              class="card-img" 
              src="img/edu.jpg" 
              alt="" />
            <div class="card-img-overlay">
              <!--
              <a href="{{url('identidad')}}"
            -->
                <img
                  src="img/heart.png"
                  class="heart"
                  alt="heart icon"
              /></a>
              <div class="bottom-text">
                <h5 class="card-title">Multiservicios Edu</h5>
                <!--<p class="card-text"><b>Es la identidad de Huancayo como cultura, pues tiene monumentos a artistas
                                  reconocidos e imágenes que son parte de la historia de la provincia y ciudad como de su folklore.</b></p>
                                -->
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="card">
            <img
              class="card-img"
              src="img/baratus.jpg"
              alt="Huaytapallana"
            />
            <div class="card-img-overlay">
              <!--
              <a href="{{url('huaytapallana')}}"
            -->
                <img
                  src="img/heart.png"
                  class="heart"
                  alt="heart icon"
              /></a>
              <div class="bottom-text">
                <h5 class="card-title">Abarrotes Baratus</h5>
                <!--<p class="card-text"><b>Huaytapallana es una montaña del Perú que pertenece a la Cordillera de Huaytapallana,
                                  una prolongación de la Cordillera Central, ramal montañoso de los Andes.</b></p>
                                -->
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="card">
            <img
              class="card-img"
              src="img/ternura.jpg"
              alt="ñahuimpuquio"
            />
            <div class="card-img-overlay">
              <!--
              <a href="{{url('ñahuimpuquio')}}"
            --><img
                  src="img/heart.png"
                  class="heart"
                  alt="heart icon"
              /></a>
              <div class="bottom-text">
                <h5 class="card-title">Detalles Ternura</h5>
                <!--<p class="card-text"><b>La Laguna Azul, también conocida como Laguna del Sauce se encuentra localizada en el distrito
                                  de Sauce dentro de la región de San Martín. Esta ocupa una extensión de 430, 80 hectáreas</b></p>
                                -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
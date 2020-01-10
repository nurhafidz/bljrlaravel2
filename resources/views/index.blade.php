@extends('layout/main')

@section('title','home')

@section('nav')
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="/">MY website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link " href="{{url('/about')}}">About</a>
        <a class="nav-item nav-link" href="{{url('/portofolio')}}">Portofolio</a>
        </div>
    </div>
</nav>
@endsection

@section('head')
    <div>
        <img src="{{url('img/background2.jpg')}}" class="img-fluid" alt="Responsive image">
        <div>
            <div class="carousel-caption">
                <h1 class="display-1 font-weight-bolder">WELCOME</h1>
                <hr style="height:5px; background-color:white;width:auto;">
                <h3>To MY WEBSITE</p>
            </div>
        </div>
    </div>
    
@endsection

@section('content')
<section id="about">
    <div class="container mt-5">
      <div class="row about-container">

        <div class="col-lg-6 content order-lg-1 order-2">
          <h2 class="title">About Website</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>

          <div class="icon-box wow fadeInUp">
            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>

          <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-photo"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>

          <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
            <div class="icon"><i class="fa fa-bar-chart"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

        </div>
        <img src="{{url('img/web.svg')}}" class="col-lg-6 background order-lg-2 order-1 wow fadeInRight">
      </div>

    </div>
  </section>
@endsection

@section('footer')
    <div>
        <div class="card-footer text-muted">
            <div  class="text-center">
                <div>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>
                Copyright &copy; Nurhafidz
            </div>
        </div>
    </div>
@endsection
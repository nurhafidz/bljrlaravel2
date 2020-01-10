@extends('layout/main')

@section('nav')
<nav class="navbar navbar-expand-lg sticky-top navbar-dark " style="background-color: #ff883e;">
    <a class="navbar-brand" href="/">MY website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="{{url('/about')}}">About</a>
        <a class="nav-item nav-link" href="{{url('/portofolio')}}">Portofolio</a>
        </div>
    </div>
</nav>
@endsection

@section('title','about')

@section('head')
<div class="mb-5">
    <img src="{{url('img/background3.jpg')}}" class="img-fluid" alt="Responsive image">
    <div>
        <div class="carousel-caption">
            <h1 class="display-1 font-weight-bolder">ABOUT</h1>
            <hr style="height:5px; background-color:white;width:auto;">
        </div>
    </div>
</div>
@endsection

@section('card')
    <div class="container mt-5 md-5">
        <div class="mt-5 text-center">
            <h1 class="display-3">OUR TEAM</h1>
        </div>
        <div class="card-group">
            <div class="card">
                <img src="{{url('img/about1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Programer</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{url('img/about2.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">designer</h5>
                    <p class="card-text">Vestibulum id metus ac nisl bibendum nibh scelerisque non purus in suspendisse.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{url('img/about3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Marketing</h5>
                    <p class="card-text">Pulvinar leo id risus enim. Bibendum varius tincidunt pellentesque malesuada in.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container mt-5 md-5">
        <div class="text-center">
            <h1 class="display-3">ABOUT</h1>
            <p>lLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sem ac odio scelerisque eleifend. Sed scelerisque pretium sagittis. Nullam tristique fringilla consequat. Etiam vitae placerat nunc, a dapibus nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ultrices erat in lectus consequat, at auctor eros condimentum. Maecenas libero sem, efficitur vel faucibus nec, porta eget enim. Mauris id tellus ut nulla rutrum luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus eget aliquet orci. In interdum, purus rutrum consectetur cursus, sem turpis blandit quam, in euismod nunc odio non est. Aenean sollicitudin sit amet metus eu suscipit. Proin nec velit mi.

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et lectus est. Maecenas iaculis enim eu mauris blandit, in suscipit urna tempus. Sed nec eros quis eros congue ornare. Donec pretium nibh ac porttitor convallis. Etiam dignissim diam placerat, vehicula quam nec, rhoncus ante. Praesent ante dui, tincidunt id condimentum eget, varius vel massa. Donec posuere libero at mi venenatis, quis lobortis massa accumsan. Aenean ultrices a felis ut tincidunt. Phasellus gravida diam eu nunc euismod, eget iaculis neque imperdiet. Etiam vitae molestie enim, at fermentum erat. Nam mollis metus vitae vulputate blandit. Sed pellentesque, felis id volutpat hendrerit, elit est vulputate mauris, non mattis elit purus in velit.
                
                </p>
        </div>
    </div>
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
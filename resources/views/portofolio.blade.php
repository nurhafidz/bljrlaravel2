@extends('layout/main')

@section('nav')
<nav class="navbar navbar-expand-lg sticky-top navbar-light " style="background-color: #caeee7;">
    <a class="navbar-brand" href="/">MY website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link " href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link " href="{{url('/about')}}">About</a>
        <a class="nav-item nav-link active" href="{{url('/portofolio')}}">Portofolio</a>
        </div>
    </div>
</nav>
@endsection

@section('title','portofolio')

@section('head')
    <div class="mb-5">
        <img src="{{url('img/background4.jpg')}}" class="img-fluid" alt="Responsive image">
        <div>
            <div class="carousel-caption">
                <h1 class="display-1 font-weight-bolder">PORTOFOLIO</h1>
                <hr style="height:5px; background-color:white;width:auto;">
            </div>
        </div>
    </div>    
@endsection

@section('content')
    <div class="container">
        <div class="card-group vgr-cards">
        <div class="card1">
            <div class="card-img-body">
            <img class="card-img" src="{{url('img/por1.jpg')}}" alt="Card image cap">
            </div>
            <div class="card-body">
            <h4 class="card-title">Coding</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cupiditate odio perferendis facere reiciendis tempora sapiente consectetur esse dicta alias. Laborum eaque fugit impedit, maiores illum obcaecati. Sequi, delectus ipsum!</p>
            <a href="#" class="btn btn-outline-primary">Primary</a>
            </div>
        </div>
        <div class="card1">
            <div class="card-img-body">
            <img class="card-img" src="{{url('img/por2.jpg')}}" alt="Card image cap"></div>
            <div class="card-body">
            <h4 class="card-title">Design</h4>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, at? Qui, quis eaque! Hic quia voluptates porro dolores fuga eos expedita ea, vitae a ex magnam deleniti praesentium eligendi magni!</p>
            <a href="#" class="btn btn-outline-primary">Primary</a>
            </div>
        </div>
        <div class="card1">
            <div class="card-img-body">
            <img class="card-img" src="{{url('img/por3.jpg')}}" alt="Card image cap"></div>
            <div class="card-body">
            <h4 class="card-title">Market</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur esse, illum explicabo est dignissimos saepe, soluta autem illo animi earum eum nam reiciendis ipsa temporibus, laboriosam ipsum corrupti dolorum voluptas!</p>
            <a href="#" class="btn btn-outline-primary">Primary</a>
            </div>
        </div>
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
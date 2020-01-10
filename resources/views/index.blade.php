@extends('layout/main')

@section('title','home')

@section('head')
    <div>
        
        <img src="{{url('img/background2.jpg')}}" class="img-fluid" alt="Responsive image">
        <div>
            <div class="carousel-caption" >
                <h1 class="display-1 font-weight-bolder">WELCOME</h1>
                <hr style="height:5px; background-color:white;width:auto;">
                <h3>To MY WEBSITE</p>
            </div>
        </div>
    </div>
    
@endsection

@section('content')
<div class="container">
    <div>

    </div>
</div>    
@endsection

@section('footer')
        <div class="card-footer text-muted">
            Copyright &copy;
        </div>
@endsection
@extends('layout/main')

@section('title','about')

@section('container')
    <div class="cointainer">
        <div class="bg-secondary text-white">
            <div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
            <!-- Content here -->
                <div class="text-center text-monospace" style="font-size: 100px">
                    Hello {{$nama}}
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($alcoholBottles as $alcoholBottle)
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem; margin-top: 50px">
                <img src="{{"storage/$alcoholBottle->image"}}" class="card-img-top" width="100" height="240" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$alcoholBottle->name}}</h5>
                    <p class="card-text">{{$alcoholBottle->price}}$</p>
                    <p class="card-text">{{$alcoholBottle->description}}</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection

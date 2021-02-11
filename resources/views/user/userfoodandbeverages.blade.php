@extends('layouts.userapp')

@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-2"></div>
        <div class="col-lg-10">
            <div class="jumbotron">
                <h1 class="display-4">Newly added foods and beverages</h1>
                <p class="lead">You can choose whatever you want ! whatever you like !</p>
                <hr class="my-4">
                <ul class="list-group" >
                    @foreach ($items as $item)
                    <div class="bg-light pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                        <div class="my-1">
                            <h2 class="display-5">{{$item->name}}</h2>
                        </div>
                        <div class="bg-white shadow mx-auto" style="width: 50%; height: 300px; border-radius: 21px 21px 21px 21px;">
                            <br>
                            <img src="storage/item_imgs/{{$item->image}}" height="150" width="200" alt="image">
                            <p class="lead">{{$item->description}}</p>
                            <h5 class="display-5">Rs.{{$item->price}}</h5>
                        </div>
                        <br>
                    </div>
                    @endforeach
                </ul> <br>
                <a class="btn btn-primary btn-lg" href="/show-item" role="button">Get more !</a>
              </div>    
        </div>
    </div>
@endsection
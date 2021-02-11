@extends('layouts.app')

@section('content')
<div class="bd-example">
    <img src="{{URL::asset('/img/catering1.jpg')}}" class="d-block w-100" alt="image">
</div>
<!----------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------->
<!-- Show success message when booking is made  -->
<div class="col-md-12 text-center">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
</div>
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
        <div class="btn-group" role="group" aria-label="Manage"> 
            <a class="btn btn btn-danger" href="/getItem/{{$item->id}}" title="Take Away">Take Away </a>
            <a class="btn btn btn-primary" href="/getItem/delivery/{{$item->id}}" title="Delivery">Delivery </a>
        </div>
    </div>
    <br>
</div>
</div>
@endforeach
 @endsection
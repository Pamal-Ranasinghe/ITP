@extends('layouts.adminapp')

@section('content')
<center><h1>Food and Beverages</h1></center> 
<div class="row">
  <div class="col-lg-5"></div>
  <div class="col-lg-5"></div>
  <div class="col-lg-2">
    <form action="/search-items" method="get">
      <h1 class="h3"><input class="form-control" type="search" name="search" placeholder="Search..."
              aria-label="Search" title="search"></h1>
      </form>
  </div>
</div>

<hr>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header text-right">
                <a href="/add-item" class="btn btn-primary">Add New Item</a>
                <a href="/item-pdf" class="btn btn-danger">Export to PDF</a>
            </div>

      
      <div>
        <table class="table">
          <thead>
            <tr>
                <th>Item Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Type</th>
            </tr>
          </thead>
          @foreach($items as  $item)
          <tbody>
            <tr>
                <td title="item_name">{{$item->name}}</td>
                <td title="item_desc">{{$item->description}}</td>
                <td title="item_price">{{$item->price}}</td>
                <td title="item_type">{{ ucwords(str_replace("_"," ", $item->type))}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Manage"> 
                        <form action="/set-for-update/{{$item->id}}" method="GET">
                        @csrf
                            <button class="btn btn-primary" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </form>                                       
                       
                        <form action="/delete-one-item/{{$item->id}}" method = "GET">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </form>
                    </div>                                    
                </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
  

    </div>
    <div class="col-lg-2"><div>
    </form></div></div>
  </div> 
@endsection

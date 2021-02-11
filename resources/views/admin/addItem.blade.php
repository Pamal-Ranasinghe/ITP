@extends('layouts.adminapp')

@section('content')
<center><h1>Add new Item</h1></center> <hr>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header ">Add Item</div>
            
                            <div class="card-body">
                                <form method="POST" action="/insert-item" enctype="multipart/form-data"  >
                                    @csrf
                                    <div class="form-group row">
                                        <label for="item_name" class="col-md-4 col-form-label text-md-right">{{ __('Item Name') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="item_name" type="item_name" class="form-control @error('item_name') is-invalid @enderror" name="item_name" value="{{ old('item_name') }}"  autocomplete="item_name" placeholder="Item_name">
            
                                            @error('item_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('type') }}</label>
            
                                        <div class="col-md-2">                                
                                            <select class="form-control @error('type') is-invalid @enderror" name="type" id="type">
                                                <option disabled selected>Type</option>
                                                <option value="food and beverages">Foods and Beverages</option>
                                               

                                            </select>
            
                                            @error('type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="price" type="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}"  autocomplete="price" placeholder="Item Price">
            
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="desc" class="col-md-4 col-form-label text-md-right">{{ __('desc') }}</label>
            
                                        <div class="col-md-3">
                                            <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}"  autocomplete="desc" placeholder="Description">
            
                                            @error('desc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                     
                                    <div class="form-group row">
                                      <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Item Picture') }}</label>
          
                                      <div class="col-md-3">
                                          <input type="file" name="avatar" id="avatar" class="form-control" accept="image/jpeg">
          
                                          @error('avatar')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
            
                                    
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Add Item') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

      

        </div>
        <div class="col-lg-2"></div>
    </div>
@endsection
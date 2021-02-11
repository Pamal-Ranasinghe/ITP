@extends('layouts.adminapp')

@section('content')
<center><h1>Send Email</h1></center> <hr>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header ">Send Email</div>
            
                            <div class="card-body">
                                <form method="GET" action="/send-email-user/{{$user->id}}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Customer ID') }}</label>
            
                                        <div class="col-md-6">
                                        <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id"  autocomplete="id" value="{{$user->id}}" readonly>
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"  autocomplete="id" autofocus placeholder="Title of email">
            
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Content') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="content" type="content" class="form-control @error('content') is-invalid @enderror" name="content"  autocomplete="content" placeholder="E-mail Content">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                   
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Send') }}
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

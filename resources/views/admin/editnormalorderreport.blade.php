@extends('layouts.adminapp')

@section('content')
<center><h1>Update Report</h1></center> <hr>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header ">Update Report</div>
            
                            <div class="card-body">
                                <form method="GET" action="/update-normal-orders-income/{{$report->id}}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Report ID') }}</label>
            
                                        <div class="col-md-6">
                                        <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id"  autocomplete="id" value="{{$report->id}}" readonly>
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Created Date') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{$report->created_at}}" autocomplete="date" autofocus placeholder="Created date">
            
                                            @error('date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="amount" type="amount" class="form-control @error('content') is-invalid @enderror" name="amount" value="{{$report->amount}}" autocomplete="amount" placeholder="Amount">
            
                                            @error('amount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                   
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update') }}
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
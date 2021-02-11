@extends('layouts.adminapp')

@section('content')
<center><h1>Add new Employee</h1></center> <hr>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header ">Add Employee</div>
            
                            <div class="card-body">
                                <form method="Post" action="/storeEmployee" enctype="multipart/form-data"  >
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Employee Name') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="First Name and Last Name">
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="E-mail Address">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>
            
                                        <div class="col-md-2">                                
                                            <select class="form-control @error('designation') is-invalid @enderror" name="designation" id="designation">
                                                <option disabled selected>Designation</option>
                                                <option value="branch_manager">Branch Manager</option>
                                                <option value="chef">Chef</option>
                                                <option value="line_cook">Line Cook</option>
                                                <option value="team_member">Team Member</option>
                                                <option value="cashier">Cashier</option>
                                                <option value="intern">Intern</option>
                                                <option value="dishwasher">Dishwasher</option>
                                            </select>
            
                                            @error('designation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address" placeholder="Address of the Employee">
            
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="ph_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>
            
                                        <div class="col-md-3">
                                            <input id="ph_no" type="text" class="form-control @error('ph_no') is-invalid @enderror" name="ph_no" value="{{ old('ph_no') }}"  autocomplete="ph_no" placeholder="Mobile Number" maxlength="10">
            
                                            @error('ph_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
            
                                        <div class="col-md-2">
                                            <input type="date" name="dob" class="form-control  @error('dob') is-invalid @enderror" id="dob">
            
                                            @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                       
                                    </div>
            
            
                                    <div class="form-group row">
                                        <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Employee Picture') }}</label>
            
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
                                                {{ __('Add Employee') }}
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

@extends('layouts.app')

@section('content')


<div style="width:100%; color: blue;"> 
    <div class="card-header">
        <div style="text-align: center;"> 
            <img src="{{ asset('images/title.png') }}" alt="Aqui ira la imagen" class="img-fluid">
        </div>
    </div>
</div>
<div class="container">


    <body background='../images/fondos.jpg'>
        
        
        <div class="row justify-content-center">   
            <div style="float:left;">

                <font color="black" face="Comic Sans MS,arial">
                    <div class="col-md-10" style="line-height: 100px;text-align: center;">
                        <div class="card">
                            <h3 class="card-header">{{ __('Únete a nosotros') }}</h3>
                                <h6 class="card-body">Bienvenido a juegos clásicos, Para registarte llena los espacios en blanco.</h6> 
                            
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </font>
             </div>    
            <div style="float:right;">
                        
                    <img src="{{ asset('images/crash.jpg') }}" alt="Aqui ira la imagen">               
                
            </div>
        </div>
        
    </body>
</div>
@endsection

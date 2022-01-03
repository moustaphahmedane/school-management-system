@extends('auth.layouts.app')

@section('content')
 <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Creer votre compte</h1>
                                    </div>
                                   
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control 
                                form-control-user @error('name') is-invalid @enderror"
                                 name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                        <div class="form-group">
                                    <input id="email" type="email" class="form-control
                                    form-control-user @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}"  required 
                                    autocomplete="email" autofocus placeholder="Enter Email Adress">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                        <div class="form-group">
                                      
                                    <input id="password" type="password" class="form-control
                                    form-control-user @error('password') is-invalid @enderror" 
                                    name="password" value="{{ old('email') }}"  required 
                                    autocomplete="corrent-password" autofocus placeholder="Password">
                                         @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                                                <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required 
                                autocomplete="new-password">
                            </div>
                                   </div>
                                      <button class="btn btn-primary btn-user btn-block">
                                        Creer
                                        </button>
                                        <hr>
                                 
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{route('login')}}">Login Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

@endsection

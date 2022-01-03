@extends('auth.layouts.app')

@section('content')
  <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block ">
                            <img src="{{ asset('admin/rs.jpg ') }}" style="width: 500px; height: 500px;" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenue!</h1>
                                    </div>
                                       <form method="POST" action="{{ route('login') }}">
                        @csrf
                                        <div class="form-group">Nom d'utilisateur <br>
                                    <input id="email" type="email" class="form-control
                                    form-control-user @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}"  required 
                                    autocomplete="email" autofocus placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                        <div class="form-group">
                                      Mot de passe
                                      <br>
                                    <input id="password" type="password" class="form-control
                                    form-control-user @error('password') is-invalid @enderror" 
                                    name="password" value="{{ old('email') }}"  required 
                                    autocomplete="corrent-password" autofocus placeholder="Mot de passe">
                                         @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkboc small">
                                            <input class="custom-control-input" type="checkbox"
                                            name="remember" id="customCheck" {{ old('remember') ?
                                        'checked' : '' }}>
                                           <label class="custom-control-label" for="customCheck">souviens de moi
                                           </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                        Connexion
                                        </button>
                                        <hr>
                                 
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{route('password.request')}}">Mot de passe oublié?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ ('register') }}">Créer un compte!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
@endsection

@extends('layouts.master')

@section('content')
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Modifier les informations</h1>
        <a href="{{route('teachers.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> retour</a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Enseignant</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('teachers.update' ,  ['teacher' => $teacher->id] )}}">
                @csrf
                @method('PUT')
                <div class="form-group row">

                             {{-- Photo --}}
               

                    {{-- Name --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Nom</label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('name') is-invalid @enderror" 
                            id="exampleName"
                            placeholder="Name" 
                            name="name" 
                            value="{{ old('name') ? old('name') : $teacher->name }}">

                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    {{-- Middle Name --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Prenom</label>
                        <input type="text" 
                            class="form-control form-control-user @error('middle_name') is-invalid @enderror" 
                            id="exampleMiddle_Name"
                            placeholder="Prenom" 
                            name="middle_name" 
                            value="{{ old('middle_name') ? old('middle_name') : $teacher->middle_name  }}">

                        @error('middle_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                       {{-- Registration --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Matricule</label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('registration') is-invalid @enderror" 
                            id="exampleRegistration"
                            placeholder="Matricule" 
                            name="registration" 
                            value="{{ old('registration') ? old('registration') : $teacher->registration }}">

                        @error('registration')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                        {{-- Gender --}}
                    
                        <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Sexe</label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('gender') is-invalid @enderror" 
                            id="exampleGender"
                            placeholder="Sexe" 
                            name="gender" 
                            value="{{ old('gender') ? old('gender') : $teacher->gender }}">

                        @error('gender')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                        {{-- Grade --}}
                    
                        <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Classe</label>
                        <input 
                            type="email" 
                            class="form-control form-control-user @error('grade') is-invalid @enderror" 
                            id="exampleEmail"
                            placeholder="Email" 
                            name="email" 
                            value="{{ old('email') ? old('email') : $teacher->email }}">

                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                {{-- Save Button --}}
                <button type="submit" class="btn btn-success btn-user btn-block">
                    Modifier
                </button>

            </form>
        </div>
    </div>

</div>
@endsection
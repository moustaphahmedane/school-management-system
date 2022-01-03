@extends('layouts.master')

@section('content')

 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Enseignants</h1>
        <a href="{{route('teachers.create')}}" class="btn btn-sm btn-primary" >
            <i class="fas fa-plus"></i> Ajouter Enseignant
        </a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tout les Enseignants</h6>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Matricule</th>
                            <th>Sexe</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($teachers as $teacher)
                           <tr>
                              
                               <td>{{$teacher->name}}</td>
                               <td>{{$teacher->middle_name}}</td>
                               <td>{{$teacher->registration}}</td>
                               <td>{{$teacher->gender}}</td>
                               <td>{{$teacher->email}}</td>
                               <td style="display: flex">
                                   <a href="{{ route('teachers.edit', ['teacher' => $teacher->id]) }}" class="btn btn-primary m-2">
                                        <i class="fa fa-pen"></i>
                                   </a>
                                   <form method="POST" action="{{ route('teachers.destroy', ['teacher' => $teacher->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger m-2" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

    @endsection
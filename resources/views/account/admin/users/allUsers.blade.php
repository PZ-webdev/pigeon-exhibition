@extends('account.layouts.app')
@section('title') Użytkownicy - @endsection
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
       
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Użytkownicy</h1>
        <p class="mb-4">Spis wszystkich użytkowników w serwisie.</p>

        @if(session()->has('message'))
        <div class="alert alert-{{ session()->get('type') }} alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Wyniki:</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Lp.</th>
                                <th>Imię i Nazwisko</th>
                                <th>Data dołączenia</th>
                                <th>OPCJE</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Lp.</th>
                                <th>Imię i Nazwisko</th>
                                <th>Data dołączenia</th>
                                <th>OPCJE</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user)                                
                            <tr>
                                <td>{{$i++}}.</td>
                                <td>{{$user->name}} {{$user->surname}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <a href="{{route('editPigeon', $user->id)}}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{route('deletePigeon', [$user->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Usunąć gołebia?')">
                                        <i class="fa fa-trash"></i>
                                      </a>
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
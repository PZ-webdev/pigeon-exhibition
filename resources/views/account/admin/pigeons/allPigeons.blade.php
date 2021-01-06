@extends('account.layouts.app')
@section('title') Wszystkie Gołębie - @endsection
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
       
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Wszystkich gołebi: {{$pigeons->count()}}</h1>
        <p class="mb-4">Spis wszystkich gołębii w serwisie.</p>

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
                                <th>Nr. Obrączki</th>
                                <th>Hodowca</th>
                                <th>OPCJE</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr> 
                                <th>Lp.</th>
                                <th>Nr. Obrączki</th>
                                <th>Hodowca</th>
                                <th>OPCJE</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($pigeons as $pigeon)                              
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$pigeon->ring_number}}</td>
                                <td>{{$pigeon->user->name . ' ' . $pigeon->user->surname}} </td>
                                <td>
                                    <a href="{{route('editPigeon', $pigeon->id)}}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{route('deletePigeon', [$pigeon->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Usunąć gołebia?')">
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
@extends('account.layouts.app')
@section('title')Dodaj Gołębia - @endsection
@section('content')

   <!-- Begin Page Content -->
   <div class="container-fluid">       
        <!-- Page Heading -->
        <div class="row">
            <div class="col-6">
                <h1 class="h3 mb-2 text-gray-800">Dodaj Gołebia</h1>
                <p class="mb-4">Dodaj gołębia, którego chcesz pokazać na wystawie.</p>
                <hr>
                @if(session()->has('message'))
                <div class="alert alert-{{ session()->get('type') }} alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                    <form class="user" method="POST" action="{{ route('addPigeonPost') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label>Numer obrączki</label>
                            <input type="text" class="form-control form-control-user" name="ring_number"
                                placeholder="PL-0293-18-0000" autofocus required>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                Płeć:
                                <select class="form-select form-control" name="sex" required>
                                    <option value="1">Samiec</option>
                                    <option value="2">Samiczka</option>
                                    <option value="x">Gołąb Młody</option>
                                  </select>
                            </div>
                            <div class="form-group col-6">
                                Kolor:
                                <select class="form-select form-control" name="color" required>
                                    <option value="1">Czerwony</option>
                                    <option value="2">Niebieski</option>
                                    <option value="">Pstry</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                Kategoria:
                                <select class="form-select form-control" name="category" required>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>Zdjęcie:</label>
                                <input type="file" class="form-control-file" name="img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <button type="submit" class="btn btn-success btn-user btn-block">Dodaj</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 50rem;"
                                            src="{{asset('admin/img/undraw_Upvote_re.svg')}}" alt="">
                </div>
        </div>
    </div>
@endsection
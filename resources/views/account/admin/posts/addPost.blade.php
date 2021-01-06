@extends('account.layouts.app')
@section('title')Dodawanie wpisu - @endsection
@section('content')

   <!-- Begin Page Content -->
   <div class="container-fluid">       
        <!-- Page Heading -->
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800">Dodaj Wpis</h1>
                <p class="mb-4">Dodaj wpis, aby poinformować użytkowników o nowinach.</p>
                <hr>
            </div>  
        <div class="col-6">  
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
                            <label>Tytuł wpisu</label>
                            <input type="text" class="form-control" name="title" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Treść:</label>
                            <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </form>
            </div>
            <div class="col-2">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Opublikować?</label>
                </div>
                <hr>
                <div class="form-group">
                    <label>Tagi:</label>
                    <textarea name="" rows="5" class="form-control" placeholder="Tagi, oddziel przecinkiem, ..."></textarea>
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-success btn-user btn-block">Dodaj wpis</button>
                </div>
            </div>
            <div class="col-4">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 50rem;"
                                        src="{{asset('admin/img/undraw_Post.svg')}}" alt="">
            </div>
        </div>
    </div>
@endsection
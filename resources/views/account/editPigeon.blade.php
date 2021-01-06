@extends('account.layouts.app')
@section('title')Edycja Gołębia - @endsection
@section('content')

   <!-- Begin Page Content -->
   <div class="container-fluid">       
        <!-- Page Heading -->
        <div class="row">
            <div class="col-6">
                <h1 class="h3 mb-2 text-gray-800">Edytujesz gołębia: <strong>{{$pigeon->ring_number}}</strong></h1>
                <p class="mb-4"></p>
               @if(session()->has('message'))
                <div class="alert alert-{{ session()->get('type') }} alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <hr>
                    <form class="user" action="{{route('editPigeonPost', $pigeon->id)}}" method="POST">
                        @csrf
                        <div class="form-group ">
                            <label>Numer obrączki</label>

                            <input type="text" class="form-control form-control-user @error('ring_number') is-invalid @enderror" name="ring_number" 
                                placeholder="" value="{{ $pigeon->ring_number ?? old('ring_number') }}">
                                @error('ring_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                Płeć:
                                <select class="form-select form-control" name="sex" @error('sex') is-invalid @enderror">
                                    {{-- <option value="Swiss System" @if(old('type', $post->type) === 'Swiss System')  'selected' @endif>Swiss System</option> --}}
                                    <option value="1" @if($pigeon->sex === '1') selected='selected' @endif>Samiec</option>
                                    <option value="2" @if($pigeon->sex === '2')  selected='selected' @endif>Samiczka</option>
                                    <option value="x" @if($pigeon->sex === 'x')  selected='selected' @endif>Gołąb Młody</option>
                                  </select>
                                  @error('ring_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                Kolor:
                                <select class="form-select form-control" name="color">
                                    <option value="1"@if($pigeon->color === '1') selected='selected' @endif>Czerwony</option>
                                    <option value="2"@if($pigeon->color === '2') selected='selected' @endif>Niebieski</option>
                                    <option value="">Pstry</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                Kategoria:
                                <select class="form-select form-control" name="category">
                                    <option value="A"@if($pigeon->category === 'A') selected='selected' @endif>A</option>
                                    <option value="B"@if($pigeon->category === 'B') selected='selected' @endif>B</option>
                                    <option value="C"@if($pigeon->category === 'C') selected='selected' @endif>C</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>Zdjęcie:</label>
                                <input type="file" class="form-control-file">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <button type="submit" class="btn btn-success btn-user btn-block">Edytuj</button>
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
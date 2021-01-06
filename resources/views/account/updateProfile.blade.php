@extends('account.layouts.app')
@section('title')Uzupełnij Profil - @endsection
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-6">
            <h1 class="h3 mb-2 text-gray-800">Uzupełnij dane Swojego konta</h1>
            <p class="mb-4">Dodaj dane, abyś mógł w pełni korzystać z naszego serwisu</p>
            <hr>

            {{-- @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session()->has('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session()->get('danger') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif --}}
        <form class="user" method="POST" action="{{ route('addPigeonPost') }}" enctype="multipart/form-data">
            @csrf
            <p class="mb-4 text-gray-800">Dane dotyczące odziału i sekcji <strong>(są wymagane) </strong>.</p>
            <div class="row">
                <div class="form-group col-9">
                    <label for="">Odział</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-3">
                    <label for="">Numer Oddziału</label>
                    <input type="number" class="form-control" placeholder="Nr. Oddziału">
                </div>
                <div class="form-group col-12">
                    <label for="">Sekcja</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-9">
                    <label for="">Adres</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-3">
                    <label for="">Kod pocztowy</label>
                    <input type="number" class="form-control" placeholder="">
                </div>
                <div class="form-group col-12">
                    <label for="">Nr. Kontaktowy</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <button type="submit" class="btn btn-success btn-user btn-block">Zapisz</button>
                </div>
            </div>
        
    </div>
    <div class="col-6">
        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 35rem;"
            src="{{asset('admin/img/undraw_Personal.svg')}}" alt="">
        <hr>
        <p class="h5 mb-4 text-gray-900">Wybierz Avatar:</p>
        <div class="row">
            <label for="avatar">
                <div class="col-4">
                <img src="http://127.0.0.1:8000/admin/img/undraw_profile_1.svg" alt="Avatar" srcset=""
                    class="img-profile rounded-circle" />
            </div>
        </label>
        <input type="hidden" name="avatar" value="1" id="avatar">
            
            <div class="col-4">
                <img src="http://127.0.0.1:8000/admin/img/undraw_profile_2.svg" alt="Avatar" srcset=""
                    class="img-profile rounded-circle" />
            </div>
            <div class="col-4">
                <img src="http://127.0.0.1:8000/admin/img/undraw_profile_3.svg" alt="Avatar" srcset=""
                    class="img-profile rounded-circle" />
            </div>
        </div>
    </div>
</form>
</div>
</div>
@endsection

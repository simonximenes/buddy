@extends('layouts.backend') @section('header_script') @endsection
@section('mainTitle') Tambah Kakitangan Baru @endsection @section('topButton')
<a href="/staffs" class="btn btn-link btn-float has-text">
    <i class="fa fa-address-card" aria-hidden="true"></i>
    <span>Senarai Kakitangan</span>
</a>
@endsection @section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/staffs" method="post">
                @csrf
                <fieldset>
                    <legend>Sila isikan borang ini dengan lengkap.</legend>
                    <!-- Nama -->
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            id="name"
                            placeholder="Sila Masukkan Nama Penuh Kakitangan..."
                        />
                        <small id="nameHelp" class="form-text text-muted"
                            >Contoh : Simon Anak Malinah</small
                        >
                    </div>
                    <!-- Alamat -->
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input
                            type="text"
                            name="address"
                            class="form-control"
                            id="address"
                            placeholder="Sila Masukkan Alamat Kakitangan..."
                        />
                        <small id="addressHelp" class="form-text text-muted"
                            >Contoh : A-11-01, Presint 11, Putrajaya</small
                        >
                    </div>
                    <!-- Emel -->
                    <div class="form-group">
                        <label for="email">Emel</label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            id="email"
                            placeholder="Sila Masukkan Alamat Emel Kakitangan..."
                        />
                        <small id="emailHelp" class="form-text text-muted"
                            >Contoh : simonximenes@gmail.com</small
                        >
                    </div>
                    <!-- Phone -->
                    <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input
                            type="text"
                            name="phone"
                            class="form-control"
                            id="phone"
                            placeholder="Sila Masukkan Nombor Telefon Kakitangan..."
                        />
                        <small id="phoneHelp" class="form-text text-muted"
                            >Contoh : 0165862729 @ 016-5862729</small
                        >
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </fieldset>
            </form>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col bg-primary">Kolum 4</div>
            <div class="col bg-success">Kolum Sama Rata Saiznya</div>
            <div class="col bg-warning">Kolum 4</div>
        </div>
    </div>
</div>
@endsection

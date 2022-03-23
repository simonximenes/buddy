@extends('layouts.backend') @section('header_script') @endsection
@section('mainTitle') Kemaskini Maklumat Kakitangan Bernama [
{{ $staff->name }} ] @endsection @section('topButton')
<a href="/staffs" class="btn btn-link btn-float has-text">
    <i class="fa fa-address-card" aria-hidden="true"></i>
    <span>Kembali</span>
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
            <form action="/staffs/{{ $staff->id }}" method="post">
                @csrf @method('PATCH')
                <fieldset>
                    <legend>
                        Sila pastikan borang dikemaskini dengan lengkap.
                    </legend>
                    <!-- Nama -->
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            id="name"
                            placeholder="Sila Masukkan Nama Penuh Kakitangan..."
                            value="{{ $staff->name }}"
                        />
                        <small id="nameHelp" class="form-text text-muted"
                            >Sila Kemaskini Nama Kakitangan</small
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
                            value="{{ $staff->address }}"
                        />
                        <small id="addressHelp" class="form-text text-muted"
                            >Sila Kemaskini Alamat Kakitangan</small
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
                            value="{{ $staff->email }}"
                        />
                        <small id="emailHelp" class="form-text text-muted"
                            >Sila Kemaskini Emel Kakitangan</small
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
                            value="{{ $staff->phone }}"
                        />
                        <small id="phoneHelp" class="form-text text-muted"
                            >Sila Kemaskini Nombor Telefon Kakitangan</small
                        >
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Kemaskini
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

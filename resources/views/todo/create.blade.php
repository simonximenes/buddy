@extends('layouts.backend') @section('header_script') @endsection
@section('mainTitle') Tambah Item Baru @endsection @section('topButton')
<a href="/todos" class="btn btn-link btn-float has-text">
    <i class="fa fa-list" aria-hidden="true"></i>
    <span>Senarai Semak</span>
</a>
@endsection @section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="/todos" method="post">
                @csrf
                <fieldset>
                    <legend>Sila isikan borang ini dengan lengkap.</legend>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            id="name"
                            placeholder="Sila Masukkan Nama Item..."
                        />
                        <small id="nameHelp" class="form-text text-muted"
                            >Contoh : MyMiE Kecik</small
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

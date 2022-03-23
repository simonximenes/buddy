@extends('layouts.backend') @section('header_script') @endsection
@section('mainTitle') Kemaskini Item Bernama [ {{ $todo->name }} ] @endsection
@section('topButton')
<a href="/todos" class="btn btn-link btn-float has-text">
    <i class="fa fa-list" aria-hidden="true"></i>
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

            <form action="/todos/{{ $todo->id }}" method="post">
                @csrf @method('PATCH')
                <fieldset>
                    <legend>
                        Sila pastikan borang dikemaskini dengan lengkap.
                    </legend>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            id="name"
                            placeholder="Sila Masukkan Nama Item..."
                            value="{{ $todo->name }}"
                        />
                        <small id="nameHelp" class="form-text text-muted"
                            >Sila Kemaskini Nama Item</small
                        >
                    </div>

                    <button type="submit" class="btn btn-success">
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

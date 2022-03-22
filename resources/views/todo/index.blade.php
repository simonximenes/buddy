@extends('layouts.backend') @section('header_script') @endsection
@section('mainTitle') Senarai Semak Perkara @endsection @section('topButton')
<a href="/staff" class="btn btn-link btn-float has-text">
    <i class="fa fa-plus" aria-hidden="true"></i>
    <span>Tambah Senarai Baru</span>
</a>
@endsection @section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Makan</td>
                        <td>Belum Selesai</td>
                        <td>
                            <button class="btn btn-primary">Selesai</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Makan</td>
                        <td>Belum Selesai</td>
                        <td>
                            <button class="btn btn-primary">Selesai</button>
                        </td>
                    </tr>
                </tbody>
            </table>
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

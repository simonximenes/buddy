@extends('layouts.backend') @section('header_script') @endsection
@section('mainTitle') Senarai Semak Kakitangan @endsection @section('topButton')
<a href="/staffs/create" class="btn btn-link btn-float has-text">
    <i class="fa fa-plus" aria-hidden="true"></i>
    <span>Tambah Kakitangan Baru</span>
</a>
@endsection @section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Emel</th>
                        <th scope="col">Telefon</th>
                        <th scope="col" style="text-align: center" colspan="9">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($staffs as $key => $staff)
                    <tr>
                        <th scope="row">{{ $staffs->firstItem() + $key }}</th>
                        <td>{{$staff->name}}</td>
                        <td>{{$staff->address}}</td>
                        <td>{{$staff->email}}</td>
                        <td>{{$staff->phone}}</td>
                        <td>
                            <td></td>
                            <td>
                                <a href="/staffs/{{$staff->id}}" class="btn btn-info">Lihat</a>
                            </td>
                            <td>
                                <a href="/staffs/{{$staff->id}}/edit" class="btn btn-warning">Kemaskini</a>
                            </td>
                                <td>
                                    <form
                                        action="staffs/{{$staff->id}}"
                                        method="post"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-danger"
                                        >
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            <td></td>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">No Data Yet</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $staffs->links() }}
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

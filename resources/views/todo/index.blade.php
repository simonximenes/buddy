@extends('layouts.backend') @section('header_script') @endsection
@section('mainTitle') Senarai Semak {{ $name }}@endsection @section('topButton')
<a href="/todos/create" class="btn btn-link btn-float has-text">
    <i class="fa fa-plus" aria-hidden="true"></i>
    <span>Tambah Item Baru</span>
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
                        <th scope="col" style="text-align: center" colspan="8">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- @foreach ($todos as $todo)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$todo->name}}</td>
                        <td>{{$todo->status}}</td>
                        <td>
                            <button class="btn btn-primary">Selesai</button>
                        </td>
                    </tr>
                    @endforeach -->
                    @forelse ($todos as $key => $todo)
                    <tr>
                        <th scope="row">{{ $todos->firstItem() + $key }}</th>
                        <td>{{$todo->name}}</td>
                        <td>{{$todo->status}}</td>
                        <td>
                            <td></td>
                            <td></td>
                            <td></td>
                                <td>
                                    <button class="btn btn-primary">
                                        Selesai
                                    </button>
                                </td>
                                <td>
                                    <form
                                        action="todos/{{$todo->id}}"
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
                            <td></td>
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
            {{ $todos->links() }}
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

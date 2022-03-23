@extends('layouts.backend') @section('header_script') @endsection
@section('mainTitle') Maklumat Kakitangan Bernama [ {{ $staff->name }} ]
@endsection @section('topButton')
<a href="/staffs" class="btn btn-link btn-float has-text">
    <i class="fa fa-address-card" aria-hidden="true"></i>
    <span>Kembali</span>
</a>
@endsection @section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session("status") }}
            </div>
            @endif

            <div>
                <h1 class="display-3">{{ $staff->name }}</h1>
                <p class="lead">
                    <font color="green"
                        ><i class="fa fa-address-card" aria-hidden="true"></i
                    ></font>
                    Alamat :
                    <b>{{ $staff->address }}</b>
                </p>
                <p class="lead">
                    <font color="red"
                        ><i class="fa fa-envelope" aria-hidden="true"></i
                    ></font>
                    Emel :
                    <b>{{ $staff->email }}</b>
                </p>
                <p class="lead">
                    <font color="blue"
                        ><i class="fa fa-phone" aria-hidden="true"></i
                    ></font>
                    Telefon :
                    <b>{{ $staff->phone }}</b>
                </p>
                <hr class="my-4" />
                <p>
                    Tarikh Terakhir Maklumat Dikemaskini :
                    <b
                        ><font
                            color="red"
                            >{{ \Carbon\Carbon::parse($staff->updated_at)->format('d M, Y') }}</font
                        ></b
                    >
                </p>
                <p>
                    Tarikh Rekod Dicipta :
                    {{ \Carbon\Carbon::parse($staff->created_at)->format('d M, Y') }}
                </p>
                <p class="lead">
                    <a
                        class="btn btn-warning btn-lg"
                        href="/staffs/{{$staff->id}}/edit"
                        role="button"
                        >Kemaskini</a
                    >
                </p>
            </div>
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

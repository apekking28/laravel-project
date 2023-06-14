@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Warga') }}</div>

                <div class="card-body">
                <div class="container"> 
                    <a class="btn btn-primary" href="/warga/create">Add warga</a>
                </div>
                <table class="table table-hover">
            <tr>
                <th>NAMA</th>
                <th>NIK</th>
                <th>NO.KK</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </tr>
            @foreach($warga as $w)
            <tr>
                <td>{{$w-> id}}</td>
                <td>{{$w-> nama}}</td>
                <td>{{$w -> nik}}</td>
                <td>{{$w -> no_kk}} </td>
                <td>{{$w -> alamat}}</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/warga/{{$w -> id}}/edit">Edit</a>
                    <form action="/warga/{{$w -> id}}" method="post">
                    @csrf
                    @method('delete')
                        <input class="btn btn-danger" type="submit" value= "Delete">
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
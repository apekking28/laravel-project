@extends('layouts.master')

@section('content')
<div class="container">
<form action="/warga/store" method="POST" >
<h1>Edit warga</h1>
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="nama"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga -> nama}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nik</label>
        <input type="text" name="nik"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        value="{{$warga -> nik}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No. kk</label>
        <input type="text"  name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga -> no_kk}}">
    </div>
    <select class="form-select" name="jenis_kelamin">
        <option value="">Pilih jenis kelamin</option>
        <option value="L" @if($warga -> jenis_kelamin == "L") selected @endif>Laki-laki</option>
        <option value="P" @if($warga -> jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <div class="md-3">
        <label for="">Alamat</label>
        <textarea class="form-control" name="alamat" rows="10">{{$warga -> alamat}}</textarea><br>
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Update">
    <a href="/warga" class="btn btn-warning">Cancel</a>
</form>
</div>
@endsection
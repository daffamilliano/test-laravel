@extends('jenisbarang.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Add New Jenis Barang</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('jenisbarang.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('jenisbarang.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Jenis:</strong>
                <input type="text" name="jenis_barang" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                <input class="form-control" name="deskripsi" placeholder="Deskripsi"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
   
</form>
@endsection
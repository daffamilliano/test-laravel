@extends('jenisbarang.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show Jenis Barang</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('jenisbarang.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Jenis:</strong>
                {{ $jenisbarang->jenis_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                {{ $jenisbarang->deskripsi }}
            </div>
        </div>
    </div>
@endsection
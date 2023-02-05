@extends('jenisbarang.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>CRUD Jenis Barang</h2>
            </div>
                <a href="{{route('jenisbarang.create')}}" class="btn btn-success float-end"> Tambah Jenis Barang</a>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Jenis Barang</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($jenisbarang as $jenis)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $jenis->jenis_barang }}</td>
            <td>{{ $jenis->deskripsi }}</td>
            <td>
                <form action="{{ route('jenisbarang.destroy',$jenis->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('jenisbarang.show',$jenis->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('jenisbarang.edit',$jenis->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>CRUD Nama Barang</h2>
            </div>
                <a href="{{route('namabarang.create')}}" class="btn btn-success float-end"> Tambah Nama Barang</a>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($namabarang as $nama)
        <tr>
            <td>{{ $nama->id }}</td>
            <td>{{ $nama->nama_barang }}</td>
            <td>{{ $nama->jenisbarang->jenis_barang }}</td>
            <td>
                <form method="POST">
   
                    <a href="{{ route('namabarang.destroy',$nama->id) }}" class="btn btn-info">Show</a>
    
                    <a href="{{ route('namabarang.edit',$nama->id) }}" class="btn btn-primary modalMd">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="row text-center">
        {!! $jenisbarang->links() !!}
    </div>
@endsection
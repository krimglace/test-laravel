@extends('Master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Produk</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('produk.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   <br>
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
    
    
    <form action="{{ route('produk.update',$produk->id_produk) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Produk:</strong>
                    <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Harga Produk:</strong>
                    <input type="number" name="harga_produk" value="{{ $produk['harga_produk']}}" class="form-control" >
                </div>
                <div class="form-group">
                    <strong>Jumlah Produk:</strong>
                    <input type="number" name="jumlah_produk" value="{{ $produk['jumlah_produk']}}" class="form-control" >
                </div>
                <div class="form-group">
                    <strong>Kategori :</strong>
                    <select name="id_kategori" class="form-control">
                      
                      @foreach($data_kategori as $kat)
                      <option value="{{ $kat['id_kategori']}}" {{  ($produk['id_kategori'] === $kat['id_kategori'])?'selected' : '' }}>{{ $kat['nama_kategori']}}</option>
                      @endforeach
                      
                    </select>
                </div>
                <div class="form-group">
                    <strong>Variasi :</strong>
                    <select name="id_variasi" class="form-control">
                      
                      @foreach($data_variasi as $var)
                      <option value="{{ $var['id_variasi']}}" {{  ($produk['id_variasi'] === $var['id_variasi'])?'selected' : '' }}>{{ $var['nama_variasi']}}</option>
                      @endforeach
                      
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
@extends('Master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Data Produk</h2>
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
    
           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Produk:</strong>
                    <input disabled type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Harga Produk:</strong>
                    <input disabled="" type="number" name="harga_produk" value="{{ $produk['harga_produk']}}" class="form-control" >
                </div>
                <div class="form-group">
                    <strong>Jumlah Produk:</strong>
                    <input disabled="" type="number" name="jumlah_produk" value="{{ $produk['jumlah_produk']}}" class="form-control" >
                </div>
                <div class="form-group">
                    <strong>Kategori :</strong>
                    <select disabled="" name="id_kategori" class="form-control">
                      
                      @foreach($data_kategori as $kat)
                      <option value="{{ $kat['id_kategori']}}" {{  ($produk['id_kategori'] === $kat['id_kategori'])?'selected' : '' }}>{{ $kat['nama_kategori']}}</option>
                      @endforeach
                      
                    </select>
                </div>
                <div class="form-group">
                    <strong>Variasi :</strong>
                    <select disabled="" name="id_variasi" class="form-control">
                      
                      @foreach($data_variasi as $var)
                      <option value="{{ $var['id_variasi']}}" {{  ($produk['id_variasi'] === $var['id_variasi'])?'selected' : '' }}>{{ $var['nama_variasi']}}</option>
                      @endforeach
                      
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <h3><strong>Foto Produk</strong></h3>
              <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Tambah Foto</button>
            </div>
            @foreach($data_gambar as $gbr)
              @if($gbr['id_produk'] == $produk['id_produk'])
                <img width="18rem" src="{{ url('assets/images/'.$gbr['link_gambar_produk'])}}"/>
                <br>
                
              @endif
            @endforeach
        </div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Gambar Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('gambar.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
        <label for="link_gambar_produk">Gambar/Foto</label>
        <input type="hidden"name="id_produk" value="{{ $produk['id_produk']}}" class="form-control"></input>
        <input type="file"name="link_gambar_produk"class="form-control"></input>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
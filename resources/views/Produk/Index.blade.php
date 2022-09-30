<?php ?>
@extends('master')
@section('content')

<div class="container">
  <h2>Data Produk</h2>
  
  <div class="row">
    <div class="col-sm">
      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Produk</a>
    </div>
    <br><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Harga</th>
          <th colspan="3" class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        
        @php $i = 1; @endphp
        @foreach($data_produk as $prd)

        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $prd['nama_produk'] }}</td>
          <td>{{ $prd['harga_produk'] }}</td>
          <td class="text-center"><a href="{{ route('produk.show',$prd->id_produk) }}" class="btn btn-primary">Lihat</a></td>
          <td class="text-center"><a href="{{ route('produk.edit',$prd->id_produk) }}" class="btn btn-warning">Edit</a></td>
          <td class="text-center">
            <form action="{{ route('produk.destroy',$prd->id_produk) }}" method="post">
              {{ csrf_field() }}
              @method('DELETE')
              <button type="submit" class="btn btn-danger">
                Delete
              </button>
            </form>
          </td>
        </tr>

        @endforeach
        
      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('produk.store') }}" method="post">
        @csrf
        <div class="modal-body">
        <label for="nama_produk">Nama Produk</label>
        <input type="text"name="nama_produk"class="form-control"></input>
        <br>
        
        <label for="harga_produk">Harga Produk</label>
        <input type="number"name="harga_produk"class="form-control"></input>
        <br>
        
        <label for="jumlah_produk">Jumlah Produk</label>
        <input type="number"name="jumlah_produk"class="form-control"></input>
        <br>
        
        <label for="id_variasi">Variasi</label>
        <select name="id_variasi" class="form-control">
          @foreach($data_variasi as $var)
          
          <option value="{{ $var['id_variasi']}}">
            {{ $var['nama_variasi'] }}
          </option>
          
          @endforeach
        </select>
        <br>
        
        <label for="id_kategori">Kategori</label>
        <select name="id_kategori" class="form-control">
        @foreach($data_kategori as $kat)
          
          <option value="{{ $kat['id_kategori']}}">
            {{ $kat['nama_kategori'] }}
          </option>
          
          @endforeach
        </select>
        <br>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
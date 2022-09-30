
@extends('master')
@section('content')

<div class="container">
  <h2>Data Variasi Produk</h2>
  
  <div class="row">
    <div class="col-sm">
      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Variasi</a>
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
          <th>ID</th>
          <th>Nama</th>
          <th colspan="2" class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        
        @php $i = 1; @endphp
        @foreach($data_variasi as $ktg)

        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $ktg['id_variasi'] }}</td>
          <td>{{ $ktg['nama_variasi'] }}</td>
          <td class="text-center"><a href="{{ route('variasi.edit',$ktg->id_variasi) }}" class="btn btn-warning">Edit</a></td>
          <td class="text-center">
            <form action="{{ route('variasi.destroy',$ktg->id_variasi) }}" method="post">
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Variasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('variasi.store') }}" method="post">
        @csrf
        <div class="modal-body">
        <label for="nama_variasi">Nama variasi</label>
        <input type="text"name="nama_variasi"class="form-control"></input>
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
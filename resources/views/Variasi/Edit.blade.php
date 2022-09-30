@extends('Master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Variasi</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('variasi.index') }}"> Kembali</a>
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
    
    
    <form action="{{ route('variasi.update',$variasi->id_variasi) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama variasi:</strong>
                    <input type="text" name="nama_variasi" value="{{ $variasi->nama_variasi }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
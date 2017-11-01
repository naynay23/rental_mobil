@extends('template')

@section('content')
<center><h3>Tambah Pelanggan</h3></center>

<form class="form-horizontal" method="post" action="{{URL::to('/pelanggan/update/'.$data->id_pelanggan)}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama Pelanggan</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nama_pelanggan" value ="{{$data->nama_pelanggan}}">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">No. Telp</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="no_telp" value="{{$data->no_telp}}">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Kirim</button>
    </div>
  </div>
</form>
@endsection
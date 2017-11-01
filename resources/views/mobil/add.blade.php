@extends('template')

@section('content')
<center><h3>Tambah Mobil</h3></center>

<form class="form-horizontal" method="post" action="{{URL::to('/mobil/add')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
  <div class="form-group">
    <label class="col-sm-2 control-label">Plat Nomor</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="plat_nomor" placeholder="Plat Nomor">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Jenis Mobil</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="jenis_mobil" placeholder="Jenis Mobil">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Merk</label>
    <div class="col-sm-3">
     <select class="form-control" name="merk">
       <option>---------</option>
       @foreach($merk as $dmerk)
          <option value="{{$dmerk->id_merk}}">{{$dmerk->nama_merk}}</option>
       @endforeach
     </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Warna Mobil</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="warna" placeholder="Warna Mobil">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Kirim</button>
    </div>
  </div>
</form>
@endsection
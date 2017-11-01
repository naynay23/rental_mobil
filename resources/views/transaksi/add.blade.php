@extends('template')

@section('content')
<center><h3>Tambah Transaksi</h3></center>

<form class="form-horizontal" action="{{URL::to('/transaksi/add')}}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama Karyawan</label>
    <div class="col-sm-5">
     <select class="form-control" name="karyawan">
       <option>---------</option>
       @foreach($karyawan as $data)
          <option value="{{$data->id_karyawan}}">{{$data->nama_karyawan}}</option>
       @endforeach
     </select>
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Nama Pelanggan</label>
    <div class="col-sm-5">
     <select class="form-control" name="pelanggan">
       <option>---------</option>
       @foreach($pelanggan as $data)
          <option value="{{$data->id_pelanggan}}">{{$data->nama_pelanggan}}</option>
       @endforeach
     </select>
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Jenis Mobil</label>
    <div class="col-sm-5">
     <select class="form-control" name="mobil">
       <option>---------</option>
       @foreach($mobil as $mobils)
          <option value="{{$mobils->id_mobil}}">{{$mobils->jenis_mobil}}</option>
       @endforeach
     </select>
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Tanggal Pinjam</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="tgl_pinjam" placeholder="0000-00-00">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Tanggal Kembali</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="tgl_kembali" placeholder="0000-00-00">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Tarif Sewa</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="tarif" placeholder="00000">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Kirim</button>
    </div>
  </div>
</form>
@endsection
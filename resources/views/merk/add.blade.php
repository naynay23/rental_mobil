@extends('template')

@section('content')
<center><h3>Tambah Merk</h3></center>

<form class="form-horizontal" action="{{URL::to('/merk/add')}}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama Merk</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nama_merk" id="iinputnamaMerk" placeholder="Merk">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Kirim</button>
    </div>
  </div>
</form>


@endsection


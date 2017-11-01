@extends('template')

@section('content')
@if(Session::has('message.success'))
<div class="alert alert-success" role="alert" id="success-alert">
  <strong>{{ Session::get('message.pesan') }}</strong> 
</div>
@endif
 <p><a class="btn btn-primary" href="{{URL::to('/mobil/add')}}" role="button">Tambah Mobil</a></p>

<table class="table table-bordered">
 	<tr>
 		<th>Plat Nomer</th>
 		<th>Jenis Mobil</th>
 		<th>Merk</th>
 		<th>Warna</th>
 		<th>Aksi</th>
 	</tr>
 	@foreach($mobil as $dmobil)
 	<tr>
 		<td>{{$dmobil->plat_nomor}}</td>
 		<td>{{$dmobil->jenis_mobil}}</td>
 		<td>{{$dmobil->merk->nama_merk}}</td>
 		<td>{{$dmobil->warna}}</td>
 		<td><a href="{{URL::to('/mobil/update/'.$dmobil->id_mobil)}}"><button>Ubah</button></a>
 		<a href="{{URL::to('/mobil/delete/'.$dmobil->id_mobil)}}"><button>Hapus</button></a></td>
 	</tr>
 	@endforeach
</table>
<center>
	<div class="col-md-6">
		{!! $mobil->render() !!}
	</div>
</center>
@endsection
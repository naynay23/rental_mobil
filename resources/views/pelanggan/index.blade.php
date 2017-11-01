@extends('template')

@section('content')
@if(Session::has('message.success'))
<div class="alert alert-success" role="alert" id="success-alert">
  <strong>{{ Session::get('message.pesan') }}</strong> 
</div>
@endif
 <p><a class="btn btn-primary" href="{{URL::to('/pelanggan/add')}}" role="button">Tambah Pelanggan</a></p>

<table class="table table-bordered">
 	<tr>
 		<th>Nama Pelanggan</th>
 		<th>Alamat</th>
 		<th>No. Telp</th>
 		<th>Aksi</th>
 	</tr>
 	@foreach($data as $pelanggan)
 	<tr>
 		<td>{{$pelanggan->nama_pelanggan}}</td>
 		<td>{{$pelanggan->alamat}}</td>
 		<td>{{$pelanggan->no_telp}}</td>
 		<td><a href="{{URL::to('/pelanggan/update/'.$pelanggan->id_pelanggan)}}"><button>Ubah</button></a>
 		<a href="{{URL::to('/pelanggan/delete/'.$pelanggan->id_pelanggan)}}"><button>Hapus</button></a></td>
 	</tr>
 	@endforeach
</table>
@endsection
@extends('template')

@section('content')
@if(Session::has('message.success'))
<div class="alert alert-success" role="alert" id="success-alert">
  <strong>{{ Session::get('message.pesan') }}</strong> 
</div>
@endif
 <p><a class="btn btn-primary" href="{{URL::to('/karyawan/add')}}" role="button">Tambah Karyawan</a></p>

<table class="table table-bordered">
 	<tr>
 		<th>Nama Karyawan</th>
 		<th>Alamat</th>
 		<th>No. Telp</th>
 		<th>Aksi</th>
 	</tr>
 	@foreach($data as $karyawan)
 	<tr>
 		<td>{{$karyawan->nama_karyawan}}</td>
 		<td>{{$karyawan->alamat}}</td>
 		<td>{{$karyawan->no_telp}}</td>
 		<td><a href="{{URL::to('/karyawan/update/'.$karyawan->id_karyawan)}}"><button>Ubah</button></a>
 		<a href="{{URL::to('/karyawan/delete/'.$karyawan->id_karyawan)}}"><button>Hapus</button></a></td>
 	</tr>
 	@endforeach
</table>
@endsection
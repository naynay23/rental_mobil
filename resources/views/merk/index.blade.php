@extends('template')

@section('content')
@if(Session::has('message.success'))
<div class="alert alert-success" role="alert" id="success-alert">
  <strong>{{ Session::get('message.pesan') }}</strong> 
</div>
@endif
<p><a class="btn btn-primary" href="{{URL::to('/merk/add')}}" role="button">Tambah Merk</a></p>
 
<table class="table table-bordered">
 	<tr>
 		<th>Nama Merk</th>
 		<th>Aksi</th>
 	</tr>
 	@foreach($merk as $dmerk)
 	<tr>
 		<td>{{$dmerk->nama_merk}}</td>
 		<td><a href="{{URL::to('/merk/update/'.$dmerk->id_merk)}}"><button>Ubah</button></a>
 		<a href="{{URL::to('/merk/delete/'.$dmerk->id_merk)}}"><button>Hapus</button></a></td>
 	</tr>
 	@endforeach
</table>
@endsection
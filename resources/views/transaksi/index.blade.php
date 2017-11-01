@extends('template')

@section('content')
@if(Session::has('message.success'))
<div class="alert alert-success" role="alert" id="success-alert">
  <strong>{{ Session::get('message.pesan') }}</strong> 
</div>
@endif
 <p><a class="btn btn-primary" href="{{URL::to('/transaksi/add')}}" role="button">Tambah Transaksi</a></p>

<table class="table table-bordered">
 	<tr>
 		<th>Nama Karyawan</th>
 		<th>Nama Pelanggan</th>
 		<th>Mobil</th>
 		<th>Tanggal Pinjam</th>
 		<th>Tanggal Sewa</th>
 		<th>Tarif Sewa</th>
 		<th>Aksi</th>
 	</tr>
 	@foreach($transaksi as $data)
 	<tr>
 		<td>{{$data->karyawan->nama_karyawan}}</td>
 		<td>{{$data->pelanggan->nama_pelanggan}}</td>
 		<td>{{$data->mobil->jenis_mobil}}</td>
 		<td>{{$data->tanggal_pinjam}}</td>
 		<td>{{$data->tanggal_kembali}}</td>
 		<td>Rp. {{$data->tarif_sewa}}</td>
 		<td><a href="{{URL::to('/transaksi/update/'.$data->id_transaksi)}}"><button>Ubah</button></a>
 		<a href="{{URL::to('/transaksi/delete/'.$data->id_transaksi)}}"><button>Hapus</button></a></td>
 	</tr>
 	@endforeach
</table>
@endsection
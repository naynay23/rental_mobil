<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use App\Transaksi;
use App\Karyawan;
use App\Pelanggan;
use App\Mobil;

class TransaksiController extends Controller
{
    //
    function index(){
    	$transaksi = Transaksi::all();
    	return view('transaksi.index', ['transaksi'=>$transaksi]);
    }

    function insert(){
    	$transaksi = new Transaksi;
    	$transaksi->id_karyawan = Input::get('karyawan');
    	$transaksi->id_pelanggan = Input::get('pelanggan');
    	$transaksi->id_mobil = Input::get('mobil');
    	$transaksi->tanggal_pinjam = Input::get('tgl_pinjam');
    	$transaksi->tanggal_kembali = Input::get('tgl_kembali');
    	$transaksi->tarif_sewa = Input::get('tarif');
    	$transaksi->save();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil ditambah']);
    	return redirect('/transaksi');
    }

    function delete($id){
    	$transaksi = Transaksi::find($id);
    	$transaksi->delete();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil dihapus']);
    	return redirect('/transaksi');
    }

    function update($id){
    	$transaksi = Transaksi::find($id);
    	$transaksi->id_karyawan = Input::get('karyawan');
    	$transaksi->id_pelanggan = Input::get('pelanggan');
    	$transaksi->id_mobil = Input::get('mobil');
    	$transaksi->tanggal_pinjam = Input::get('tgl_pinjam');
    	$transaksi->tanggal_kembali = Input::get('tgl_kembali');
    	$transaksi->tarif_sewa = Input::get('tarif');
    	$transaksi->save();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil diubah']);
    	return redirect('/transaksi');
    }

    function viewInsert(){
    	$karyawan = Karyawan::all();
    	$pelanggan = Pelanggan::all();
    	$mobil = Mobil::all();

    	return view('transaksi.add', compact('karyawan','pelanggan','mobil'));
    }

    function viewUpdate($id){
    	$transaksi = Transaksi::find($id);
    	$karyawan = Karyawan::all();
    	$pelanggan = Pelanggan::all();
    	$mobil = Mobil::all();
    	return view('transaksi.update', compact('transaksi', 'karyawan', 'pelanggan', 'mobil'));
    }
}

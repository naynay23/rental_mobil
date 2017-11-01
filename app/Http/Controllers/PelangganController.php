<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use App\Pelanggan;

class PelangganController extends Controller
{
    //
    function index(){
    	$data = DB::table('tbl_pelanggan')->paginate(5);
    	return view('pelanggan.index', ['data'=>$data]);
    }

    function insert(){
    	$data = new Pelanggan;
    	$data->nama_pelanggan = Input::get('nama_pelanggan');
    	$data->alamat = Input::get('alamat');
    	$data->no_telp = Input::get('no_telp');
    	$data->save();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil ditambah']);
    	return redirect('/pelanggan');
    }

    function delete($id){
    	$data = Pelanggan::find($id);
    	$data->delete();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil dihapus']);
    	return redirect('/pelanggan');
    }

    function update($id){
    	$data = Pelanggan::find($id);
    	$data->nama_pelanggan = Input::get('nama_pelanggan');
    	$data->alamat = Input::get('alamat');
    	$data->no_telp = Input::get('no_telp');
    	$data->save();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil diubah']);
    	return redirect('/pelanggan');
    }

    function viewInsert(){
    	return view('pelanggan.add');
    }

    function viewUpdate($id){
    	$data = Pelanggan::find($id);
    	return view('pelanggan.update', ['data'=>$data]);
    }
}

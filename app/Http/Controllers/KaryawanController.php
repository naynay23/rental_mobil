<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use App\Karyawan;

class KaryawanController extends Controller
{
	function index(){
		$data = Karyawan::all();
		return view('karyawan.index', ['data'=>$data]);
	}

	function insert(){
		$data = new Karyawan;
		$data->nama_karyawan = Input::get('nama_karyawan');
		$data->alamat = Input::get('alamat');
		$data->no_telp = Input::get('no_telp');
		$data->save();

		Session::flash('message', ['success' => true,'pesan' => 'Data berhasil ditambah']);
    	return redirect('/karyawan');
    }

    function delete($id){
    	$data = Karyawan::find($id);
    	$data->delete();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil dihapus']);
    	return redirect('/karyawan');
    }

    function update($id){
    	$data = Karyawan::find($id);
		$data->nama_karyawan = Input::get('nama_karyawan');
		$data->alamat = Input::get('alamat');
		$data->no_telp = Input::get('no_telp');
		$data->save();

		Session::flash('message', ['success' => true,'pesan' => 'Data berhasil diubah']);
    	return redirect('/karyawan');
    }

    function viewInsert(){
    	return view('karyawan.add');
    }

    function viewUpdate($id){
    	$data = Karyawan::find($id);
    	return view('karyawan.update', ['data'=>$data]);
    }
}

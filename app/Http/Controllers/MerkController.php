<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use App\Merk;

class MerkController extends Controller
{
    function index(){
    	$merk = DB::table('tbl_merk')->paginate(5);
    	return view('merk.index', ['merk' => $merk]);
    }

    function insert(){
    	$merk = new Merk;
    	$merk->nama_merk = Input::get('nama_merk');
    	$merk->save();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil ditambah']);
    	return redirect('/merk');
    }

    function delete($id){
    	$merk = Merk::find($id);
    	$merk->delete();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil dihapus']);
    	return redirect('/merk');
    }

    function update($id){
    	$merk = Merk::find($id);
    	$merk->nama_merk = Input::get('nama_merk');
    	$merk->save();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil diubah']);
    	return redirect('/merk');
    }

    function viewInsert(){
    	return view('merk.add');
    }

    function viewUpdate($id){
    	$merk = Merk::find($id);
    	return view('merk.update', ['merk'=>$merk]);
    }
}

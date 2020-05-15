<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;

class BarangController extends Controller
{
    public function create(){
		$halaman = 'barang';
    	return view('barang.create', compact('halaman'));
    }

    public function index(){
    	$halaman = 'barang';
		$barang_list = Barang::orderBy('kodebarang', 'asc')->paginate('5');
        $jumlah_barang = Barang::count();
		return view ('barang.index', compact('halaman','barang_list','jumlah_barang'));
    }
    public function show($id){
    	$halaman = 'barang';
    	$barang = Barang::findOrFail($id);
    	return view ('barang.show', compact('halaman', 'barang'));
	}

	public function edit($id){
		$barang = Barang::findOrFail($id);
		return view('barang.edit',compact('barang'));
	}

	public function update($id, Request $request){
        $barang = Barang::findOrFail($id);
        $barang -> update($request->all());
        return redirect('barang');
	}
	
	public function destroy($id){
		$barang = barang::findOrFail($id);
		$barang -> delete();
		return redirect('barang');
	}

	public function store (Request $request){
		$input = $request->all();
		barang::create($input);
		return redirect('barang');
	}

	// public function proses_upload(Request $request){
	// 	$this->validate($request, [
	// 		'file' => 'required',
	// 		'keterangan' => 'required',
	// 	]);
	
	// 	// menyimpan data file yang diupload ke variabel $file
	// 	$file = $request->file('file');
	
	// 		  // nama file
	// 	echo 'File Name: '.$file->getClientOriginalName();
	// 	echo '<br>';
	
	// 		  // ekstensi file
	// 	echo 'File Extension: '.$file->getClientOriginalExtension();
	// 	echo '<br>';
	
	// 		  // real path
	// 	echo 'File Real Path: '.$file->getRealPath();
	// 	echo '<br>';
	
	// 		  // ukuran file
	// 	echo 'File Size: '.$file->getSize();
	// 	echo '<br>';
	
	// 		  // tipe mime
	// 	echo 'File Mime Type: '.$file->getMimeType();
	
	// 		  // isi dengan nama folder tempat kemana file diupload
	// 	$tujuan_upload = 'data_file';
	// 	$file->move($tujuan_upload,$file->getClientOriginalName());
	// }
}
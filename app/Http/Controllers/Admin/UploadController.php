<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
	public function upload(){
		return view('upload');
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'image' => 'required',
			'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('image');

      	        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';

      	        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';

      	        // real path
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';

      	        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';

      	        // tipe mime
		echo 'File Mime Type: '.$file->getMimeType();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'images';

                // upload file
		$file->move($tujuan_upload,$file->getClientOriginalName());
	}
}
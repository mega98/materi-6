<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{


	function showdashboard(){
		return view('dashboard');
	}

	function showproduk(){
		return view('produk');
	}

	function showkategori(){
		return view('kategori');
	}

	function showlogin(){
		return view('login');
	}
}
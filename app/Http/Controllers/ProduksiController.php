<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function pencatatanhasil()
    {
    	return view('produksi/pencatatanhasil/pencatatanhasil');
    }
    public function proses_pencatatanhasil()
    {
        return view('produksi/pencatatanhasil/proses_pencatatanhasil');
    }
    public function perencanaanproduksi()
    {
    	return view('produksi/perencanaanproduksi/perencanaanproduksi');
    }
    public function produksirencana()
    {
    	return view('produksi/produksirencana/produksirencana');
    }
    public function tambah_produksirencana()
    {
        return view('produksi/produksirencana/tambah_produksirencana');
    }    
    public function produksitanparencana()
    {
    	return view('produksi/produksitanparencana/produksitanparencana');
    }
    public function tambah_produksitanparencana()
    {
        return view('produksi/produksitanparencana/tambah_produksitanparencana');
    }    
    public function upahboronganproduksi()
    {
    	return view('produksi/upahboronganproduksi/upahboronganproduksi');
    }
    public function proses_upahboronganproduksi()
    {
        return view('produksi/upahboronganproduksi/proses_upahboronganproduksi');
    }
    public function spk()
    {
        return view('produksi.spk.spk');
    }
}

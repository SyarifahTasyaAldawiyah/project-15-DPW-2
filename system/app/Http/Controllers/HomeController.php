<?php 

namespace App\Http\Controllers;

use App\Models\Provinsi;

class HomeController extends Controller {

    function Showberanda(){
        return view('admin.beranda');
      }

  public function showAlamat()
  {
    $data['list_provinsi'] = Provinsi::all();
    return view('admin.alamat', $data);
  }
}
<?php

namespace App\Controllers;

use App\Models\PasienModel;

class Pasien extends BaseController
{
    public function index(){
        $pasien_model = new PasienModel();
        $all_data_pasien = $pasien_model ->findAll();
        return view('tamu', ['all_data_tamu' => $all_data_pasien]);
    }    
        
    public function add_data_Pasien(){
        return view('add_data_Pasien');

    }

    public function proses_add_Pasien(){
        $pasien_model = new PasienModel();
        $pasien_model -> insert($this->request->getPost());
        return redirect()->to(base_url('tamu'));
    }

    public function edit_data_Pasien($id = false){
        $pasien_model = new PasienModel();
        $data_pasien = $pasien_model-> find($id);
        return view ('edit_data_Pasien', ['data_pasien' => $data_pasien]);
    }

    public function proses_edit_Pasien(){
        $pasien_model = new PasienModel();
        $pasien_model->update($this->request->getPost('id_pasien') , $this->request->getPost());
        return redirect()->to(base_url('tamu'));
    }

    public function delete_data_Pasien($id = false){
        $pasien_model = new PasienModel();
        $pasien_model->delete($id);
        return redirect()->to(base_url('tamu'));
        }
    

}
<?php


namespace App\Controllers;
use App\Models\BarangModel;

class BarangController extends BaseController
{   
    protected $barangModel;
    public function __construct() {
        $this->barangModel = new BarangModel();
    }
    public function store()
    {  
        $data = $this->request->getPost();
        $this->barangModel->save($data);
        return redirect()->back();

    }
    public function delete($id){
        $this->barangModel->delete($id);
        return redirect()->back();
    }
    
}

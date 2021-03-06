<?php


class Buku extends Controller{

    public function index(){
        $data["judul"] = "Halaman Buku";
        $data["buku"] = $this->model('Buku_model')->getBuku();
        $this->view('templates/header',$data);
        $this->view('buku/index',$data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data["judul"] = "Detail Buku";
        $data["buku"] = $this->model('Buku_model')->getBukuById($id);
        $this->view('templates/header',$data);
        $this->view('buku/detail',$data);
        $this->view('templates/footer');

    }


}

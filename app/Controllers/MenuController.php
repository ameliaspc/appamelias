<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MenuModel;

class MenuController extends Controller {
    /**
    * Instance of the main Request object
    * 
    * @var HTTP\incoming Request
    */
    protected $request;

    function __construct()
    {
        $this->menu = new MenuModel();
    }
    public function tampil()
    {
        # code...
        $data['data']=$this->menu->findAll();
        return view('MenuList',$data);
    }
    public function simpan()
    {
        $data= array(
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jenis'=>$this->request->getPost('jenis'),
            'stok'=>$this->request->getPost('stok'),
            //'gambar'=>$this->request->getPost('gambar'),

        );
        $this->menu->insert($data);
        return redirect('menu')->with('succes','Data berhasil disimpan');
    }
    public function delete($id)
    {
        # code...
        $this->menu->delete($id);
        return redirect('menu')->with('success','Data berhasil dihapus');
    }
    public function edit($id)
    {
        # code...
        $data = array(
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jenis'=>$this->request->getPost('jenis'),
            'stok'=>$this->request->getPost('stok'),
            //'gambar'=>$this->request->getPost('gambar'),
        );
        $this->menu->update($id, $data);
        return redirect('menu')->with('success','Data berhasil diedit');
    }
}

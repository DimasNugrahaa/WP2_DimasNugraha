<?php
class Toko_sepatu extends CI_Controller
{

    public function index()

    {
        $this->load->view('form_toko_sepatu');
    }
    public function pesan()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli', 
        'required|min_length[3]', [
        'required' => 'Nama Pembeli Harus diisi',
        'min_lenght' => 'Nama terlalu pendek'
    ]);
    $this->form_validation->set_rules('telepon', 'No. Telepon', 
        'required|min_length[11]', [
        'required' => 'No. Telepon Harus diisi',
        'numeric' => 'No. Telepon berupa angka'
    ]);
    $this->form_validation->set_rules('merk', 'Merk Sepatu', 
        'required|min_length[3]', [
        'required' => 'Merk Sepatu harus dipilih'
    ]);
    $this->form_validation->set_rules('ukuran', 'Ukuran Sepatu', 
        'required|min_length[2]', [
        'required' => 'Ukuran Sepatu harus dipilih'
    ]);
    if ($this->form_validation->run() != true) {
        $this->load->view('form_toko_sepatu');
    } else {
        $data = [
            'nama' => $this->input->post('nama'),
            'telepon' => $this->input->post('telepon'),
            'merk' => $this->input->post('merk'),
            'ukuran' => $this->input->post('ukuran')
        ];
        $this->load->view('data_toko_sepatu', $data);
    }
}
}
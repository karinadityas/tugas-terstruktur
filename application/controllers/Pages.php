<?php

class Pages extends CI_Controller
{
    public function form1()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/form1');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $this->load->model('data_model');
        $this->load->helper('url');

        $data = [
            'nama' => $this->input->post('nama'),
            'npm' => $this->input->post('npm'),
            'umur' => $this->input->post('umur')
        ];

        $issuccess = $this->data_model->save($data);

        if($issuccess){
            redirect(site_url('form2'));
        }
    }

    public function form2()
    {
        $this->load->model('data_model');

        $data['data'] = $this->data_model->data();
        $this->load->view('templates/header');
        $this->load->view('pages/form2', $data);
        $this->load->view('templates/footer');
    }
}
?>
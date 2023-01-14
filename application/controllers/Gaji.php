<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('pfnmodel');
        }
    public function Index()
    {
        $data['datanya'] = $this->pfnmodel->tampil_data('gaji')->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Gaji',$data);
        $this->load->view('template/footer');
    } 

    public function Create_Data_Gaji(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Create_Gaji');
        $this->load->view('template/footer');
    }
 
    public function tambah_aksi(){
        $data1 = $this->input->post('data1');
        $data2 = $this->input->post('data2');
        $data3 = $this->input->post('data3');
        $data4 = $this->input->post('data4');
        $data5 = $this->input->post('data5');
        $data6 = $this->input->post('data6');
        $data = array(
            'Nama' => $data1,
            'Divisi' => $data2,
            'Jabatan'=> $data3,
            'Total_kehadiran' => $data4,
            'Gapok' => $data5,
            'Bonus' => $data6
            );
        $this->pfnmodel->input_data($data,'gaji');
  redirect('Gaji');

}

    public function hapus($id){
            $where = array('ID' => $id);
            $this->pfnmodel->hapus_data($where,'gaji');
            redirect('Gaji');
}

    public function Tampil_update($id){
        $where = array('ID' => $id);
        $data['user'] = $this->pfnmodel->edit_data($where,'gaji')->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Update_Gaji',$data);
        $this->load->view('template/footer');
        }


    public function update(){
        $data1 = $this->input->post('data1');
        $data2 = $this->input->post('data2');
        $data3 = $this->input->post('data3');
        $data4 = $this->input->post('data4');
        $data5 = $this->input->post('data5');
        $data7 = $this->input->post('data6');
        $data6 = $this->input->post('id');
        $data = array(
            'Nama' => $data1,
            'Divisi' => $data2,
            'Jabatan'=> $data3,
            'Total_kehadiran' => $data4,
            'Gapok' => $data5,
            'Bonus' => $data7
            );
         $where = array(
        'ID' => $data6
         );
 
        $this->pfnmodel->update_data($where,$data,'gaji');
        redirect('Gaji');
}
    // public function Tambahin()
    // {
    //     $this->load->view('template/header');
    //     $this->load->view('template/sidebar');
    //     $this->load->view('dashboard');
    //     $this->load->view('template/footer');
    // }   
}
/*End of file Dashboard.php*/
/*Location:./application/controllers/Dashboard.php*/
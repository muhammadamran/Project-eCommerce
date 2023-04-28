<?php defined("BASEPATH") OR exit("No direct script access allowed");

class pesanan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('m_pesanan');
    }

    public function index(){
        if($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'Superadmin')
		{
            $x['data'] = $this->m_pesanan->get_pesanan();

			$this->load->view("include/head");
            $this->load->view("include/top-header");
            $this->load->view('v_pesanan',$x);
            $this->load->view("include/sidebar");
            $this->load->view("include/panel");
            $this->load->view("include/footer");
		}else{
            
			redirect("w_home");
		}
    }

    public function dibatalkan(){
        $id = $this->input->post('id');
        
        $data = array(
			'status_transaksi' => '2'
        );

        $data2 = array(
            'id_user' => $this->input->post('id_user'),
            'id_transaksi' => $this->input->post('id_transaksi'),
            'kode_transaksi' => $this->input->post('kode_transaksi'),
            'status' => '2',
            'tanggal'=> date('Y-m-d H:i:s')
        );

        $this->m_pesanan->tambah_notif('tbl_notif', $data2);

        $result = $this->m_pesanan->dibatalkan('tbl_transaksi', $data, $id);

        if (!$result) { 							
            $this->session->set_flashdata('pesanan', 'Gagal update pesanan.'); 				
            redirect('pesanan'); 			
        } else { 								
            $this->session->set_flashdata('pesanan', 'Berhasil update pesanan..');			
            redirect('pesanan'); 			
        }
    }

    public function diproses(){
        $id_transaksi = $this->input->post('id_transaksi');
        $id = $this->input->post('id');

        $data = array(
			'status_transaksi' => '3',
        );

        $data2 = array(
            'id_user' => $this->input->post('id_user'),
            'id_transaksi' => $this->input->post('id_transaksi'),
            'kode_transaksi' => $this->input->post('kode_transaksi'),
            'status' => '3',
            'tanggal'=> date('Y-m-d H:i:s')
        );

        $this->m_pesanan->tambah_notif('tbl_notif', $data2);

        $this->m_pesanan->update_stok($id_transaksi);

        $result = $this->m_pesanan->diproses('tbl_transaksi', $data, $id);

        if (!$result) { 							
            $this->session->set_flashdata('pesanan', 'Gagal update pesanan.'); 				
            redirect('pesanan'); 			
        } else { 								
            $this->session->set_flashdata('pesanan', 'Berhasil update pesanan..');			
            redirect('pesanan'); 			
        }
    }

    public function dikirim(){

        $id = $this->input->post('id');

        $data = array(
			'status_transaksi' => '4',
        );

        $data2 = array(
            'id_user' => $this->input->post('id_user'),
            'id_transaksi' => $this->input->post('id_transaksi'),
            'kode_transaksi' => $this->input->post('kode_transaksi'),
            'status' => '4',
            'tanggal'=> date('Y-m-d H:i:s')
        );

        $this->m_pesanan->tambah_notif('tbl_notif', $data2);

        $result = $this->m_pesanan->dikirim('tbl_transaksi', $data, $id);

        if (!$result) { 							
            $this->session->set_flashdata('pesanan', 'Gagal update pesanan.'); 				
            redirect('pesanan'); 			
        } else { 								
            $this->session->set_flashdata('pesanan', 'Berhasil update pesanan..');			
            redirect('pesanan'); 			
        }
    }

    public function selesai(){

        $id = $this->input->post('id');

        $data = array(
			'status_transaksi' => '5',
        );

        $data2 = array(
            'id_user' => $this->input->post('id_user'),
            'id_transaksi' => $this->input->post('id_transaksi'),
            'kode_transaksi' => $this->input->post('kode_transaksi'),
            'status' => '5',
            'tanggal'=> date('Y-m-d H:i:s')
        );

        $this->m_pesanan->tambah_notif('tbl_notif', $data2);

        $result = $this->m_pesanan->selesai('tbl_transaksi', $data, $id);

        if (!$result) { 							
            $this->session->set_flashdata('pesanan', 'Gagal update pesanan.'); 				
            redirect('pesanan'); 			
        } else { 								
            $this->session->set_flashdata('pesanan', 'Berhasil update pesanan..');			
            redirect('pesanan'); 			
        }
    }

    
    public function pdf($id){

        $data= $this->m_pesanan->get_pdf($id);

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetPrintHeader(false);
        $pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetFont('stsongstdlight','B', 12);

        // add a page
        $pdf->AddPage();
        $pdf->SetLineStyle( array( 'width' => 2, 'color' => array(0,0,0)));
        $pdf->Line(0,0,$pdf->getPageWidth(),0); 
        $pdf->Line($pdf->getPageWidth(),0,$pdf->getPageWidth(),$pdf->getPageHeight());
        $pdf->Line(0,$pdf->getPageHeight(),$pdf->getPageWidth(),$pdf->getPageHeight());
        $pdf->Line(0,0,0,$pdf->getPageHeight());

        $tabel = '
        <style>
        table, th, td {
            border: 1px solid black;
        }

        .dt{
            text-align: center;
            font-weight:bold;
        }
        </style>
        
        <img src="assets/img/logo/seragampos.png" width="400px">
        <hr>

        <p class="dt"><b>INVOICE : </b> '.$data[0]->kode_transaksi.'</p>

        <h4>Penerima : '.$data[0]->nama_depan.' '.$data[0]->nama_belakang.'</h4>
        <p>'.$data[0]->alamat.'. '.$data[0]->telepon.'</p>
        
        <table>
            <tr>
                <th colspan="2" class="dt">Alamat</th>
            </tr>
            <tr>
                <th class="dt">Opsi 1</th>
                <th class="dt">Opsi 2</th>
            </tr>
            <tr>
                <td>'.$data[0]->alamat.'</td>
                <td>'.$data[0]->alamat_opsi.'</td>
            </tr>
        </table>
        ';
        
        // output the HTML content
        $pdf->writeHTML($tabel, true, false, true, false, '');
        $pdf->Output('$name' . '.pdf', 'I');
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('m_data');

	}

	public function index()
	{		
		// data pengaturan website
		$data['pengaturan'] = $this->m_data->get_data('pengaturan')->row();

		// SEO META
		$data['meta_keyword'] = $data['pengaturan']->nama;
		$data['meta_description'] = $data['pengaturan']->deskripsi;

		$this->load->view('front/v_header',$data);
		$this->load->view('front/v_index',$data);
		$this->load->view('front/v_footer',$data);
	}


	function kirimEmail(){
        $nama       = $this->input->post('userName'); // Menangkap inputan nama dari form
        $email      = $this->input->post('userEmail'); // Menangkap inputan email dari form
        $pesan      = $this->input->post('content'); // Menangkap inputan acara dari form

        $this->sendEmail($nama,$email,$pesan);  //Memanggil fungsi sendEmail dengan parameter nama,email,pesan
        redirect(''); // redirect ke fungsi index contrller Welcome
    }

    function sendEmail($nama,$email,$pesan){
        $this->load->library('PHPMailer_load'); //Load Library PHPMailer
        $mail = $this->phpmailer_load->load(); // Mendefinisikan Variabel Mail
        $mail->isSMTP();  // Mengirim menggunakan protokol SMTP
        $mail->Host = 'smtp.gmail.com'; // Host dari server SMTP
        $mail->SMTPAuth = true; // Autentikasi SMTP
        $mail->Username = 'syababmuslim27@gmail.com';
        $mail->Password = 'muhammad9627';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('noreply@syababmuslim.com', 'Contact Me'); // Sumber email
        $mail->addAddress($email,'Syabab Muslim'); // Masukkan alamat email dari variabel $email
        $mail->Subject = "Contact Me '$email'"; // Subjek Email
        $mail->msgHtml("
        	<h1>Assalamu'alaikum Warohmatullahi Wabarokatuh</h1>
            <h3>Pesan Email dari $nama</h3><hr>

            <p>$pesan</p>
            "); // Isi email dengan format HTML
 
 
        if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    //echo "Message sent!";
                } // Kirim email dengan cek kondisi
    }

    public function notfound()
    {
		// data pengaturan website
    	$data['pengaturan'] = $this->m_data->get_data('pengaturan')->row();

		// SEO META
    	$data['meta_keyword'] = $data['pengaturan']->nama;
    	$data['meta_description'] = $data['pengaturan']->deskripsi;

    	$this->load->view('front/v_header',$data);
        $this->load->view('front/v_index',$data);
        $this->load->view('front/v_footer',$data);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function blog()
	{
		$this->load->view('header');
		$data['getStreaming'] = $this->models->getStreaming();
		$this->load->view('blog', $data);
		$this->load->view('footer');
	}

	public function jobvacancy()
	{
		$this->load->view('header');
		$data['getJobVacancy'] = $this->models->getJobVacancy();
		$this->load->view('job_vacancy', $data);
		$this->load->view('footer');
	}

	public function portfolio()
	{
		$this->load->view('header');
		$data['getPortfolio'] = $this->models->getPortfolio();
		$data['getPortfolioWEB'] = $this->models->getPortfolioWEB();
		$data['getPortfolioApps'] = $this->models->getPortfolioApps();
		$data['getPortfolioDesign'] = $this->models->getPortfolioDesign();
		$data['getPortfolioIT'] = $this->models->getPortfolioIT();
		$this->load->view('portfolio', $data);
		$this->load->view('footer');
	}

	public function portfolio_detail($slug_portfolio)
	{
		$this->load->view('header');
		$data['getPortfolio'] = $this->models->getDataPortfoliodetail(" WHERE slug_portfolio = '$slug_portfolio'");
		$this->load->view('portfolio_detail', $data);
		$this->load->view('footer');
	}

	public function news()
	{
		$this->load->view('header');
		$data['getNews'] = $this->models->getDataNews();
		$data['getNewsGeneral'] = $this->models->getNewsGeneral();
		$data['getNewsGlobal'] = $this->models->getNewsGlobal();
		$this->load->view('news', $data);
		$this->load->view('footer');
	}

	public function news_detail($slug_news)
	{
		$this->load->view('header');
		$data['getNews'] = $this->models->getDataNewsdetail(" WHERE slug_news = '$slug_news'");
		$this->load->view('news_detail', $data);
		$this->load->view('footer');
	}

	public function website()
	{
		$this->load->view('header');
		$data['getService'] = $this->models->getServicewebsite();
		$this->load->view('service', $data);
		$this->load->view('footer');
	}

	public function mobile()
	{
		$this->load->view('header');
		$data['getService'] = $this->models->getServicemobile();
		$this->load->view('service', $data);
		$this->load->view('footer');
	}

	public function design()
	{
		$this->load->view('header');
		$data['getService'] = $this->models->getServicedesign();
		$this->load->view('service', $data);
		$this->load->view('footer');
	}

	public function photo()
	{
		$this->load->view('header');
		$data['getService'] = $this->models->getServicephoto();
		$this->load->view('service', $data);
		$this->load->view('footer');
	}

	public function seo()
	{
		$this->load->view('header');
		$data['getService'] = $this->models->getServiceseo();
		$this->load->view('service', $data);
		$this->load->view('footer');
	}

	public function consultant()
	{
		$this->load->view('header');
		$data['getService'] = $this->models->getServiceconsultant();
		$this->load->view('service', $data);
		$this->load->view('footer');
	}

	public function quote()
	{
		$this->load->view('header');
		$this->load->view('quote');
		$this->load->view('footer');
	}

	public function do_quote()
	{
		$this->load->helper('string');
        $id_unique      = random_string('numeric',11);
        $nama      		= $_POST['nama'];
        $email			= $_POST['email'];
        $notelp			= $_POST['notelp'];
        $pesan			= $_POST['pesan'];
        $data_insert = array(
        	'id_unique'		=> $id_unique,
            'nama' 			=> $nama,
            'email'    		=> $email,
            'notelp'		=> $notelp,
            'pesan'			=> $pesan
        );
        $res = $this->db->insert('db_quote', $data_insert);
        if ($res>=1) {
			

			$data = array(
				'nama'      => $nama,
				'email'     => $email,
				'notelp'    => $notelp,
				'pesan'     => $pesan
			);

			$config = Array(    
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://mail.perspektiv.id',
				// 'smtp_crypto' => 'ssl',
				// 'smtp_port' => $port,
				'smtp_port'	=> 465,
				'smtp_user' => 'support@perspektiv.id',
				'smtp_pass' => 'Bulakrantai46',
				'mailtype'  => 'html',
				'charset'   => 'utf-8'

			);

			// Load email library and passing configured values to email library
			$this->load->library('email', $config);

			// $this->load->library('email', $config);
			$this->email->initialize($config);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");


			$this->email->from($email, $nama);
			$this->email->to('support@perspektiv.id'); // replace it with receiver mail id
			$this->email->subject('Request Quote Perspektiv'); // replace it with relevant subject
			$body = $this->load->view('email/email_template_quote.php',$data,TRUE);
			$this->email->message($body); 

			$this->email->send();
				// echo "<script>
				// alert('Berhasil, Terima kasih telah menghubungi kami');
				// window.location.href='';
				// </script>";
				$this->session->set_flashdata('success', 'Informasi telah kami terima, Tim kami akan segera menghubungi Anda!');
				redirect('quote');
			}
	}

	public function mobilelegend()
	{
		$this->load->view('header');
		$data['getStreaming'] = $this->models->getStreaming();
		$data['getMemberFrontfirst'] = $this->models->getMemberMLFrontfirst();
		$data['getMemberFront'] = $this->models->getMemberMLFront();
		$data['getMemberFrontkontent'] = $this->models->getMemberMLFrontkontent();
		$this->load->view('team', $data);
		$this->load->view('footer');
	}

	public function pubgm()
	{
		$this->load->view('header');
		$data['getStreaming'] = $this->models->getStreaming();
		$data['getMemberFrontfirst'] = $this->models->getMemberPUBGMFrontfirst();
		$data['getMemberFront'] = $this->models->getMemberPUBGMFront();
		$data['getMemberFrontkontent'] = $this->models->getMemberPUBGMFrontkontent();
		$this->load->view('team', $data);
		$this->load->view('footer');
	}

	public function codm()
	{
		$this->load->view('header');
		$data['getStreaming'] = $this->models->getStreaming();
		$data['getMemberFrontfirst'] = $this->models->getMemberCODMFrontfirst();
		$data['getMemberFront'] = $this->models->getMemberCODMFront();
		$data['getMemberFrontkontent'] = $this->models->getMemberCODMFrontkontent();
		$this->load->view('team', $data);
		$this->load->view('footer');
	}

	public function staff()
	{
		$this->load->view('header');
		$data['getStreaming'] = $this->models->getStreaming();
		$data['getStaffFront'] = $this->models->getStaffFront();
		$this->load->view('staff', $data);
		$this->load->view('footer');
	}

	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function do_contact()
	{
		$this->load->helper('string');
        $id_unique      = random_string('numeric',11);
        $nama      		= $_POST['nama'];
        $email			= $_POST['email'];
        $notelp			= $_POST['notelp'];
        $isi			= $_POST['isi'];
        $data_insert = array(
        	'id_unique'		=> $id_unique,
            'nama' 			=> $nama,
            'email'    		=> $email,
            'notelp'		=> $notelp,
            'isi'			=> $isi
        );
        $res = $this->db->insert('contact', $data_insert);
        if ($res>=1) {
			
			// $data['ports'] = $this->models->getport();
			// $port = $data['ports'][0]->port;

			$data = array(
				'nama'      => $this->input->post('nama'),
				'email'     => $this->input->post('email'),
				'notelp'    => $this->input->post('notelp'),
				'isi'     	=> $this->input->post('isi')
			);

			// var_dump($data);
			// exit();

			$config = Array(    
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://mail.perspektiv.id',
				// 'smtp_crypto' => 'ssl',
				// 'smtp_port' => $port,
				'smtp_port'	=> 465,
				'smtp_user' => 'support@perspektiv.id',
				'smtp_pass' => 'Bulakrantai46',
				'mailtype'  => 'html',
				'charset'   => 'utf-8'

			);

			// Load email library and passing configured values to email library
			$this->load->library('email', $config);

			// $this->load->library('email', $config);
			$this->email->initialize($config);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");


			$this->email->from($email, $nama);
			$this->email->to('support@perspektiv.id'); // replace it with receiver mail id
			$this->email->subject('Contact Perspektiv'); // replace it with relevant subject
			$body = $this->load->view('email/email_template_contact.php',$data,TRUE);
			$this->email->message($body); 

			$this->email->send();
				// echo "<script>
				// alert('Berhasil, Terima kasih telah menghubungi kami');
				// window.location.href='';
				// </script>";
				$this->session->set_flashdata('success', 'Informasi telah kami terima, Tim kami akan segera menghubungi Anda!');
				redirect('contact');
			}
	}

	public function request_form()
	{
		$this->load->view('header');
		$this->load->view('request_form');
		$this->load->view('footer');
	}

	public function do_requestform()
    {

        $this->load->helper('string');
        $id_unique              = random_string('numeric',11);
        $nama        			= $_POST['nama'];
        $email            		= $_POST['email'];
        $mobile                 = $_POST['mobile'];
        $service             	= $_POST['service'];
        $pesan     				= $_POST['pesan'];
        $status					= 1;
        $data_insert = array(
            'id_unique'             => $id_unique,
            'nama'       			=> $nama,
            'email'           		=> $email,
            'mobile'                => $mobile,
            'service'            	=> $service,
            'pesan'    				=> $pesan,
            'status'				=> $status
        );
        $res = $this->db->insert('request_order', $data_insert);
        if ($res>=1) {
            $this->session->set_flashdata('success', 'Data Tersimpan!');
            redirect('request_form');
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Tersimpan!');
            redirect('request_form');
        }
    }

	public function order()
	{
		$this->load->view('header');
		$data['getTags'] = $this->models->getTags();
		$this->load->view('order', $data);
		$this->load->view('footer');
	}

	public function do_orders()
	{
		$this->load->helper('string');
        $id_unique      = random_string('numeric',11);
        $nama      		= $_POST['nama'];
        $email			= $_POST['email'];
        $notelp			= $_POST['notelp'];
        $tanggal		= $_POST['tanggal'];
        $jenis			= $_POST['jenis'];
        $qty			= $_POST['qty'];
        $pesan			= $_POST['pesan'];
        $data_insert = array(
        	'id_unique'		=> $id_unique,
            'nama' 			=> $nama,
            'email'    		=> $email,
            'notelp'		=> $notelp,
            'tanggal'		=> $tanggal,
            'jenis'			=> $jenis,
            'qty'			=> $qty,
            'pesan'			=> $pesan
        );
        $res = $this->db->insert('orders', $data_insert);
        if ($res>=1) {
			
			// $data['ports'] = $this->models->getport();
			// $port = $data['ports'][0]->port;

			$data = array(
				'nama'      => $this->input->post('nama'),
				'email'     => $this->input->post('email'),
				'notelp'    => $this->input->post('notelp'),
	            'tanggal'	=> $this->input->post('tanggal'),
	            'jenis'		=> $this->input->post('jenis'),
	            'qty'		=> $this->input->post('qty'),
				'pesan'     => $this->input->post('pesan')
			);

			// var_dump($data);
			// exit();

			 $config = Array(    
				'protocol'  => 'smtp',
				'smtp_host' => 'mail.lookit.id',
				// 'smtp_crypto' => 'ssl',
				// 'smtp_port' => $port,
				'smtp_port'	=> 25,
				'smtp_user' => 'info@lookit.id',
				'smtp_pass' => 'Bulakrantai46',
				'mailtype'  => 'html',
				'charset'   => 'utf-8'

			);

			// Load email library and passing configured values to email library
			$this->load->library('email', $config);

			// $this->load->library('email', $config);
			$this->email->initialize($config);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");


			$this->email->from($email, $nama);
			$this->email->to('info@lookit.id'); // replace it with receiver mail id
			$this->email->subject('Contact Lookit'); // replace it with relevant subject
			$body = $this->load->view('email/email_template_orders.php',$data,TRUE);
			$this->email->message($body); 

			$this->email->send();
				// echo "<script>
				// alert('Berhasil, Terima kasih telah menghubungi kami');
				// window.location.href='';
				// </script>";
				$this->session->set_flashdata('success', 'Informasi telah kami terima, Tim kami akan segera menghubungi Anda!');
				redirect('order');
			}
	}

	// Product
	public function product()
	{
		$this->load->view('header');
		$this->load->view('product');
		$this->load->view('footer');
	}
	// End Product

	// Contact
	public function do_contactinsert()
    {
        $nama        			= $this->input->post('nama');
        $email            		= $this->input->post('email');
        $notelp                 = $this->input->post('notelp');
        $pesan     				= $this->input->post('pesan');
        $recaptchaResponse		= trim($this->input->post('g-recaptcha-response'));
        $cons_secret			='6LcKb78ZAAAAAOD5FFVOisEvu9xhZO--iqgzpOV6';
        $status					= 1;
        $data_insert = array(
            'nama'       			=> $nama,
            'email'           		=> $email,
            'notelp'                => $notelp,
            'pesan'    				=> $pesan
        );
        $res = $this->db->insert('tb_contact', $data_insert);
        if ($res>=1) {
            $this->session->set_flashdata('success', 'Data Tersimpan!');
            redirect('contact');
        } else {
            $this->session->set_flashdata('error', 'Data Tidak Tersimpan!');
            redirect('contact');
        }
    }

    public function googleCaptachStore(){
       
      $data = array('nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email'), 
                    'notelp' => $this->input->post('notelp'), 
                    'pesan' => $this->input->post('pesan'), 
                   );
       
      $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
       
      $userIp=$this->input->ip_address();
         
      $secret='6LcKb78ZAAAAAOD5FFVOisEvu9xhZO--iqgzpOV6';
       
      $credential = array(
            'secret' => $secret,
            'response' => $this->input->post('g-recaptcha-response')
        );
 
      $verify = curl_init();
      curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
      curl_setopt($verify, CURLOPT_POST, true);
      curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
      curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($verify);
 
      $status= json_decode($response, true);
       
      if($status['success']){ 
       $this->db->insert('tb_contact',$data); 
       $this->session->set_flashdata('success', 'Terkirim');
      }else{
       $this->session->set_flashdata('error', 'Tidak Terkirim');
      }
      redirect(base_url('contact'));
     }
	// End Contact


}

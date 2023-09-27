<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Backend extends MY_Controller {



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

		$this->load->view('backend/header');

        // $data['getPenghasilan'] = $this->models->getPenghasilan();

        // $data['getTotalclient'] = $this->models->getTotalclient();

        $data['getAllclient']   = $this->models->getAllclient();

		$this->load->view('backend/dashboard', $data);

		$this->load->view('backend/footer');

	}



	public function brand()

	{

		$this->load->view('backend/header');

		$data['getBrand'] = $this->models->getBrand();

		$this->load->view('backend/brand', $data);

		$this->load->view('backend/footer');

	}



	public function add_brand()

	{

		$this->load->view('backend/header');

		$this->load->view('backend/add_brand');

		$this->load->view('backend/footer');

	}



	public function do_insertbrand()

	{

		$cSlug = array(

                    'field' => 'brand_slug',

                    'table' => 'brand',

                    'id' => 'id'

                );

        $this->load->library('slug', $cSlug);



        $this->load->helper('string');

        $id_unique      = random_string('numeric',11);

        $nama_brand 	= $_POST['nama_brand'];

        $brand_slug		= $this->slug->create_uri($nama_brand,true);

        $data_insert = array(

        	'id_unique'		=> $id_unique,

            'nama_brand' 	=> $nama_brand,

            'brand_slug'    => $brand_slug

        );

        $res = $this->db->insert('brand', $data_insert);

        if ($res>=1) {

            $uploaded_files = $_FILES['files'];

            unset($_FILES);



            foreach ($uploaded_files as $desc => $arr) {

                foreach ($arr as $k => $string) {

                    $_FILES[$k][$desc] = $string;

                }

            }



            $this->load->library('upload');

            $config['upload_path'] = 'assets/images/brand';

            $config['allowed_types'] = 'jpg|jpeg|png|doc|docx|pdf|txt';



            foreach ($_FILES as $k => $file) {

                $path_info = pathinfo($file["name"]);

                $file_extension = $path_info['extension'];

                $path_part_filename = $path_info['filename'];

                $config['file_name'] = str_replace(" ", "", $path_part_filename);





                $this->upload->initialize($config);



                if (!$this->upload->do_upload($k)) {

                    $errors = $this->upload->display_errors();

                    var_dump($errors);

                } else {

                    

                }

                $uploadData[$k]['nama_image'] 	= $file["name"];

                $uploadData[$k]['id_unique'] 	= $id_unique;

                $uploadData[$k]['brand_slug'] 	= $brand_slug;



                // var_dump($uploadData);

                // exit();

            }



            if(!empty($uploadData)){

            // Insert files data into the database

            $insert = $this->models->Saveimgbrand($uploadData);

            }

            $this->session->set_flashdata('success', 'Data Tersimpan!');

            redirect('backend/brand');

        } else {

            $this->session->set_flashdata('error', 'Data Tidak Tersimpan!');

            redirect('backend/brand');

        }

	}



    public function news()

    {

        $this->load->view('backend/header');

        $data['getNews'] = $this->models->getNews();

        $this->load->view('backend/news', $data);

        $this->load->view('backend/footer');

    }



    public function add_news()

    {

        $this->load->view('backend/header');

        $this->load->view('backend/add_news');

        $this->load->view('backend/footer');

    }



    public function do_insertnews()

    {

        $cSlug = array(

                    'field' => 'slug_news',

                    'table' => 'news',

                    'id' => 'id'

                );

        $this->load->library('slug', $cSlug);



        $this->load->helper('string');

        $id_unique      = random_string('numeric',11);

        $judul_news     = $_POST['judul_news'];

        $kategori_news  = $_POST['kategori_news'];

        $excerpt_news   = $_POST['excerpt_news'];

        $content_news   = $_POST['post_content'];

        $author_news    = $_POST['author_news'];

        $tanggal_news   = $_POST['tanggal_news'];

        $fixtanggal     = date("Y-m-d", strtotime($tanggal_news));

        $slug           = $this->slug->create_uri($judul_news,true);

        $data_insert = array(

            'id_unique'     => $id_unique,

            'judul_news'    => $judul_news,

            'kategori_news' => $kategori_news,

            'excerpt_news'  => $excerpt_news,

            'content_news'  => $content_news,

            'author_news'   => $author_news,

            'tanggal_news'  => $fixtanggal,

            'slug_news'     => $slug

        );

        $res = $this->db->insert('news', $data_insert);

        // var_dump($data_insert);

        // exit();

        if ($res>=1) {

            $uploaded_files = $_FILES['files'];

            unset($_FILES);



            foreach ($uploaded_files as $desc => $arr) {

                foreach ($arr as $k => $string) {

                    $_FILES[$k][$desc] = $string;

                }

            }



            $this->load->library('upload');

            $config['upload_path'] = 'assets/images/news';

            $config['allowed_types'] = 'jpg|jpeg|png|doc|docx|pdf|txt';



            foreach ($_FILES as $k => $file) {

                $path_info = pathinfo($file["name"]);

                $file_extension = $path_info['extension'];

                $path_part_filename = $path_info['filename'];

                $config['file_name'] = str_replace(" ", "", $path_part_filename);





                $this->upload->initialize($config);



                if (!$this->upload->do_upload($k)) {

                    $errors = $this->upload->display_errors();

                    var_dump($errors);

                } else {

                    

                }

                $uploadData[$k]['nama_image']   = $file["name"];

                $uploadData[$k]['id_unique']    = $id_unique;

                $uploadData[$k]['slug']         = $slug;



                // var_dump($uploadData);

                // exit();

            }



            if(!empty($uploadData)){

            // Insert files data into the database

            $insert = $this->models->SaveimgNews($uploadData);

            }

            $this->session->set_flashdata('success', 'Data Tersimpan!');

            redirect('backend/news');

        } else {

            $this->session->set_flashdata('error', 'Data Tidak Tersimpan!');

            redirect('backend/news');

        }

    }



    public function do_deletenews($id_unique)

    {

        $where = array('id_unique' => $id_unique);

        $res = $this->models->DeleteEverything('news',$where);

        if($res>=1){

            redirect('backend/news');

        }

    }



    public function streaming()

    {

        $this->load->view('backend/header');

        // $data['getContact'] = $this->models->getContact();

        $this->load->view('backend/streaming');

        $this->load->view('backend/footer');

    }



    public function do_updatestreaming()

    {

        $id_unique  = 20203958271;

        $url        = $_POST['url'];

        $data_update = array (

            'url'        => $url

        );

        $where = array('id_unique' => $id_unique);

        $res = $this->db->update('streaming',$data_update,$where);

        if ($res>=1) {

            $this->session->set_flashdata('success', 'Data Tersimpan!');

            redirect('backend/streaming');

        } else {



            $this->session->set_flashdata('error', 'Data Tersimpan!');

            redirect('backend/streaming');

        }

    }



    public function service()

    {

        $this->load->view('backend/header');

        $data['getService'] = $this->models->getService();

        $this->load->view('backend/service', $data);

        $this->load->view('backend/footer');

    }



    public function add_service()

    {

        $this->load->view('backend/header');

        $this->load->view('backend/add_service');

        $this->load->view('backend/footer');

    }



    public function do_insertservice()

    {

        $cSlug = array(

                    'field' => 'slug_service',

                    'table' => 'servicesp',

                    'id' => 'id'

                );

        $this->load->library('slug', $cSlug);



        $this->load->helper('string');

        $id_unique              = random_string('numeric',11);

        $judul_service          = $_POST['judul_service'];

        $konten_service         = $_POST['post_contenta'];

        $slug                   = $this->slug->create_uri($judul_service,true);

        $data_insert = array(

            'id_unique'             => $id_unique,

            'judul_service'         => $judul_service,

            'konten_service'        => $konten_service,

            'slug_service'          => $slug

        );

        $res = $this->db->insert('servicesp', $data_insert);

        if ($res>=1) {

            $this->session->set_flashdata('success', 'Data Tersimpan!');

            redirect('backend/service');

        } else {

            $this->session->set_flashdata('error', 'Data Tidak Tersimpan!');

            redirect('backend/service');

        }

    }



    public function tinymce_uploada() {

        $config['upload_path'] = 'assets/images/service/';

        $config['allowed_types'] = 'jpg|jpeg|png';

        // $config['max_size'] = 5000;

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('file')) {

            $this->output->set_header('HTTP/1.0 500 Server Error');

            exit;

        } else {

            $file = $this->upload->data();

            $this->output

                ->set_content_type('application/json', 'utf-8')

                ->set_output(json_encode(['location' => base_url().'assets/images/service/'.$file['file_name']]))

                ->_display();

            exit;

        }

    }



    public function portfolio()

    {

        $this->load->view('backend/header');

        $data['getPortfolioBackend'] = $this->models->getPortfolioBackend();

        $this->load->view('backend/portfolio', $data);

        $this->load->view('backend/footer');

    }



    public function add_portfolio()

    {

        $this->load->view('backend/header');

        $this->load->view('backend/add_portfolio');

        $this->load->view('backend/footer');

    }



    public function do_insertportfolio()

    {

        $cSlug = array(

                    'field' => 'slug_portfolio',

                    'table' => 'portfolio',

                    'id' => 'id'

                );

        $this->load->library('slug', $cSlug);



        $this->load->helper('string');

        $id_unique              = random_string('numeric',11);

        $judul_portfolio        = $_POST['judul_portfolio'];

        $nama_client            = $_POST['nama_client'];

        $waktu                  = $_POST['waktu'];

        $web_client             = $_POST['web_client'];

        $kategori_portfolio     = $_POST['kategori_portfolio'];

        $deskripsi_portfolio    = $_POST['post_content'];

        $deliverables           = $_POST['deliverables'];

        $technology             = $_POST['technology'];

        $slug                   = $this->slug->create_uri($judul_portfolio,true);

        $data_insert = array(

            'id_unique'             => $id_unique,

            'judul_portfolio'       => $judul_portfolio,

            'nama_client'           => $nama_client,

            'waktu'                 => $waktu,

            'web_client'            => $web_client,

            'kategori_portfolio'    => $kategori_portfolio,

            'deskripsi_portfolio'   => $deskripsi_portfolio,

            'deliverables'          => $deliverables,

            'technology'            => $technology,

            'slug_portfolio'        => $slug

        );

        $res = $this->db->insert('portfolio', $data_insert);

        if ($res>=1) {

            $uploaded_files = $_FILES['files'];

            unset($_FILES);



            foreach ($uploaded_files as $desc => $arr) {

                foreach ($arr as $k => $string) {

                    $_FILES[$k][$desc] = $string;

                }

            }



            $this->load->library('upload');

            $config['upload_path'] = 'assets/images/portfolio';

            $config['allowed_types'] = 'jpg|jpeg|png|doc|docx|pdf|txt';



            foreach ($_FILES as $k => $file) {

                $path_info = pathinfo($file["name"]);

                $file_extension = $path_info['extension'];

                $path_part_filename = $path_info['filename'];

                $config['file_name'] = str_replace(" ", "", $path_part_filename);





                $this->upload->initialize($config);



                if (!$this->upload->do_upload($k)) {

                    $errors = $this->upload->display_errors();

                    var_dump($errors);

                } else {

                    

                }

                $uploadData[$k]['nama_image']   = $file["name"];

                $uploadData[$k]['id_unique']    = $id_unique;



            }



            if(!empty($uploadData)){

            // Insert files data into the database

            $insert = $this->models->Saveimgportfolio($uploadData);

            }

            $this->session->set_flashdata('success', 'Data Tersimpan!');

            redirect('backend/portfolio');

        } else {

            $this->session->set_flashdata('error', 'Data Tidak Tersimpan!');

            redirect('backend/portfolio');

        }

    }



    public function do_deleteportfolio($id_unique)

    {

        $where = array('id_unique' => $id_unique);

        $res = $this->models->DeleteEverything('portfolio',$where);

        if($res>=1){

            redirect('backend/portfolio');

        }

    }



    public function tinymce_upload() {

        $config['upload_path'] = 'assets/images/portfolio/';

        $config['allowed_types'] = 'jpg|jpeg|png';

        // $config['max_size'] = 5000;

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('file')) {

            $this->output->set_header('HTTP/1.0 500 Server Error');

            exit;

        } else {

            $file = $this->upload->data();

            $this->output

                ->set_content_type('application/json', 'utf-8')

                ->set_output(json_encode(['location' => base_url().'assets/images/portfolio/'.$file['file_name']]))

                ->_display();

            exit;

        }

    }



    public function vacancy()

    {

        $this->load->view('backend/header');

        $data['getVacancyBackend'] = $this->models->getVacancyBackend();

        $this->load->view('backend/vacancy', $data);

        $this->load->view('backend/footer');

    }



    public function add_vacancy()

    {

        $this->load->view('backend/header');

        $this->load->view('backend/add_vacancy');

        $this->load->view('backend/footer');

    }



    public function do_insertvacancy()

    {

        $cSlug = array(

                    'field' => 'job_slug',

                    'table' => 'vacancy',

                    'id' => 'id'

                );

        $this->load->library('slug', $cSlug);



        $this->load->helper('string');

        $id_unique      = random_string('numeric',11);

        $judul_job      = $_POST['judul_job'];

        $lokasi         = $_POST['lokasi'];

        $isi_job        = $_POST['isi_job'];

        $slug           = $this->slug->create_uri($judul_job,true);

        $data_insert = array(

            'id_unique'     => $id_unique,

            'judul_job'     => $judul_job,

            'lokasi'        => $lokasi,

            'isi_job'       => $isi_job,

            'job_slug'      => $slug

        );

        $res = $this->db->insert('vacancy', $data_insert);

        if ($res>=1) {

            $this->session->set_flashdata('success', 'Data Tersimpan!');

            redirect('backend/vacancy');

        } else {



            $this->session->set_flashdata('error', 'Data Tersimpan!');

            redirect('backend/vacancy');

        }

    }



    public function do_deletevacancy($id_unique)

    {

        $where = array('id_unique' => $id_unique);

        $res = $this->models->DeleteEverything('vacancy',$where);

        if($res>=1){

            redirect('backend/vacancy');

        }

    }



    public function game_mobile_legends()

    {

        $this->load->view('backend/header');

        $data['getMemberTM'] = $this->models->getMemberML();

        $this->load->view('backend/game_member', $data);

        $this->load->view('backend/footer');

    }



    public function game_pubgm()

    {

        $this->load->view('backend/header');

        $data['getMemberTM'] = $this->models->getMemberPUBGM();

        $this->load->view('backend/game_member', $data);

        $this->load->view('backend/footer');

    }



    public function game_codm()

    {

        $this->load->view('backend/header');

        $data['getMemberTM'] = $this->models->getMemberCODM();

        $this->load->view('backend/game_member', $data);

        $this->load->view('backend/footer');

    }



    public function edit_game_member($id_unique)

    {

        $this->load->view('backend/header');

        $data['getMemberTM'] = $this->models->getMemberEdit(" WHERE id_unique = $id_unique");

        $this->load->view('backend/edit_team', $data);

        $this->load->view('backend/footer');

    }



    public function do_updateteammember()

    {

        $this->load->helper('string');

        $id_unique      = $_POST['id_unique'];

        $nama_user      = $_POST['nama_user'];

        $nama_lengkap   = $_POST['nama_lengkap'];

        $kategori_game  = $_POST['kategori_game'];

        $data_update = array(

            'nama_user'     => $nama_user,

            'nama_lengkap'  => $nama_lengkap

        );

        $where = array('id_unique' => $id_unique);

        $res = $this->db->update('game_member', $data_update, $where);

        if ($res>=1) {

            $uploaded_files = $_FILES['files'];

            unset($_FILES);



            foreach ($uploaded_files as $desc => $arr) {

                foreach ($arr as $k => $string) {

                    $_FILES[$k][$desc] = $string;

                }

            }



            $this->load->library('upload');

            $config['upload_path'] = 'assets/images/gamemember';

            $config['allowed_types'] = 'jpg|jpeg|png|doc|docx|pdf|txt';



            foreach ($_FILES as $k => $file) {

                $path_info = pathinfo($file["name"]);

                $file_extension = $path_info['extension'];

                $path_part_filename = $path_info['filename'];

                $config['file_name'] = str_replace(" ", "", $path_part_filename);





                $this->upload->initialize($config);



                if (!$this->upload->do_upload($k)) {

                    $errors = $this->upload->display_errors();

                    var_dump($errors);

                } else {

                    

                }

                $uploadData[$k]['nama_image']   = $file["name"];

                $uploadData[$k]['id_unique']    = $id_unique;



            }



            if(!empty($uploadData)){

            // Insert files data into the database$data_update = array(

            $data_updates = array(

                'nama_image'     => $file["name"]

            );

            $where = array('id_unique' => $id_unique);

            $insert = $this->db->update('img_gamemember', $data_updates, $where);

            // $insert = $this->models->SaveimgTeamgame($uploadData, $where);



            }



            if ( $kategori_game = 1 ) {

                $this->session->set_flashdata('success', 'Data Tersimpan!');

                redirect('backend/game_mobile_legends');    

            } else {

                echo "test";

            }

            

        } else {

            $this->session->set_flashdata('error', 'Data Tidak Tersimpan!');

            redirect('backend/staff');

        }

    }



    public function request_order()

    {

        $this->load->view('backend/header');

        $data['getData'] = $this->models->getRequestorder();

        $this->load->view('backend/request_order', $data);

        $this->load->view('backend/footer');

    }



    public function edit_requestorder($id_unique)

    {

        $this->load->view('backend/header');

        $data['getData'] = $this->models->getRequestorders(" WHERE id_unique = $id_unique");

        $this->load->view('backend/edit_requestorder', $data);

        $this->load->view('backend/footer');

    }



    public function do_updaterequestorder()

    {

        $id_unique      = $_POST['id_unique'];

        $status         = 2;

        $data_update = array(

            'status'         => $status

        );

        $where = array('id_unique' => $id_unique);

        $res = $this->db->update('request_order', $data_update, $where);

        if ($res>=1) {

            $this->session->set_flashdata('success', 'Data Tersimpan!');

            redirect('backend/request_order');

        } else {

            $this->session->set_flashdata('error', 'Data Tidak Tersimpan!');

            redirect('backend/request_order');

        }

    }



    public function do_updateskor()

    {

        $id_unique      = $_POST['id_unique'];

        $nama_turnamen  = $_POST['nama_turnamen'];

        $judul_turnamen = $_POST['judul_turnamen'];

        $skor           = $_POST['skor'];

        $lawan          = $_POST['lawan'];

        $status         = 1;

        $data_update = array(

            'skor'          => $skor,

            'status'        => $status

        );

        $where = array('id_unique' => $id_unique);

        $res = $this->db->update('skor', $data_update, $where);

        if ($res>=1) {

            $this->session->set_flashdata('success', 'Data Tersimpan!');

            redirect('backend/tournament');

        } else {



            $this->session->set_flashdata('error', 'Data Tersimpan!');

            redirect('backend/tournament');

        }

    }



    public function achievement()

    {

        $this->load->view('backend/header');

        $data['getAchievement'] = $this->models->getAchievement();

        $this->load->view('backend/achievement', $data);

        $this->load->view('backend/footer');

    }



    public function add_achievement()

    {

        $this->load->view('backend/header');

        $this->load->view('backend/add_achievement');

        $this->load->view('backend/footer');

    }



    public function do_insertachiev()

    {

        $this->load->helper('string');

        $id_unique      = random_string('numeric',11);

        $judul_achiev   = $_POST['judul_achiev'];

        $nama_tim       = $_POST['nama_tim'];

        $kategori_game  = $_POST['kategori_game'];

        $waktu          = $_POST['waktu'];

        $juara          = $_POST['juara'];

        $data_insert = array(

            'id_unique'         => $id_unique,

            'judul_achiev'      => $judul_achiev,

            'nama_tim'          => $nama_tim,

            'kategori_game'     => $kategori_game,

            'waktu'             => $waktu,

            'juara'             => $juara

        );

        $res = $this->db->insert('achievement', $data_insert);

        if ($res>=1) {

            $uploaded_files = $_FILES['files'];

            unset($_FILES);



            foreach ($uploaded_files as $desc => $arr) {

                foreach ($arr as $k => $string) {

                    $_FILES[$k][$desc] = $string;

                }

            }



            $this->load->library('upload');

            $config['upload_path'] = 'assets/images/logo-achievement';

            $config['allowed_types'] = 'jpg|jpeg|png|doc|docx|pdf|txt';



            foreach ($_FILES as $k => $file) {

                $path_info = pathinfo($file["name"]);

                $file_extension = $path_info['extension'];

                $path_part_filename = $path_info['filename'];

                $config['file_name'] = str_replace(" ", "", $path_part_filename);





                $this->upload->initialize($config);



                if (!$this->upload->do_upload($k)) {

                    $errors = $this->upload->display_errors();

                    var_dump($errors);

                } else {

                    

                }

                $uploadData[$k]['nama_image']   = $file["name"];

                $uploadData[$k]['id_unique']    = $id_unique;



                // var_dump($uploadData);

                // exit();

            }



            if(!empty($uploadData)){

            // Insert files data into the database

            $insert = $this->models->Saveimgachiev($uploadData);

            }

            $this->session->set_flashdata('success', 'Data Tersimpan!');

            redirect('backend/achievement');

        } else {

            $this->session->set_flashdata('error', 'Data Tidak Tersimpan!');

            redirect('backend/achievement');

        }

    }



    public function do_deleteachievement($id_unique)

    {

        $where = array('id_unique' => $id_unique);

        $res = $this->models->DeleteEverything('achievement',$where);

        if($res>=1){

            redirect('backend/achievement');

        }

    }



    public function about()

    {

        $this->load->view('backend/header');

        $this->load->view('backend/about');

        $this->load->view('backend/footer');

    }



    public function detail_contact($id_unique)

    {

        $this->load->view('backend/header');

        $data['getContactdetail'] = $this->models->getContactdetail(" WHERE id_unique = '$id_unique'");

        $this->load->view('backend/view_contact', $data);

        $this->load->view('backend/footer');

    }



    public function order()

    {

        $this->load->view('backend/header');

        $data['getOrder'] = $this->models->getOrder();

        $this->load->view('backend/order', $data);

        $this->load->view('backend/footer');

    }



    public function detail_order($id_unique)

    {

        $this->load->view('backend/header');

        $data['getOrderdetail'] = $this->models->getOrderdetail(" WHERE id_unique = '$id_unique'");

        $this->load->view('backend/view_order', $data);

        $this->load->view('backend/footer');

    }



    public function do_deleteproject($id_unique)

    {

        $where = array('id_unique' => $id_unique);

        $res = $this->models->DeleteEverything('content',$where);

        if($res>=1){

            redirect('backend/project');

        }

    }



    public function do_deletebrand($id_unique)

    {

        $where = array('id_unique' => $id_unique);

        $res = $this->models->DeleteEverything('brand',$where);

        if($res>=1){

            redirect('backend/brand');

        }

    }



    public function do_logout()

    {

        $this->session->set_userdata('email', FALSE);

        $this->session->sess_destroy();

        redirect('login');

    }



    public function gallery()

    {

        $this->load->view('backend/header');

        $data['getGallery'] = $this->models->getGallery();

        $this->load->view('backend/gallery', $data);

        $this->load->view('backend/footer');

    }



    public function add_gallery()

    {

        $this->load->view('backend/header');

        $data['getGallery'] = $this->models->getGallery();

        $this->load->view('backend/add_gallery', $data);

        $this->load->view('backend/footer');

    }



    public function do_insertgallery()

    {

        // $cSlug = array(

        //             'field' => 'slug',

        //             'table' => 'content',

        //             'id' => 'id'

        //         );

        // $this->load->library('slug', $cSlug);



        $this->load->helper('string');

        $id_unique      = random_string('numeric',11);

        // $data_insert = array(

        //     'id_unique'     => $id_unique,

        //     'nama_image'    => $nama_image

        // );

        // $res = $this->db->insert('gallery', $data_insert);



        $uploaded_files = $_FILES['files'];

        unset($_FILES);



        foreach ($uploaded_files as $desc => $arr) {

            foreach ($arr as $k => $string) {

                $_FILES[$k][$desc] = $string;

            }

        }



        $this->load->library('upload');

        $config['upload_path'] = 'assets/images/gallery';

        $config['allowed_types'] = 'jpg|jpeg|png|doc|docx|pdf|txt';



        foreach ($_FILES as $k => $file) {

            $path_info = pathinfo($file["name"]);

            $file_extension = $path_info['extension'];

            $path_part_filename = $path_info['filename'];

            $config['file_name'] = str_replace(" ", "", $path_part_filename);





            $this->upload->initialize($config);



            if (!$this->upload->do_upload($k)) {

                $errors = $this->upload->display_errors();

                var_dump($errors);

            } else {

                

            }

            $uploadData[$k]['nama_image']   = $file["name"];

            $uploadData[$k]['id_unique']    = $id_unique;



            // var_dump($uploadData);

            // exit();

        }



        if(!empty($uploadData)){

            // Insert files data into the database

            $insert = $this->models->SaveimgGallery($uploadData);

            $this->session->set_flashdata('success', 'Data Tersimpan!');

            redirect('backend/gallery');

        } else {

            $this->session->set_flashdata('error', 'Data Tidak Tersimpan!');

            redirect('backend/gallery');

        }

    }

    public function contact()
    {
        $this->load->view('backend/header');
        $data['getcontact'] = $this->models->getContactnya();
        $this->load->view('backend/contact', $data);
        $this->load->view('backend/footer');
    }
    
    public function mushollas()
	{
		$this->load->view('backend/header');
		// $data['getBrand'] = $this->models->getBrand();
		$this->load->view('backend/mushollas');
		$this->load->view('backend/footer');

	}



}


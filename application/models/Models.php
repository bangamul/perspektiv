<?php 
class Models extends CI_Model
    {
        // Batas Lookit

        public function getBrand()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_brand WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM brand p";
            $res = $this->db->query($q);
            return $res->result();
        }
        
        public function getDataNewsdetail()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_news WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM news p";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function Saveimgbrand($files = array()){
            $insert = $this->db->insert_batch('img_brand',$files);
        }

        public function Saveimgportfolio($files = array()){
            $insert = $this->db->insert_batch('img_portfolio',$files);
        }

        public function Saveimgskor($files = array()){
            $insert = $this->db->insert_batch('img_skor',$files);
        }

        public function SaveimgNews($files = array()){
            $insert = $this->db->insert_batch('img_news',$files);
        }

        public function SaveimgGallery($files = array()){
            $insert = $this->db->insert_batch('gallery',$files);
        }

        public function SaveimgTeamgame($files = array()){
            $insert = $this->db->update('img_gamemember',$files);
        }

        public function Saveimgachiev($files = array()){
            $insert = $this->db->insert_batch('img_achievement',$files);
        }

        public function getBrands()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_brand WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM brand p ORDER BY id DESC LIMIT 4";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getProject()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_content WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM content p";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getSessionPhoto()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_content WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM content p WHERE kategori = 'session'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getKategoriSession()
        {
            $q= "SELECT DISTINCT kategori FROM content WHERE kategori = 'session'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getFamilyPhoto()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_content WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM content p WHERE kategori = 'family'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getKategoriFamily()
        {
            $q= "SELECT DISTINCT kategori FROM content WHERE kategori = 'family'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getPersonalPhoto()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_content WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM content p WHERE kategori = 'personal'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getKategoriPersonal()
        {
            $q= "SELECT DISTINCT kategori FROM content WHERE kategori = 'personal'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getProductPhoto()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_content WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM content p WHERE kategori = 'product'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getKategoriProduct()
        {
            $q= "SELECT DISTINCT kategori FROM content WHERE kategori = 'product'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getPrewedPhoto()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_content WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM content p WHERE kategori = 'prewed'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getKategoriPrewed()
        {
            $q= "SELECT DISTINCT kategori FROM content WHERE kategori = 'prewed'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getWeddingPhoto()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_content WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM content p WHERE kategori = 'wedding'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getKategoriWedding()
        {
            $q= "SELECT DISTINCT kategori FROM content WHERE kategori = 'wedding'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getRentPhoto()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_content WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM content p WHERE kategori = 'rent'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getKategoriRent()
        {
            $q= "SELECT DISTINCT kategori FROM content WHERE kategori = 'rent'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getBoothPhoto()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_content WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM content p WHERE kategori = 'booth'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getKategoriBooth()
        {
            $q= "SELECT DISTINCT kategori FROM content WHERE kategori = 'booth'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getOtherPhoto()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_content WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM content p WHERE kategori = 'other'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getKategoriOther()
        {
            $q= "SELECT DISTINCT kategori FROM content WHERE kategori = 'other'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getDetailPhoto($slug)
        {
            $q= "SELECT * FROM img_content ";
            $res = $this->db->query($q . $slug);
            return $res->result();
        }

        public function getDetailKategori($slug)
        {
            $q= "SELECT DISTINCT kategori FROM content ";
            $res = $this->db->query($q . $slug);
            return $res->result();
        }

        public function getProjectLatest()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_content WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM content p ORDER BY id DESC LIMIT 8";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getStreaming()
        {
            $q= "SELECT * FROM streaming";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function cek_login($email,$password){
            $this->db->where('email', $email);
            $this->db->where('password', $password);
            $query = $this->db->get('data_user');
            if ($query->num_rows()>0) {
                foreach ($query->result() as $row) {
                    $sess = array ( 'password'      => md5($row->password),
                                    'username'      => $row->username,
                                    'nama_user'     => $row->nama_user,
                                    'id_unique'     => $row->id_unique,
                                    'mobile'        => $row->mobile,
                                    'email'         => $row->email,
                                    'alamat'        => $row->alamat,
                                    'provinsi'      => $row->provinsi,
                                    'kota'          => $row->kota,
                                    'kecamatan'     => $row->kecamatan,
                                    'kelurahan'     => $row->kelurahan,
                                    'kodepos'       => $row->kodepos,
                                    'status'        => $row->status
                    );
                }
                $this->session->set_userdata($sess);
                redirect('backend');
            } else {
                $this->session->set_flashdata('error', 'Maaf email dan password Anda salah!');
                redirect('login');
            }
        }
        
        public function cek_login_musholla($email,$password){
            $this->db->where('email', $email);
            $this->db->where('password', $password);
            $query = $this->db->get('data_user');
            if ($query->num_rows()>0) {
                foreach ($query->result() as $row) {
                    $sess = array ( 'password'      => md5($row->password),
                                    'username'      => $row->username,
                                    'nama_user'     => $row->nama_user,
                                    'id_unique'     => $row->id_unique,
                                    'mobile'        => $row->mobile,
                                    'email'         => $row->email,
                                    'alamat'        => $row->alamat,
                                    'provinsi'      => $row->provinsi,
                                    'kota'          => $row->kota,
                                    'kecamatan'     => $row->kecamatan,
                                    'kelurahan'     => $row->kelurahan,
                                    'kodepos'       => $row->kodepos,
                                    'status'        => $row->status
                    );
                }
                $this->session->set_userdata($sess);
                redirect('mushollas');
            } else {
                $this->session->set_flashdata('error', 'Maaf email dan password Anda salah!');
                redirect('login');
            }
        }

        public function getContact()
        {
            $q= "SELECT * FROM contact ";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getContactdetail($id_unique)
        {
            $q= "SELECT * FROM contact ";
            $res = $this->db->query($q . $id_unique);
            return $res->result();
        }

        public function getOrder()
        {
            $q= "SELECT * FROM orders ";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getOrderdetail($id_unique)
        {
            $q= "SELECT * FROM orders ";
            $res = $this->db->query($q . $id_unique);
            return $res->result();
        }

        public function DeleteEverything($tabelName,$where) {
            $res = $this->db->delete($tabelName,$where);
            return $res;
        }

        public function getPenghasilan()
        {
            $q= "SELECT SUM(harga) as hasil FROM content WHERE tanggal LIKE '%2020%'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getTotalclient()
        {
            $q= "SELECT COUNT(nama_client) as hasil FROM content WHERE tanggal LIKE '%2020%'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getAllclient()
        {
            $q= "SELECT * FROM db_order ORDER BY id DESC";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getGallery()
        {
            $q= "SELECT * FROM gallery WHERE status = 1 ORDER BY id DESC LIMIT 20";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getDataNews()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_news WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM news p WHERE p.status='1' ORDER BY id DESC";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getNews()
        {
            $q= "SELECT * FROM news";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getNewsGeneral()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_news WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM news p WHERE p.kategori_news = 1 ORDER BY p.id DESC";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getNewsGlobal()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_news WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM news p WHERE p.kategori_news = 2 ORDER BY p.id DESC";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getStaffFront()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_staff WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM staff p ";
            $res = $this->db->query($q);
            return $res->result();
          
        }

        public function getPortfolioBackend()
        {
            $q= "SELECT * FROM portfolio";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getVacancyBackend()
        {
            $q= "SELECT * FROM vacancy";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getJobVacancy()
        {
            $q= "SELECT * FROM vacancy ORDER BY id DESC";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getduaNews()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_news WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM news p ORDER BY id DESC LIMIT 2";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function gettigaNews()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_news WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM news p GROUP BY p.id DESC LIMIT 3 OFFSET 2";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberML()
        {
            $q= "SELECT * FROM game_member WHERE kategori_game = 1";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberPUBGM()
        {
            $q= "SELECT * FROM game_member WHERE kategori_game = 2";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberCODM()
        {
            $q= "SELECT * FROM game_member WHERE kategori_game = 3";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberEdit($id_unique)
        {
            $q= "SELECT * FROM game_member ";
            $res = $this->db->query($q . $id_unique);
            return $res->result();
        }

        public function getMemberMLFrontfirst()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_gamemember WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM game_member p WHERE kategori_game = 1 LIMIT 1 ";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberMLFront()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_gamemember WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM game_member p WHERE kategori_game = 1 GROUP BY p.id ASC LIMIT 4 OFFSET 1";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberMLFrontkontent()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_gamemember WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM game_member p WHERE kategori_game = 1 GROUP BY p.id DESC LIMIT 1";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberPUBGMFrontfirst()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_gamemember WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM game_member p WHERE kategori_game = 2 LIMIT 1 ";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberPUBGMFront()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_gamemember WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM game_member p WHERE kategori_game = 2 GROUP BY p.id ASC LIMIT 4 OFFSET 1";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberPUBGMFrontkontent()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_gamemember WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM game_member p WHERE kategori_game = 2 GROUP BY p.id DESC LIMIT 1";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberCODMFrontfirst()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_gamemember WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM game_member p WHERE kategori_game = 3 LIMIT 1 ";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberCODMFront()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_gamemember WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM game_member p WHERE kategori_game = 3 GROUP BY p.id ASC LIMIT 4 OFFSET 1";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getMemberCODMFrontkontent()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_gamemember WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM game_member p WHERE kategori_game = 3 GROUP BY p.id DESC LIMIT 1";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getRequestorder()
        {
            $q= "SELECT * FROM request_order";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getRequestorders($id_unique)
        {
            
            $q= "SELECT * FROM request_order";
            $res = $this->db->query($q . $id_unique);
            return $res->result();
        }

        public function getUpcoming()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_skor WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM skor p WHERE status = 0 ORDER BY p.id DESC LIMIT 10";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getRecent()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_skor WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM skor p WHERE status = 1 ORDER BY p.id DESC LIMIT 10";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getAchievement()
        {
            $q= "SELECT * FROM achievement";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getAchievFront()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_achievement WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM achievement p ";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getPortfolio()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_portfolio WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM portfolio p";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getPortfolioWEB()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_portfolio WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM portfolio p WHERE p.kategori_portfolio = 1 ORDER BY p.id DESC";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getPortfolioApps()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_portfolio WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM portfolio p WHERE p.kategori_portfolio = 2 ORDER BY p.id DESC";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getPortfolioDesign()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_portfolio WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM portfolio p WHERE p.kategori_portfolio = 3 ORDER BY p.id DESC";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getPortfolioIT()
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_portfolio WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM portfolio p WHERE p.kategori_portfolio = 6 ORDER BY p.id DESC";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getDataPortfoliodetail($slug_portfolio)
        {
            $q= "SELECT p.*,(SELECT nama_image FROM img_portfolio WHERE id_unique=p.id_unique LIMIT 1) as image_name FROM portfolio p";
            $res = $this->db->query($q . $slug_portfolio);
            return $res->result();
        }

        public function getService()
        {
            $q= "SELECT * FROM servicesp";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getServicewebsite()
        {
            $q= "SELECT * FROM servicesp WHERE judul_service = 'website'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getServicemobile()
        {
            $q= "SELECT * FROM servicesp WHERE judul_service = 'mobile'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getServicedesign()
        {
            $q= "SELECT * FROM servicesp WHERE judul_service = 'design'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getServicephoto()
        {
            $q= "SELECT * FROM servicesp WHERE judul_service = 'photo'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getServiceseo()
        {
            $q= "SELECT * FROM servicesp WHERE judul_service = 'seo'";
            $res = $this->db->query($q);
            return $res->result();
        }

        public function getServiceconsultant()
        {
            $q= "SELECT * FROM servicesp WHERE judul_service = 'consultant'";
            $res = $this->db->query($q);
            return $res->result();
        }

        // public function getport()
        // {
        //     $q= "SELECT * FROM general ";
        //     $res = $this->db->query($q);
        //     return $res->result();
        // }

        public function getContactnya()
        {
            $q= "SELECT * FROM tb_contact";
            $res = $this->db->query($q);
            return $res->result();
        }

	}
?>
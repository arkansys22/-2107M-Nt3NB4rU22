<?php
class Model_app extends CI_model{

    public $id    = 'id_berita';
    public $table_vendor = 'vendor_tbl';
    public $table_undangan = 'undangan_tbl';
    public $table_promo = 'promo_tbl';
    public $table_blogs = 'blogs_tbl';
    public $table_investasi = 'investasi_tbl';

    public $id_kabupaten = 'id';
    public $id_kecamatan = 'id';
    public $uname = 'username';
    public $kabupaten = 'kabupaten';
    public $table_users_bisnis = 'users_bisnis';
    public $id_bisnis = 'id_bisnis';
    public $id_projek = 'id_projek';
    public $id_harga = 'id_harga';
    public $table_bisnis = 'users_bisnis';
    public $table_harga = 'harga';
    public $table_kategori ='kategori';
    public $table_kecamatan ='kecamatan';
    public $id_kategori='id_kategori';
    public $kecamatan ='kecamatan';
    public $table_user='users';
    public $table_projek='projek';
    public $id_identitas    = 'id_identitas';
    public $table_identitas = 'identitas';





    public function verifyemail($key)
    {
        $data = array('aktivasi' => 1);
        $this->db->where('md5(email)', $key);
        return $this->db->update('users', $data);
    }

    function get_by_id_identitas($id)
    {
        $this->db->where($this->id_identitas, $id);
        return $this->db->get($this->table_identitas)->row();
    }

    public function view($table){
        return $this->db->get($table);
    }
    public function view_where($table,$data){
        $this->db->where($data);
        return $this->db->get($table);
    }
    public function view_where2($table,$data){
        $this->db->where('username',$data);
        return $this->db->get($table);
    }

    public function view_ordering2($table,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get();
    }
    public function insert($table,$data){
        return $this->db->insert($table, $data);
    }

    public function edit($table, $data){
        return $this->db->get_where($table, $data);
    }

    public function update($table, $data, $where){
        return $this->db->update($table, $data, $where);
    }

    public function delete($table, $where){
        return $this->db->delete($table, $where);
    }

    public function view_ordering_limits($table,$order,$ordering,$baris,$dari){
         $this->db->select('*');
         $this->db->from($table);
         $this->db->order_by($order,$ordering);
         $this->db->limit($dari, $baris);
         return $this->db->get()->result();
     }



    public function view_join_where2($table1,$table2,$field,$where){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        return $this->db->get();
    }

    public function view_joinwhere_2($table,$data){
        $this->db->where($data);
        return $this->db->get($table);
    }

    public function view_ordering_limit($table,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get($table);
    }



    public function view_join_where_2($table1,$table2,$field1,$field2){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field1.'='.$table2.'.'.$field2);
        return $this->db->get()->row_array();
    }

    public function view_join_wheres($table1,$table2,$field){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        return $this->db->get()->num_rows();
    }

    public function view_ordering($table,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }
    public function view_wheres_ordering($table,$data,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->row_array();
    }
    public function view_where_ordering($table,$data,$order,$ordering){
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function view_join_ordering($table1,$table2,$field,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }
    public function view_join_one($table1,$table2,$field,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    public function view_join_ones($table1,$table2,$field,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result();
    }

    public function view_ones($table1,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result();
    }
    public function view_join_three($table1,$table2,$table3,$table4,$field){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->join($table3, $table2.'.'.$this->id_kategori.'='.$table3.'.'.$this->id_kategori);
        $this->db->join($table4, $table2.'.'.$this->kabupaten.'='.$table4.'.'.$this->id_kabupaten);

        return $this->db->get()->result();
    }

    public function view_join_where($table1,$table2,$field,$where,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }
    public function view_join_where_kategori($table1,$table2,$table3,$table4,$field,$where,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
         $this->db->join($table3, $table1.'.'.$this->id_harga.'='.$table3.'.'.$this->id_harga);
         $this->db->join($table4, $table1.'.'.$this->kabupaten.'='.$table4.'.'.$this->id_kabupaten);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get();
    }

    public function view_join_row($table1,$table2,$field,$order,$ordering){
       $this->db->select('*');
       $this->db->from($table1);
       $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
       $this->db->order_by($order,$ordering);
       return $this->db->get()->num_rows();
   }

   public function view_join_one_limit($table1,$table2,$field,$order,$ordering,$baris,$dari){
         $this->db->select('*');
         $this->db->from($table1);
         $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
         $this->db->order_by($order,$ordering);
         $this->db->limit($dari, $baris);
         return $this->db->get()->result();
     }
     public function view_join_one_limit_publish($table1,$table2,$field,$status,$order,$ordering,$baris,$dari){
           $this->db->select('*');
           $this->db->from($table1);
           $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
           $this->db->where($status,'Y');
           $this->db->order_by($order,$ordering);
           $this->db->limit($dari, $baris);
           return $this->db->get()->result();
       }

     public function view_join_three_limit($table1,$table2,$table4,$table3,$field,$field2,$kabupaten,$id_kabupaten,$order,$ordering,$baris,$dari){
         $this->db->select('*');
         $this->db->from($table1);
         $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
         $this->db->join($table3, $table1.'.'.$field2.'='.$table3.'.'.$field2);
         $this->db->join($table4, $table1.'.'.$kabupaten.'='.$table4.'.'.$id_kabupaten);
         $this->db->order_by($order,$ordering);
         $this->db->limit($dari, $baris);
         return $this->db->get()->result();
     }
    function umenu_akses($link,$id){
        return $this->db->query("SELECT * FROM modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND users_modul.id_session='$id' AND modul.link='$link'")->num_rows();
    }
    public function cek_register($username,$email,$table){
        return $this->db->query("SELECT * FROM $table where username='".$this->db->escape_str($username)."' OR email='".$this->db->escape_str($email)."' ");
    }

    public function cek_login($username,$password,$table){
        return $this->db->query("SELECT * FROM $table where username='".$this->db->escape_str($username)."' AND password='".$this->db->escape_str($password)."' AND blokir='N' AND aktivasi='1'");
    }

    function grafik_kunjungan(){
        return $this->db->query("SELECT count(*) as jumlah, tanggal FROM statistik GROUP BY tanggal ORDER BY tanggal DESC LIMIT 10");
    }

    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        $this->db->or_where('judul_seo', $id);
        return $this->db->get($this->table_vendor)->row();
    }
    function get_by_id_vendors($id)
      {
        $this->db->select('*');
        $this->db->from($this->table_users_bisnis);
        $this->db->join($this->table_harga, $this->table_users_bisnis.'.'.$this->id_harga.'='.$this->table_harga.'.'.$this->id_harga);
        $this->db->join($this->table_kategori, $this->table_users_bisnis.'.'.$this->id_kategori.'='.$this->table_kategori.'.'.$this->id_kategori);
        $this->db->join($this->kabupaten, $this->table_users_bisnis.'.'.$this->kabupaten.'='.$this->kabupaten.'.'.$this->id_kabupaten);
        $this->db->join($this->table_kecamatan, $this->table_users_bisnis.'.'.$this->kecamatan.'='.$this->table_kecamatan.'.'.$this->id_kecamatan);
        $this->db->join($this->table_user, $this->table_users_bisnis.'.'.$this->uname.'='.$this->table_user.'.'.$this->uname);
        $this->db->where($this->id_bisnis, $id);
        $this->db->or_where('namabisnis_seo', $id);
        return $this->db->get()->row();
      }
      function get_by_id_projek($id)
      {
        $this->db->select('*');
        $this->db->from($this->table_projek);
        $this->db->join($this->table_users_bisnis, $this->table_projek.'.'.$this->uname.'='.$this->table_users_bisnis.'.'.$this->uname);
        $this->db->where($this->id_projek, $id);
        $this->db->or_where('judul_seo', $id);
        $this->db->join($this->table_kategori, $this->table_users_bisnis.'.'.$this->id_kategori.'='.$this->table_kategori.'.'.$this->id_kategori);
        $this->db->join($this->table_user, $this->table_users_bisnis.'.'.$this->uname.'='.$this->table_user.'.'.$this->uname);
        $this->db->join($this->kabupaten, $this->table_users_bisnis.'.'.$this->kabupaten.'='.$this->kabupaten.'.'.$this->id_kabupaten);
        $this->db->join($this->table_kecamatan, $this->table_users_bisnis.'.'.$this->kecamatan.'='.$this->table_kecamatan.'.'.$this->id_kecamatan);
        return $this->db->get()->row();
      }

      function get_by_id_harga($id)
      {
        $this->db->select('*');
        $this->db->from($this->table_harga);
        $this->db->join($this->table_users_bisnis, $this->table_harga.'.'.$this->uname.'='.$this->table_users_bisnis.'.'.$this->uname);
        $this->db->where('judul_seo', $id);
        $this->db->join($this->table_kategori, $this->table_users_bisnis.'.'.$this->id_kategori.'='.$this->table_kategori.'.'.$this->id_kategori);
        $this->db->join($this->table_user, $this->table_users_bisnis.'.'.$this->uname.'='.$this->table_user.'.'.$this->uname);
        $this->db->join($this->kabupaten, $this->table_users_bisnis.'.'.$this->kabupaten.'='.$this->kabupaten.'.'.$this->id_kabupaten);
        $this->db->join($this->table_kecamatan, $this->table_users_bisnis.'.'.$this->kecamatan.'='.$this->table_kecamatan.'.'.$this->id_kecamatan);
        return $this->db->get()->row();
      }
    function get_by_id_vendor($id)
      {
        $this->db->where($this->id, $id);
        $this->db->or_where('judul_seo', $id);
        return $this->db->get($this->table_vendor)->row();
      }
      function get_by_id_undangan($id)
        {
          $this->db->where($this->id, $id);
          $this->db->or_where('judul_seo', $id);
          return $this->db->get($this->table_undangan)->row();
        }
        function get_by_id_promo($id)
          {
            $this->db->where($this->id, $id);
            $this->db->or_where('judul_seo', $id);
            return $this->db->get($this->table_promo)->row();
          }
          function get_by_id_investasi($id)
            {
              $this->db->where($this->id, $id);
              $this->db->or_where('judul_seo', $id);
              return $this->db->get($this->table_investasi)->row();
            }
            function get_by_id_blogs($id)
              {
                $this->db->where($this->id, $id);
                $this->db->or_where('judul_seo', $id);
                return $this->db->get($this->table_blogs)->row();
              }

    function update_counter_undangan($id)
    {
        //return current article views
        $this->db->where('judul_seo', urldecode($id));
        $this->db->select('views'); $count = $this->db->get('undangan_tbl')->row();
        // then increase by one
        $this->db->where('judul_seo', urldecode($id));
        $this->db->set('views', ($count->views + 1));
        $this->db->update('undangan_tbl');
    }



}

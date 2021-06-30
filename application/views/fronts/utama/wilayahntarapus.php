	function kabupaten(){
        $propinsiID = $_GET['id'];
        $kabupaten   = $this->db->get_where('kabupaten',array('id_prov'=>$propinsiID));
        echo " <h5>Kabupaten</h5>
				<div class='input-style-1 b-50 type-2 color-5'>
						<div class='type-2 color-8'>
							<div class='drop-wrap drop-wrap-s-4 color-2'>";
        echo "<select id='kabupaten' name='kabupaten' onChange='loadKecamatan()' class='drop'><option value='' selected>- Pilih Kabupaten -</option>";
        foreach ($kabupaten->result() as $k)
        {
            if ($users2['kabupaten'] == $k->id){
                echo "<option class='drop-list' value='$k->id' selected>$k->nama</option>";
                                                  }else{
                                                  echo "<option class='drop-list' value='$k->id'>$k->nama</option>";
                                                }
            
            
        }
        echo "</select></div></div></div>";
    }
    function kecamatan(){
        $kabupatenID = $_GET['id'];
        $kecamatan   = $this->db->get_where('kecamatan',array('id_kabupaten'=>$kabupatenID));
        echo " <h5>Kecamatan</h5>
				<div class='input-style-1 b-50 type-2 color-5'>
						<div class='type-2 color-8'>
							<div class='drop-wrap drop-wrap-s-4 color-2'>";
        echo "<select id='kecamatan' name='kecamatan' class='drop'><option value='' selected>- Pilih Kecamatan -</option>";
        foreach ($kecamatan->result() as $k)
        {
            echo "<option value='$k->id'>$k->nama_kec</option>";
        }
        echo"</select></div></div></div>";
    }
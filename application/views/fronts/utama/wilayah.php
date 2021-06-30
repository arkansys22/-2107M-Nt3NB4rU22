<script type="text/javascript">

	
    function loadKabupaten()
    {
        var propinsi = $("#propinsi").val();
        $.ajax({
            type:'GET',
            url:"<?php echo base_url(); ?>index.php/user/kabupaten",
            data:"id=" + propinsi,
            success: function(msg)
            {
               $("#kabupatenArea").html(msg);
               loadKecamatan();  
            }
        });
    }
    
    
    function loadKecamatan()
    {
        var kabupaten = $("#kabupatenArea").val();
        $.ajax({
            type:'GET',
            url:"<?php echo base_url(); ?>index.php/user/kecamatan",
            data:"id=" + kabupaten,
            success: function(msg)
            {
                $("#kecamatanArea").html(msg);
            }
        });
    }
</script>

<form method="post" id="form">
    <p>Yakin ingin menghapus <?php echo $hasil->nik;?> - <?php echo $hasil->nama;?> </p>
    <input type="hidden" name="nik" value="<?php echo $hasil->nik;?>">
    <button id="tombol_hapus" type="button" class="btn btn-danger" data-dismiss="modal" >Hapus</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_hapus").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/karyawan/hapuskaryawan",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/karyawan/tampilkaryawan");
                      
                    }
                });
            });
        });
</script> 
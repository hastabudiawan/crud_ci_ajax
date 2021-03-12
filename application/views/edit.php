<form method="post" id="form">
    <div class="form-group">
        <label for="email">NIK:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->nik; ?>" name="nik_baru" placeholder="Masukan NIK">
    </div>
    <div class="form-group">
         <label for="email">Nama:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->nama; ?>" name="nama" placeholder="Masukan nama" >
    </div>
    <div class="form-group">
        <label>Jabatan:</label>
        <select class="form-control" name="jabatan">
        <?php
            $jur[0]="";
            $jur[1]="";
            $jur[2]="";
            switch ($hasil->jabatan){
                case "Front End Developer" : $jur[0]="selected"; break;
                case 'Back End Developer' : $jur[1]="selected"; break;
                case 'Supervisor Gudang' : $jur[2]="selected"; break;
            }
        ?>
            <option value="Front End Developer" <?php echo $jur[0]; ?>>Front End Developer</option>
            <option value="Back End Developer" <?php echo $jur[1]; ?>>Back End Developer</option>
            <option value="Supervisor Gudang" <?php echo $jur[2]; ?>>Supervisor Gudang</option>
        </select>
    </div>
    <input type="hidden" name="nik_lama" value="<?php echo $hasil->nik;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/karyawan/editkaryawan",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/karyawan/tampilkaryawan");    
                    }
                });
            });
        });
</script> 
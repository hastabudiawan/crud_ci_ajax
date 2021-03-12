<form method="post" id="form">
    <div class="form-group">
        <label for="email">NIK:</label>
        <input type="text" class="form-control"  name="nim" placeholder="Masukan NIK">
    </div>
    <div class="form-group">
         <label for="email">Nama:</label>
        <input type="text" class="form-control"  name="nama" placeholder="Masukan nama" >
    </div>
    <div class="form-group">
            <label>Jabatan:</label>
        <select class="form-control" name="jabatan">
            <option value="Front End Developer">Front End Developer</option>
            <option value="Back End Developer">Back End Developer</option>
            <option value="Supervisor Gudang">Supervisor Gudang</option>
        </select>
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/karyawan/simpankaryawan",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/karyawan/tampilkaryawan");
                    }
                });
            });
        });
</script> 
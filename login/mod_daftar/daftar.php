<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<!-- Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form-tambah">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Pendaftar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jenis">JENIS PENDAFTARAN</label>
                        <select class="form-control" name="jenis" id="jenis">
                            <option value="1">Siswa Baru</option>
                            <option value="2">Pindahan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>NISN</label>
                        <input type="text" name="nisn" class="form-control nisn" required="">
                    </div>
                    <div class="form-group">
                        <label>Nama Pendaftar</label>
                        <input type="text" name="nama" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label for="asal">Asal Sekolah</label>
                        <select class="form-control" style="width: 100%" name="asal" id="asal" required>
                            <option value="">Pilih Asal Sekolah</option>
                            <?php
                            $query = mysqli_query($koneksi, "select * from sekolah where status='1'");
                            while ($sekolah = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?= $sekolah['npsn'] ?>"><?= $sekolah['nama_sekolah'] ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Pilihan Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan" required>
                            <option value="">Pilih Jurusan</option>
                            <?php
                            $query = mysqli_query($koneksi, "select * from jurusan where status='1'");
                            while ($jurusan = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?= $jurusan['id_jurusan'] ?>"><?= $jurusan['id_jurusan'] ?> <?= $jurusan['nama_jurusan'] ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword4">PASSWORD (Mohon Diingat!)</label>
                        <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="text" name="nohp" class="form-control nohp" required="">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="hapusdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form-konfirmasi">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data Pendaftar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    Terdapat <b><?= rowcount($koneksi, 'daftar') ?></b> Jumlah data Pendaftar Akan Di Hapus.
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Hapus Semua</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="importdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form-import">
                    <div class="modal-header">
                        <h5 class="modal-title">Import Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="file">Import File Excel</label>
                            <input type="file" class="form-control-file" name="file" id="file" placeholder="" aria-describedby="helpfile" required>
                            <small id="helpfile" class="form-text text-muted">File harus .xls</small>
                        </div>
                       
               			<p><a href="template_excel/importdaftar.xls">Download Format</a></p>
				
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
           
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Pendaftar</h4>
               
				<div class="card-header-action">
                    <a class="btn btn-primary" href="mod_daftar/export_excel.php" role="button"> Download Excel</a>
                    <button type="button" class="btn btn-icon icon-left btn-info" data-toggle="modal" data-target="#tambahdata">
                        <i class="far fa-edit"></i> Tambah Data
                    </button>
					<!--<button type="button" class="btn btn-danger m-b-5" data-toggle="modal" data-target="#importdata"><i class="sidebar-item-icon fa fa-upload"></i>
					Import Data
					</button>-->
					<button type="button" class="btn btn-icon icon-left btn-warning" data-toggle="modal" data-target="#hapusdata">
                        <i class="fa fa-trash"></i> Hapus Data
                    </button>
					 
	</div>
	
            </div>
			
            <div class="card-body">
                <div class="table-responsive">
                    <table style="font-size: 12px" class="table table-striped table-sm" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No
                                </th>
                                <th>NISN</th>
								<th>Password</th>
                                <th>Nama Pendaftar</th>
                                <th>L/P</th>
                                <th>No Hp</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "select * from daftar");
                            $no = 0;
                            while ($daftar = mysqli_fetch_array($query)) {
                                $no++;
                                $bayar = mysqli_fetch_array(mysqli_query($koneksi, "select sum(jumlah) as total from bayar where id_daftar='$daftar[id_daftar]' "));
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $daftar['nisn'] ?></td>
									 <td><?= $daftar['password'] ?></td>
                                    <td><?= $daftar['nama'] ?></td>
                                    <td><?= $daftar['jenkel'] ?></td>
                                    <td>
                                        <i class="fab fa-whatsapp text-success   "></i>
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=62<?= $daftar['no_hp'] ?>&text=Terima kasih telah mendaftar di <?= $setting['nama_sekolah'] ?>. Silahkan Login untuk melengkapi formulir pendaftaran dengan username *<?= $daftar['nisn'] ?>%2A%0Apassword%20%3A%20%2A<?= $daftar['password'] ?>%2A">
                                            <?= $daftar['no_hp'] ?></a>
                                    </td>
                                   
                                    <td>
                                        <?php if ($daftar['status'] == 1) { ?>
                                            <span class="badge badge-success">Diterima</span>
                                        <?php } elseif ($daftar['status'] == 2) { ?>
                                            <span class="badge badge-danger">Dicadangkan </span>
                                        <?php } else { ?>
                                            <span class="badge badge-warning">Diverifikasi</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="detail siswa" href="?pg=ubahdaftar&id=<?= enkripsi($daftar['id_daftar']) ?>" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a>
                                        <!-- Button trigger modal -->
                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Cetak" href="mod_daftar/print_daftar.php?id=<?= enkripsi($daftar['id_daftar']) ?>" class="btn btn-sm btn-success"><i class="fas fa-print    "></i></a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-edit<?= $no ?>">
                                            <i class="fas fa-edit    "></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-nilai<?= $no ?>">
                                            <i class="fas fa-address-book    "></i>
                                        </button>
                                        <button data-id="<?= $daftar['id_daftar'] ?>" class="hapus btn-sm btn btn-danger"><i class="fas fa-trash    "></i></button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal-edit<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form id="form-edit<?= $no ?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Data</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                           
                                                            <input type="hidden" value="<?= $daftar['id_daftar'] ?>" name="id_daftar" class="form-control" required="">
															
															<div class="form-group">
															<label>NISN</label>
															<input type="text"  value="<?= $daftar['nisn'] ?>" name="nisn" class="form-control nisn" ="">
															</div>
															<div class="form-group">
															<label>Nama Siswa</label>
															<input type="text"  value="<?= $daftar['nama'] ?>" name="nama" class="form-control" ="">
															</div>

														   <div class="form-group">
																<label>Tempat Lahir</label>
															<input type="text"  value="<?= $daftar['tempat_lahir'] ?>" name="tempat_lahir" class="form-control" ="">
															</div>
															<div class="form-group">
																<label>Tanggal Lahir</label>
															<input type="date"  value="<?= $daftar['tgl_lahir'] ?>" name="tgl_lahir" class="form-control" ="">
															</div>
															
															<div class="form-group">
															<label>Sekolah Asal</label>
															<input type="text"  value="<?= $daftar['asal_sekolah'] ?>" name="asal" class="form-control" ="">
															</div>
															<div class="form-group">
															<label>NPSN Sekolah</label>
															<input type="text"  value="<?= $daftar['npsn_asal'] ?>" name="npsn_asal" class="form-control" ="">
															</div>
															<div class="form-group">
															<label>No HP</label>
															<input type="number"  value="<?= $daftar['no_hp'] ?>" name="no_hp" class="form-control" ="">
															</div>
															
                                                            <div class="form-group">
                                                                <div class="control-label">Pilih Status</div>
                                                                <div class="custom-switches-stacked mt-2">
                                                                    <label class="custom-switch">
                                                                        <input type="radio" name="status" value="0" class="custom-switch-input" checked>
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span class="custom-switch-description">Diverifikasi</span>
                                                                    </label>
                                                                    <label class="custom-switch">
                                                                        <input type="radio" name="status" value="1" class="custom-switch-input">
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span class="custom-switch-description">Diterima</span>
                                                                    </label>
                                                                    <label class="custom-switch">
                                                                        <input type="radio" name="status" value="2" class="custom-switch-input">
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span class="custom-switch-description">Dicadangkan</span>
                                                                    </label>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="modal-nilai<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form id="form-nilai<?= $no ?>" name="form-nilai">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">INPUT NILAI RAPOR</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                           
                                                            <input type="hidden" value="<?= $daftar['id_daftar'] ?>" name="id_daftar" class="form-control" required="">
															
                                                            <div class="form-group">
															<label style="color: blue;font-weight: bold;">SEMESTER 1</label>
															<input type="text"  value="<?= $daftar['bin1'] ?>" id="bin1" name="bin1" class="form-control" ="" placeholder="BAHASA INDONESIA" >
                                                            <input type="text"  value="<?= $daftar['mat1'] ?>" id="mat1" name="mat1" class="form-control" ="" placeholder="MATEMATIKA" >
                                                            <input type="text"  value="<?= $daftar['ipa1'] ?>" id="ipa1" name="ipa1" class="form-control" ="" placeholder="IPA" >
                                                            <input type="text"  value="<?= $daftar['big1'] ?>" id="big1" name="big1" class="form-control" ="" placeholder="BAHASA INGGRIS" >
															</div>
                                                            <div class="form-group">
															<label style="color: blue;font-weight: bold;">SEMESTER 2</label>
															<input type="text"  value="<?= $daftar['bin2'] ?>" id="bin2" name="bin2" class="form-control" ="" placeholder="BAHASA INDONESIA">
                                                            <input type="text"  value="<?= $daftar['mat2'] ?>" id="mat2" name="mat2" class="form-control" ="" placeholder="MATEMATIKA">
                                                            <input type="text"  value="<?= $daftar['ipa2'] ?>" id="ipa2" name="ipa2" class="form-control" ="" placeholder="IPA">
                                                            <input type="text"  value="<?= $daftar['big2'] ?>" id="big2" name="big2" class="form-control" ="" placeholder="BAHASA INGGRIS">
															</div>
                                                            <div class="form-group">
															<label style="color: blue;font-weight: bold;">SEMESTER 3</label>
															<input type="text"  value="<?= $daftar['bin3'] ?>" id="bin3" name="bin3" class="form-control" ="" placeholder="BAHASA INDONESIA">
                                                            <input type="text"  value="<?= $daftar['mat3'] ?>" id="mat3" name="mat3" class="form-control" ="" placeholder="MATEMATIKA">
                                                            <input type="text"  value="<?= $daftar['ipa3'] ?>" id="ipa3" name="ipa3" class="form-control" ="" placeholder="IPA">
                                                            <input type="text"  value="<?= $daftar['big3'] ?>" id="big3" name="big3" class="form-control" ="" placeholder="BAHASA INGGRIS">
															</div>
                                                            <div class="form-group">
															<label style="color: blue;font-weight: bold;">SEMESTER 4</label>
															<input type="text"  value="<?= $daftar['bin4'] ?>" id="bin4" name="bin4" class="form-control" ="" placeholder="BAHASA INDONESIA">
                                                            <input type="text"  value="<?= $daftar['mat4'] ?>" id="mat4" name="mat4" class="form-control" ="" placeholder="MATEMATIKA">
                                                            <input type="text"  value="<?= $daftar['ipa4'] ?>" id="ipa4" name="ipa4" class="form-control" ="" placeholder="IPA">
                                                            <input type="text"  value="<?= $daftar['big4'] ?>" id="big4" name="big4" class="form-control" ="" placeholder="BAHASA INGGRIS">
															</div>
                                                            <div class="form-group">
															<label style="color: blue;font-weight: bold;">SEMESTER 5</label>
															<input type="text"  value="<?= $daftar['bin5'] ?>" id="bin5" name="bin5" class="form-control" ="" placeholder="BAHASA INDONESIA">
                                                            <input type="text"  value="<?= $daftar['mat5'] ?>" id="mat5" name="mat5" class="form-control" ="" placeholder="MATEMATIKA">
                                                            <input type="text"  value="<?= $daftar['ipa5'] ?>" id="ipa5" name="ipa5" class="form-control" ="" placeholder="IPA">
                                                            <input type="text"  value="<?= $daftar['big5'] ?>" id="big5" name="big5" class="form-control" ="" placeholder="BAHASA INGGRIS">
															</div>
                                                            <!--<div class="form-group">
															<label style="color: blue;font-weight: bold;">JUMLAH</label>
															<input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah" readonly="">
															</div>-->


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                                <script>
                                    $('#form-edit<?= $no ?>').submit(function(e) {
                                        e.preventDefault();
                                        $.ajax({
                                            type: 'POST',
                                            url: 'mod_daftar/crud_daftar.php?pg=status',
                                            data: $(this).serialize(),
                                            success: function(data) {

                                                iziToast.success({
                                                    title: 'OKee!',
                                                    message: 'Status Berhasil diubah',
                                                    position: 'topRight'
                                                });
                                                setTimeout(function() {
                                                    window.location.reload();
                                                }, 2000);
                                                $('#modal-edit<?= $no ?>').modal('hide');
                                                //$('#bodyreset').load(location.href + ' #bodyreset');
                                            }
                                        });
                                        return false;
                                    });
                                </script>
                                <script>
                                    $('#form-nilai<?= $no ?>').submit(function(e) {
                                        e.preventDefault();
                                        $.ajax({
                                            type: 'POST',
                                            url: 'mod_daftar/crud_daftar.php?pg=nilai',
                                            data: $(this).serialize(),
                                            success: function(data) {

                                                iziToast.success({
                                                    title: 'OKee!',
                                                    message: 'Nilai Berhasil ditambah',
                                                    position: 'topRight'
                                                });
                                                setTimeout(function() {
                                                    window.location.reload();
                                                }, 2000);
                                                $('#modal-edit<?= $no ?>').modal('hide');
                                                //$('#bodyreset').load(location.href + ' #bodyreset');
                                            }
                                        });
                                        return false;
                                    });
                                </script>
                            <?php }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
 //IMPORT FILE PENDUKUNG 
    $('#form-import').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_siswa/crud_siswa.php?pg=import2',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                $('#importdata').modal('hide');
                iziToast.success({
                    title: 'Mantap!',
                    message: data,
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
    var cleaveI = new Cleave('.nisn', {

        blocks: [10]

    });
    var cleaveI = new Cleave('.nohp', {
        blocks: [4, 4, 4, 5]
    });
    $('#form-tambah').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'mod_daftar/crud_daftar.php?pg=tambah',
            data: $(this).serialize(),
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Mantap!',
                    message: 'data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
                $('#tambahdata').modal('hide');
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });

    $('#table-1').on('click', '.hapus', function() {
        var id = $(this).data('id');
        console.log(id);
        swal({
            title: 'Are you sure?',
            text: 'Akan menghapus data ini!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_daftar/crud_daftar.php?pg=hapus',
                    method: "POST",
                    data: 'id_daftar=' + id,
                    success: function(data) {
                        iziToast.error({
                            title: 'Horee!',
                            message: 'Data Berhasil dihapus',
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }
        })

    });
</script>
<script>
$('#form-konfirmasi').submit(function(e) {
            e.preventDefault();
        swal({
            title: 'Apa kamu yakin ?',
            text: 'Akan Menghapus data anda ?',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_daftar/crud_daftar.php?pg=konfirmasi',
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(data) {
                        iziToast.success({
                            title: 'Terimakasih!',
                            message: 'Data Berhasil di Hapus',
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    }
                });
            }
        })

    });
</script>
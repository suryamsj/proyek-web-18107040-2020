<?php
include_once("controller/Mahasiswa.php");

$jurusan = Index("SELECT * FROM jurusan");
$fakultas = Index("SELECT * FROM fakultas");

if (isset($_POST["tambah"])) {
    if (Create($_POST) > 0) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data berhasil masuk kedalam database',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        }).then(function() {
            window.location.href = 'index.php?halaman=datamhs';
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Data gagal masuk kedalam database',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        }).then(function() {
            window.location.href = 'index.php?halaman=datamhs';
        });
        </script>";
    }
}
?>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Form Tambah Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" placeholder="18107040" name="nim" required>
                        </div>
                        <div class="form-group">
                            <label for="nm_mahasiswa">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nm_mahasiswa" placeholder="Muhammad Surya Jayadiprana" name="nm_mahasiswa" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tempat">Tempat</label>
                                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Surabaya" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date-input">Tanggal Lahir</label>
                                <input type="text" class="form-control" id="date-input" name="tanggal" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="id_fakultas">Fakultas</label>
                                <select id="id_fakultas" class="form-control" name="id_fakultas" required>
                                    <option selected>Pilih Fakultas</option>
                                    <?php foreach ($fakultas as $data) : ?>
                                        <option value="<?= $data["id_fk"] ?>"><?= $data["nm_fk"] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="id_jurusan">Jurusan</label>
                                <select id="id_jurusan" class="form-control" name="id_jurusan" required>
                                    <option selected>Pilih Jurusan</option>
                                    <?php foreach ($jurusan as $data) : ?>
                                        <option value="<?= $data["id_jurusan"] ?>"><?= $data["nm_jurusan"] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ipk">IPK</label>
                            <input type="text" class="form-control" id="ipk" placeholder="4.0" name="ipk" required>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary" name="tambah"><i class="fas fa-save mr-2"></i>Simpan</button>
                            <button type="reset" class="btn btn-info"><i class="fas fa-sync-alt mr-2"></i>Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#date-input').dateDropper({
        format: 'Y-m-d',
        modal: true,
        large: true,
        theme: 'leaf',
    });
</script>
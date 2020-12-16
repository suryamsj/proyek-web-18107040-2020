<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Table Data Dosen
                    <div class="float-right">
                        <a href="#" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Data
                            Dosen</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="mahasiswa">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama Dosen</th>
                                    <th>Tempat & Tanggal Lahir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot class="bg-dark text-white">
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama Dosen</th>
                                    <th>Tempat & Tanggal Lahir</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>123456</td>
                                    <td>Zhong Li</td>
                                    <td>Liyue, 12 April 1990</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Ubah</a>
                                        <a href="#" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#mahasiswa').DataTable();
    });
</script>
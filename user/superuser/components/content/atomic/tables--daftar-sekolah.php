<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <h2 class="card-title mr-auto">
                        Daftar Sekolah
                    </h2>
                    <button type="button" class="btn btn-outline-success btn-rounded mb-3" data-toggle="modal" data-target="#login-modal">
                        <i data-feather="plus" class="feather-icon"></i>
                        Tambah Data Baru
                    </button>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-stripped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th>Nama Sekolah</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $res->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td>
                                        <a href="view--detail-sekolah.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary btn-rounded">
                                            <i data-feather="eye" class="feather-icon"></i>
                                            Lihat
                                        </a>
                                        <a href="edit-sekolah.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-secondary">
                                            <i data-feather="edit" class="feather-icon"></i>
                                            Ubah
                                        </a>
                                        <a href="../../controller/delete-sekolah.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm">
                                            <i data-feather="trash" class="feather-icon"></i>
                                            Hapus
                                        </a>
                                    </td>
                                <?php
                            }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Data</h1>

    <!-- Pesan -->
    <?php if ($this->session->flashdata('sukses')) { ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('sukses') ?>
        </div>
    <?php } ?>

    <?php if ($this->session->flashdata('eror')) { ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('eror') ?>
        </div>
    <?php } ?>

    <div class="card shadow mb-4">
        <form action="<?= base_url('admin/update_data_user') ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data['id_admin'] ?>">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Pratinjau Foto</label>
                            <img src="<?= base_url('assets/img/profile/' . $data['image_admin']); ?>" class="rounded img-responsive" alt="Image Preview" width="100%" id="img-preview">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <label class="float-right">
                                <a href="#" data-toggle="tooltip" title="Klik untuk menghapus foto yang sudah dipilih" style="display:none" id="img-reset">
                                    <code class="text-right">Hapus Foto</code>
                                </a>
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-file-image"></i>
                                    </div>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="img-file">
                                    <label class="custom-file-label" id="img-name">Pilih Foto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="<?= $data['email_admin'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="name" value="<?= $data['name_admin'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Password <br />
                                        <small>Isikan password jika ingin mengganti password</small>
                                    </label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Aktif</label>
                                    <select name="is_active" class="form-control">
                                        <option value="1" <?php if ($data['is_active'] == 1) {
                                                                echo 'selected';
                                                            } ?>>Aktif</option>
                                        <option value="0" <?php if ($data['is_active'] == 0) {
                                                                echo 'selected';
                                                            } ?>>Nonaktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?php if ($this->ion_auth->is_admin()) : ?>
    <div class="row">
        <?php foreach ($info_box as $info) : ?>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-<?= $info->box ?>">
                    <div class="inner">
                        <h3><?= $info->total; ?></h3>
                        <p><?= $info->text; ?></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-<?= $info->icon ?>"></i>
                    </div>
                    <a href="<?= base_url() . strtolower($info->title); ?>" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php elseif ($this->ion_auth->in_group('Lecturer')) : ?>

    <div class="row">
        <div class="col-sm-4">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Informasi Akun</h3>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>Nama</th>
                        <td><?= $dosen->nama_dosen ?></td>
                    </tr>
                    <tr>
                        <th>NRP</th>
                        <td><?= $dosen->nip ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= $dosen->email ?></td>
                    </tr>
                    <tr>
                        <th>kelas</th>
                        <td><?= $dosen->nama_matkul ?></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

<?php else : ?>

    <div class="row">
        <div class="col-sm-4">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Informasi Akun</h3>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>NRP</th>
                        <td><?= $mahasiswa->nim ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td><?= $mahasiswa->nama ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><?= $mahasiswa->jenis_kelamin === 'M' ? "Male" : "Female"; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= $mahasiswa->email ?></td>
                    </tr>
                    <tr>
                        <th>Departemen</th>
                        <td><?= $mahasiswa->nama_jurusan ?></td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td><?= $mahasiswa->nama_kelas ?></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

<?php endif; ?>
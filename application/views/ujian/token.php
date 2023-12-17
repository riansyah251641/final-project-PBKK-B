<div class="callout callout-info">
    <h4>Aturan Ujian!</h4>
    <p>ini adalah ini dari roles di ujian, anda dapat memasukkan bebrapa setingan rules dibawah
        Final Project PBKK-B
    </p>
</div>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">kONFIRMASI dATA</h3>
    </div>
    <div class="box-body">
        <span id="id_ujian" data-key="<?= $encrypted_id ?>"></span>
        <div class="row">
            <div class="col-sm-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td><?= $mhs->nama ?></td>
                    </tr>
                    <tr>
                        <th>Dosen</th>
                        <td><?= $ujian->nama_dosen ?></td>
                    </tr>
                    <tr>
                        <th>Kelas/Departemen</th>
                        <td><?= $mhs->nama_kelas ?> / <?= $mhs->nama_jurusan ?></td>
                    </tr>
                    <tr>
                        <th>Nama Ujian</th>
                        <td><?= $ujian->nama_ujian ?></td>
                    </tr>
                    <tr>
                        <th>Jumlah Pertanyaan</th>
                        <td><?= $ujian->jumlah_soal ?></td>
                    </tr>
                    <tr>
                        <th>Waktu</th>
                        <td><?= $ujian->waktu ?> Menit</td>
                    </tr>
                    <tr>
                        <th>Keterlambatan</th>
                        <td>
                            <?= date('d M Y', strtotime($ujian->terlambat)) ?>
                            <?= date('h:i A', strtotime($ujian->terlambat)) ?>
                        </td>
                    </tr>
                    <tr>
                        <th style="vertical-align:middle">Token</th>
                        <td>
                            <input autocomplete="off" id="token" placeholder="Token" type="text" class="input-sm form-control">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <div class="box box-solid">
                    <div class="box-body pb-0">
                        <div class="callout callout-info">
                            <p>
                                The time to take the exam is when the "START" button is green.
                                waktu untuk memulai ujian adalah ketika menklick tombol hijau
                            </p>
                        </div>
                        <?php
                        $mulai = strtotime($ujian->tgl_mulai);
                        $terlambat = strtotime($ujian->terlambat);
                        $now = time();
                        if ($mulai > $now) :
                        ?>
                            <div class="callout callout-success">
                                <strong><i class="fa fa-clock-o"></i> Ujian akan mulai pada</strong>
                                <br>
                                <span class="countdown" data-time="<?= date('Y-m-d H:i:s', strtotime($ujian->tgl_mulai)) ?>">00 Hari, 00 Jam, 00 Menit, 00 detik</strong><br />
                            </div>
                        <?php elseif ($terlambat > $now) : ?>
                            <button id="btncek" data-id="<?= $ujian->id_ujian ?>" class="btn btn-success btn-lg mb-4">
                                <i class="fa fa-pencil"></i> Start
                            </button>
                            <div class="callout callout-danger">
                                <i class="fa fa-clock-o"></i> <strong class="countdown" data-time="<?= date('Y-m-d H:i:s', strtotime($ujian->terlambat)) ?>">00 Days, 00 Hours, 00 Minutes, 00 Seconds</strong><br />
                                waktu habis untuk proses tombol start
                            </div>
                        <?php else : ?>
                            <div class="callout callout-danger">
                                waktu habis untuk proses tombol <strong>"START"</strong>
                                Harap hubungi dosen Anda
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>assets/dist/js/app/ujian/token.js"></script>
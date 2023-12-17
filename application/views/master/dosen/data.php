<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Master <?= $subjudul ?></h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <div class="mt-2 mb-3">
            <a href="<?= base_url('dosen/add') ?>" class="btn btn-sm btn-flat bg-blue"><i class="fa fa-plus"></i> Add</a>
            <a href="<?= base_url('dosen/import') ?>" class="btn btn-sm btn-flat btn-success"><i class="fa fa-upload"></i> Import</a>
            <button type="button" onclick="reload_ajax()" class="btn btn-sm bg-maroon btn-flat btn-default"><i class="fa fa-refresh"></i> Reload</button>
            <div class="pull-right">
                <button onclick="bulk_delete()" class="btn btn-sm btn-flat btn-danger" type="button"><i class="fa fa-trash"></i> Delete</button>
            </div>
        </div>
        <?= form_open('dosen/delete', array('id' => 'bulk')); ?>
        <div class="table-responsive">
            <table id="dosen" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIP</th>
                        <th>Lecturer Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th width="100" class="text-center">Action</th>
                        <th width="100" class="text-center">
                            <input class="select_all" type="checkbox">
                        </th>
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                        <th>#</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Class</th>
                        <th>Dept</th>
                        <th width="100" class="text-center">Action</th>
                        <th width="100" class="text-center">
                            <input class="select_all" type="checkbox">
                        </th>
                    </tr>
                </tfoot> -->
            </table>
        </div>
        <?= form_close() ?>
    </div>
</div>

<script src="<?= base_url() ?>assets/dist/js/app/master/dosen/data.js"></script>
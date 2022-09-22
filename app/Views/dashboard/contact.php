<a href="" data-toggle="modal" data-target="#modalcontact<?php echo $customer['id_customer']; ?>" class="btn btn-success btn-sm my-2"><i class="fa fa-plus"></i></a>

<form action="<?php echo base_url('home/index') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <?php
    echo csrf_field();
    ?>
    <div class="modal fade" id="modalcontact">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create Contact</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3><?php echo $customer['nama_customer'] ?></h3>
                    <div class="form-group row">
                        <label class="col-3">ID CUSTOMER</label>
                        <div class="col-9">
                            <input type="text" name="id_customer" class="form-control" placeholder="ID CUSTOMER" value="<?php echo $customer['id_customer'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3">Nama Barang</label>
                        <div class="col-9">
                            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3">Nomor Telepon</label>
                        <div class="col-9">
                            <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
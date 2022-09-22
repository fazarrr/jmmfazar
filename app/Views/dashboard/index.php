<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?= $title; ?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active"><?= $title; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><?= $title; ?></h3>
                                </div>

                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Nama Lengkap</th>
                                                <th>Alamat</th>
                                                <th>Harga 1</th>
                                                <th>Harga 2</th>
                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($customer as $customer) { ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $customer['nama_customer']; ?></td>
                                                    <td><?= $customer['alamat']; ?></td>
                                                    <td><?= $customer['harga_satu']; ?></td>
                                                    <?php if (!$customer['harga_dua'] == 0) : ?>
                                                        <td><?= $customer['harga_dua']; ?></td>
                                                    <?php else : ?>
                                                        <td></td>
                                                    <?php endif; ?>
                                                    <td><?= $customer['total']; ?></td>
                                                    <?php if ($title == 'All Data Customer') : ?>
                                                        <td>

                                                            <a href="<?php echo base_url('home/edit/' . $customer['id_customer']) ?>" class="btn btn-primary btn-sm my-2"><i class="fa fa-edit"></i></a>
                                                            <a href="<?php echo base_url('home/delete/' . $customer['id_customer']) ?>" class="btn btn-danger btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
                                                            <?php include('contact.php'); ?>
                                                        </td>
                                                    <?php else : ?>
                                                        <td>
                                                            <p>
                                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalgambar" <?php echo $customer['id_customer']; ?>>
                                                                    <i class="fa fa-eye"></i>
                                                                </button>
                                                            </p>
                                                            <!-- <a href="<?php echo base_url('customer/edit/' . $customer['id_customer']) ?>" class="btn btn-success btn-sm my-2" data-toggle="modal" data-target="#modal-detail"><i class="fa fa-eye"></i></a> -->
                                                        </td>
                                                    <?php endif; ?>
                                                </tr>

                                                <!-- view contact modal -->
                                                <div class="modal fade" id="modalgambar<?php echo $customer['id_customer']; ?>">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"><?= $customer['nama_customer']; ?></h4>
                                                                <h4 class="modal-title"><?= $customer['id_customer']; ?></h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php foreach ($customer as $customer) { ?>
                                                                    <h4 class="modal-title"><?php isset($customer['keterangan']) ?></h4>
                                                                    <h4 class="modal-title"><?= isset($customer['nomor_telepon']) ?></h4>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- end view foto modal -->
                                            <?php $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </div>
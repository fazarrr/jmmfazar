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
                                                    <td>
                                                        <a href="<?php echo base_url('customer/edit/' . $customer['id_customer']) ?>" class="btn btn-success btn-sm my-2"><i class="fa fa-eye"></i></a>
                                                        <a href="<?php echo base_url('customer/delete/' . $customer['id_customer']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
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
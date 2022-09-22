<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Create Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create New Data Customer</h3>
                        </div>


                        <form action="<?php echo base_url('home/create') ?>" method="post">
                            <?php
                            echo csrf_field();
                            ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama_customer" class="form-control" id="nama" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="hargaSatuUntukDihitung">Harga 1</label>
                                    <input type="number" name="harga_satu" class="form-control" id="hargaSatuUntukDihitung" placeholder="Harga 1" value=0 required>
                                </div>
                                <div class="form-group">
                                    <label for="hargaDuaUntukDihitung">Harga 2</label>
                                    <input type="number" name="harga_dua" class="form-control" id="hargaDuaUntukDihitung" placeholder="Harga 2" value=0>
                                </div>
                                <div class="form-group">
                                    <label for="totalUntukdihitung">Total</label>
                                    <input type="number" name="total" class="form-control" id="totalUntukdihitung" placeholder="Total" readonly="" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>


                <div class="col-md-6">
                </div>

            </div>

        </div>
    </section>

</div>
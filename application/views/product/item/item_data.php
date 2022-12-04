<section class="content-header">
      <h1>Barang Jual
        <small>Data Barang </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Daftar Barang </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">

            <div class="box-header">
                <h3 class="box-title">Tambah barang jual</h3>
                <div class="pull-right">
                    <a href="<?=site_url('item/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i>  Create
                    </a>
                </div>
            </div>

            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>

                        </tr>

                    </thead>

                    <tbody>
                        <?php $no= 1;
                        foreach($row->result() as $key => $data){ ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data->barcode?></td>
                            <td><?=$data->name?></td>
                            <td><?=$data->category_name?></td>
                            <td><?=$data->unit_name?></td>
                            <td><?=$data->price?></td>
                            <td><?=$data->stock?></td>
                            <td clas="text-center" width="160px" > 
                                <a href="<?=site_url('item/del/'.$data->item_id)?>" onclick="return confirm('Anda yakin?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i>Delete
                                </a>
                            </td>
                        </tr>
                        <?php
                        } ?>
                    </tbody>

                <table>
            </div>

        </div>

    </section>
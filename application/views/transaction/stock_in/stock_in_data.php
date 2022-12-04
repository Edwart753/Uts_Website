<section class="content-header">
      <h1>Stock In 
        <small>Memasukan Barang Masuk </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li>Transaction</li>
        <li class="active">stock in</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">

            <div class="box-header">
                <h3 class="box-title">Barang Masuk Dari Agen</h3>
                <div class="pull-right">
                    <a href="<?=site_url('stock/in/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i>  Add Stock
                    </a>
                </div>
            </div>

            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Barcode</th>
                            <th>Product Item</th>
                            <th>Jumlah</th>
                            <th>Date</th>
                            <th>Actions</th>

                        </tr>

                    </thead>

                    <tbody>
                    <?php $no= 1;
                        foreach($row as $key => $data){ ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data->barcode?></td>
                            <td><?=$data->item_name?></td>
                            <td><?=$data->qty?></td>
                            <td><?=$data->date?></td>
                            <td clas="text-center" width="160px" > 
                                <a href="<?=site_url('stock/in/del/'.$data->stock_id.'/' .$data->item_id)?>" onclick="return confirm('Anda yakin?')" class="btn btn-danger btn-xs">
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
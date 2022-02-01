<div class="row" style="margin-bottom: 5px;">
    <div class="col-lg-12">
        <a href="<?php echo base_url('administrator/barang/tambah');?>" class="btn btn-primary">
            Tambah baru
        </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo $title_table;?>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" style="overflow-x:auto;">
                <table width="100%" class="dataTables table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Uom</th>
                            <th>Keterangan</th>
                            <th>Stok</th>
                            <th>Action</th>                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($getbarang == 0){
                        ?>
                        <tr>
                            <td colspan="6" style="text-align: center;"><b>Data Not Available</b></td>
                        </tr>
                        <?php
                            }else{
                            $no = 1;
                            foreach ($getbarang as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo  $value->kd_brg; ?></td>
                            <td><?php echo  $value->uom; ?></td>
                            <td><?php echo  $value->ket; ?></td>
                            <td><?php echo  $value->stok; ?></td>
                            <td>
                              <a href="<?php echo base_url('administrator/barang/update/'); echo  $value->kd_brg;?>" class="btn btn-warning">Update</a>
                              <a href="<?php echo base_url('administrator/barang/3/'); echo  $value->kd_brg;?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php $no++;}}?>
                     </tbody>
                </table>             
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
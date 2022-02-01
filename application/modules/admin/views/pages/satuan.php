<div class="row" style="margin-bottom: 5px;">
    <div class="col-lg-12">
        <a href="<?php echo base_url('administrator/satuan/tambah');?>" class="btn btn-primary">
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
                            <th>Idx</th>
                            <th>Uom</th> 
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($getsatuan == 0){
                        ?>
                        <tr>
                            <td colspan="4" style="text-align: center;"><b>Data Not Available</b></td>
                        </tr>
                        <?php
                            }else{
                            $no = 1;
                            foreach ($getsatuan as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo  $value->idx; ?></td>
                            <td><?php echo  $value->uom; ?></td>
                            <td>
                            <a href="<?php echo base_url('administrator/satuan/update/'); echo  $value->idx;?>" class="btn btn-warning">Update</a>
                            <a href="<?php echo base_url('administrator/satuan/3/'); echo  $value->idx;?>" class="btn btn-danger">Delete</a>
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
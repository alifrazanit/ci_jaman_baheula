<div class="row" style="margin-bottom: 5px;">
    <div class="col-lg-12">
        <a href="<?php echo base_url('administrator/member/tambah');?>" class="btn btn-primary">
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
                            <th>Kode Member</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>No. Telp</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Tanggal Aktivasi</th>
                            <th>Nonaktif</th>  
                            <th>Action</th>                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($getmember == 0){
                        ?>
                        <tr>
                            <td colspan="11" style="text-align: center;"><b>Data Not Available</b></td>
                        </tr>
                        <?php
                          }else{
                            $no = 1;
                            foreach ($getmember as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo  $value->kd_member; ?></td>
                            <td><?php echo  $value->nama; ?></td>
                            <td><?php echo  $value->alamat; ?></td>
                            <td><?php echo  $value->jk; ?></td>
                            <td><?php echo  $value->no_telp; ?></td>
                            <td><?php echo  $value->username; ?></td>
                            <td><?php echo  $value->aktif; ?></td>
                            <td><?php echo  $value->act_time; ?></td>
                            <td><?php echo  $value->diss_time; ?></td>
                            <td>
                                <a href="<?php echo base_url('administrator/member/update/'); echo  $value->kd_member;?>" class="btn btn-warning">Update</a>
                                <a href="<?php echo base_url('administrator/member/3/'); echo  $value->kd_member;?>" class="btn btn-danger">Delete</a>
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
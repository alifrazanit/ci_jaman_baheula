<?php
 foreach ($getmember as $key => $value) {
     $kd_member = $value->kd_member;
     $nama = $value->nama;
     $alamat = $value->alamat;
     $jk = $value->jk;
     $username = $value->username; 
     $password = $value->password; 
     $aktif = $value->aktif; 
     $act_time = $value->act_time; 
     $no_telp =$value->no_telp; 
     $diss_time = $value->diss_time;  
    } 
?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php echo $title_table;?>
			</div>
			<div class="panel-body">
				<div class="row">
            		<div class="col-lg-12">
            			<?php echo form_open(base_url('administrator/member/2/'.$kd_member), 'role="form"');?>
						<div class="form-group">
							<label>Nama</label>
							<input class="form-control" type="text" value="<?= $nama;?>" name="nama">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" rows="3" name="alamat">
								<?= $alamat;?>
							</textarea>
						</div>
						<div class="form-group">
						<label>Jenis Kelamin</label>
						<?php 
							if($jk == "L"){
						?>
						<div class="radio">
						 <label>
                            <input type="radio" name="jk" value="L" checked="checked">Laki-laki
                        </label>
                        </div>
                        <div class="radio">
                         <label>
                            <input type="radio" name="jk" value="P">Perempuan
                        </label>
						</div>
						<?php
							}else if($jk == "P"){
						?>
						<div class="radio">
						 <label>
                            <input type="radio" name="jk" value="L">Laki-laki
                        </label>
                        </div>
                        <div class="radio">
                         <label>
                            <input type="radio" name="jk" value="P"  checked="checked">Perempuan
                        </label>
						</div>
						<?php
							}
						?>
                    	</div>
                    	<div class="form-group">
						<label>Aktivasi</label>
						<?php
							if($aktif == "Y"){
						?>
						<div class="radio">
							<label>
								<input type="radio" name="aktivasi" value="Y" checked="checked">Aktif
							</label>
						</div>
						<div class="radio">
							<label>
							<input type="radio" name="aktivasi" value="N">Tidak Aktif
							</label>
						</div>
						<?php	
							}else if($aktif == "N"){
						?>
						<div class="radio">
							<label>
								<input type="radio" name="aktivasi" value="Y">Aktif
							</label>
						</div>
						<div class="radio">
							<label>
							<input type="radio" name="aktivasi" value="N" checked="checked">Tidak Aktif
							</label>
						</div>
						<?php
							}
						?>
						</div>
                		<div class="form-group">
							<label>No. Telp</label>
							<input class="form-control" type="text" value="<?= $no_telp;?>" name="notelp">
						</div>
					<div class="form-group">
						<label>Username</label>
						<input class="form-control" type="text" value="<?= $username;?>" name="username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" value="<?= $password;?>" name="password">
					</div>	
                   <button type="submit" class="btn btn-warning">Update</button> 				
                        </form>            
            		</div>
            	</div>             
            </div>
		</div>
	</div>
</div>
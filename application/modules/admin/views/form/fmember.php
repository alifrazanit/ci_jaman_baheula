<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php echo $title_table;?>
			</div>
			<div class="panel-body">
				<div class="row">
            		<div class="col-lg-12">
            			<?php echo form_open(base_url('administrator/member/1/save'), 'role="form"');?>
						<div class="form-group">
							<label>Nama</label>
							<input class="form-control" type="text" placeholder="Enter text" name="nama">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" rows="3" name="alamat"></textarea>
						</div>
						<div class="form-group">
                        <label>Jenis Kelamin</label>
                       	<div class="radio">
                        <label>
                            <input type="radio" name="jk" value="L" checked>Laki-laki
                        </label>
                   		</div>
                    	<div class="radio">
                        <label>
                            <input type="radio" name="jk" value="P">Perempuan
                        </label>
                    	</div>
                    	</div>
                		<div class="form-group">
							<label>No. Telp</label>
							<input class="form-control" type="text" placeholder="Enter number" name="notelp">
						</div>
					<div class="form-group">
						<label>Username</label>
						<input class="form-control" type="text" placeholder="Enter text" name="username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" placeholder="Enter text" name="password">
					</div>	
                   <button type="submit" class="btn btn-primary">Save</button> 				
                        </form>            
            		</div>
            	</div>             
            </div>
		</div>
	</div>
</div>
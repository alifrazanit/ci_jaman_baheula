<?php
 foreach ($getbarang as $key => $value) {
     $kd_brg = $value->kd_brg;
     $uom = $value->uom;
     $ket = $value->ket;
     $stok = $value->stok;
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
            			<?php echo form_open(base_url('administrator/barang/2/'.$kd_brg), 'role="form"');?>
						<div class="form-group">
							<label>Keterangan Barang</label>
							<textarea class="form-control" rows="3" name="ket">
								<?= $ket;?>
							</textarea>
						</div>
                       	<div class="form-group">
                           	<label>Unit Of Measurement</label>
                            <select class="form-control" name="uom">
		                    <?php foreach($datauom as $key => $value){
		                    	if($value->uom == $uom){
		                    ?>
		                    	<option selected="selected" value="<?php echo $value->uom; ?>">
		                    		<?php echo $value->uom; ?>
		                    	</option>
		                    <?php 
		                		}else{
		                    ?>
		                    	<option value="<?php echo $value->uom; ?>">
		                    		<?php echo $value->uom; ?>
		                    	</option>
		                    <?php 
		                    	} 
		                    }
		                    ?>
                    </select>
                        </div>
                		<div class="form-group">
							<label>Stok</label>
							<input class="form-control" type="text" placeholder="Enter number" name="stok" value="<?=$stok;?>">
						</div>
                   <button type="submit" class="btn btn-warning">Update</button> 				
                        </form>            
            		</div>
            	</div>             
            </div>
		</div>
	</div>
</div>
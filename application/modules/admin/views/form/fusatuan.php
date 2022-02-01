<?php
 foreach ($getsatuan as $key => $value) {
     $idx = $value->idx;
     $uom = $value->uom;
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
            			<?php echo form_open(base_url('administrator/satuan/2/'.$idx), 'role="form"');?>
						<div class="form-group">
							<label>Satuan</label>
							<input class="form-control" type="text" placeholder="Enter text" name="uom" value="<?= $uom;?>">
						</div>
                   		<button type="submit" class="btn btn-warning">Update</button>		
                        </form>            
            		</div>
            	</div>             
            </div>
		</div>
	</div>
</div>
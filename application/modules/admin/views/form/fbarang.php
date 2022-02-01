<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php echo $title_table;?>
			</div>
			<div class="panel-body">
				<div class="row">
            		<div class="col-lg-12">
            			<?php echo form_open(base_url('administrator/barang/1/save'), 'role="form"');?>
						<div class="form-group">
							<label>Keterangan Barang</label>
							<textarea class="form-control" rows="3" name="ket"></textarea>
						</div>
                       	<div class="form-group">
                           	<label>Unit Of Measurement</label>
                            <select class="form-control" name="uom">
		                    <?php foreach($datauom as $key => $value){ ?>
		                       <option value="<?php echo $value->uom; ?>"><?php echo $value->uom; ?></option>
		                    <?php }?>
                    </select>
                        </div>
                		<div class="form-group">
							<label>Stok</label>
							<input class="form-control" type="text" placeholder="Enter number" name="stok">
						</div>
                   <button type="submit" class="btn btn-primary">Save</button> 				
                        </form>            
            		</div>
            	</div>             
            </div>
		</div>
	</div>
</div>
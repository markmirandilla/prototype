<link type="text/css" rel="stylesheet" href="/assets/grocery_crud/themes/flexigrid/css/flexigrid.css" />
<div class="flexigrid crud-form" style="width: 100%;">
	<div class="mDiv">
		<div class="ftitle">
			<div class="ftitle-left">
				Account Contract
			</div>		
			<div class="clear"></div>				
		</div>
		<div title="Minimize/Maximize" class="ptogtitle">
			<span></span>
		</div>	
	</div>
	<div id="main-table-box">
		<div class="form-div">
			<div class="form-field-box odd" id="account_name_field_box">
				<div class="form-display-as-box" id="account_name_display_as_box">
					Name  :
				</div>
				<div class="form-input-box" id="account_name_input_box">
					<input id="field-account_name" name="account_name" type="text" value="<?php echo $account->account_name; ?>" >				
				</div>
				<div class="clear"></div>	
			</div>
			
			<div class="form-field-box even" id="account_address_field_box">
				<div class="form-display-as-box" id="account_address_display_as_box">
					Address  :
				</div>
				<div class="form-input-box" id="account_address_input_box">
					<input id="field-account_address" name="account_address" type="text" value="<?php echo $account->account_address; ?>" maxlength="255">				
				</div>
				<div class="clear"></div>	
			</div>		
		</div>
	</div>
	<?php $this->load->view('/default/default_grid',$output); ?>
</div>
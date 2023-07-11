<?php $this->load->view('header'); ?>
<?php echo $this->load->view('left_panel'); ?>
<?php echo $this->load->view('top_panel'); ?>
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>View/Edit Supplier Info</h3>
			</div>
		</div>

		<div class="clearfix"></div>     
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br/>
	
		
		<?php if(!empty($supplier_info)) {?>
		<div class="col-sm-12">
		<form class="form-horizontal" action="<?php echo site_url();?>/supplier/change_sup_password/<?php echo $supplier_id; ?>" method="post">
			<fieldset>
            <?php
			  	if($status == '1')
				{
				?>
				<div class="alert alert-success">
				<button class="close" data-dismiss="alert" type="button">×</button>
					<strong>Success!</strong>
					 Supplier Password Successfully Reseted.
				</div>
				<?php 
				}
				if(!empty($errors))
				{
				?>
                <div class="alert alert-error">
				<button class="close" data-dismiss="alert" type="button">×</button>
					<strong>Error!</strong>
					<?php echo $errors;?>
				</div>
				 <?php
				}?>
												
            
             <?php if(validation_errors() != '') {?> 
              <div class="alert alert-error">
                <button class="close" data-dismiss="alert" type="button">×</button>
                <?php echo validation_errors(); ?>                               
              </div>
          <?php } ?> 
                                         
              <div class="form-group warning">
				<label class="col-sm-3 control-label" for="disabledInput">Email-Id</label>
				<div class="col-sm-6">
                 <div class="input-append">
				  <input class="form-control disabled" id="disabledInput" type="text" placeholder="<?php echo $supplier_info->supplier_email;?>" disabled="">
                 
				</div>
                </div>
			  </div>
               
               <div class="form-group">
				<label class="col-sm-3 control-label" for="focusedInput">New Password</label>

				<div class="col-sm-6">
					<div class="input-append">
				  <input class="form-control focused" id="focusedInput" type="password" name="password"  autocomplete="off" required />                                   
				</div>
				</div>
			  </div>
              
             <div class="form-group warning">
				<label class="col-sm-3 control-label" for="focusedInput">Confirm Password</label>

				<div class="col-sm-6">
					<div class="input-append">
				  <input class="form-control focused" id="focusedInput" type="password" name="passconf"  autocomplete="off" required />              
                  <span class="help-inline">(Must be same with New Password)</span>                     
				</div>
				</div>
			  </div>
              
			 <div class="ln_solid"></div>
                        <div class="form-group">
                        	<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				<button type="submit" class="btn btn-primary">Reset Password</button>
				<a href="<?php echo site_url();?>/supplier/view_sup_info/<?php echo $supplier_id; ?>" title="Click here to go back" data-rel="tooltip" class="btn btn-warning">Cancel</a>
			  </div>
			  </div>
               
			</fieldset>
		  </form>
		  </div>
		
		<?php }else{ ?>
		<div class="col-sm-12 alert alert-error">
			<button class="close" data-dismiss="alert" type="button">×</button>
			<strong>Error!</strong>
			No Data Found. Please try after some time...
		</div>
		<?php } ?>
	</div>
</div>
</div>
</div>
</div>
</div>
<?php echo $this->load->view('footer'); ?>

<?php $this->load->view('header'); ?>
 <?php  $this->load->view('left_panel'); ?>
 <!--<div class="mainpanel">-->
  <?php  $this->load->view('top_panel'); ?>
<style>

.progress-success.progress-striped .bar {
    background-color: #62C462;
    background-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress {
    height: 18px;
    margin-bottom: 18px;
    overflow: hidden;
    background-color: #F7F7F7;
    background-image: -moz-linear-gradient(center top , #F5F5F5, #F9F9F9);
    background-repeat: repeat-x;
    border-radius: 2px;
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1) inset;
}
.progress .bar {
    width: 0px;
    height: 18px;
    font-size: 12px;
    color: #FFF;
    text-align: center;
    text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
    background-color: #0E90D2;
    background-image: -moz-linear-gradient(center top , #149BDF, #0480BE);
    background-repeat: repeat-x;
    box-shadow: 0px -1px 0px rgba(0, 0, 0, 0.15) inset;
    box-sizing: border-box;
    transition: width 0.6s ease 0s;
}.progress.active .bar {
    animation: 2s linear 0s normal none infinite running progress-bar-stripes;
}.progress-success .bar {
    background-image: -moz-linear-gradient(center top , #62C462, #57A957);
    background-repeat: repeat-x;
    background-color: #5EB95E;
}
</style>


<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>airport Manager</h3>
              </div>
            </div>

            <div class="clearfix"></div>     
     <div class="row">

        

       <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
								<ul class="nav nav-tabs navbar-left nav-dark">                           
								<li class="active"><a href="#home2" data-toggle="tab"><strong>Airport List</strong></a></li>								
								</ul>	
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                       <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
    	   <div class="tab-content mb30">
          <div class="tab-pane active" id="home2">
		  <div class="table-responsive">
                                            <!--<table class="table" id="table5">-->
											<table  id="datatable1" class="table table-striped table-bordered">
											
											<thead>

                                              <tr>

                                              	  <th>SI.No</th>                             	

                                                  <th>Airport Name</th>

                                                  <th>Airport Code</th>

                                                  <th>Airport Country</th> 

                                                  <th>Updated DateTime</th>                                

                                                  <th>Status</th>

                                                  <th>Actions</th> 

                                              </tr>

                                          </thead>

											<tbody>

                                             <?php if(!empty($airport_list)) {?>

                          <?php for($i=0;$i<count($airport_list);$i++) {?>

							<tr>

                                <td><?php echo $i+1;?></td>

                            	<td><?php echo $airport_list[$i]->airport_city;?></td>

								<td class="center"><?php echo $airport_list[$i]->airport_code;?></td>

								<td class="center"><?php echo $airport_list[$i]->airport_country;?></td>             

                                <td class="center"><?php echo $airport_list[$i]->updated_datetime;?></td>

                               <td class="center">

                                <?php if($airport_list[$i]->status == 0) { ?>

									<span class="label label-inactive">Inactive</span>

                                 <?php } else if($airport_list[$i]->status == 1) {?>

                                 <span class="label label-success">Active</span>

                                 <?php } ?>

								</td>                                

								<td class="center">

									

                                    <a class="manageairportStatus" href="javascript:void(0);" title="Active" data-rel="tooltip" data-base-url="<?php echo site_url();?>/" data-value="1" data-airport-id="<?php echo $airport_list[$i]->airport_id;?>" >

										<span class="glyphicon glyphicon-ok-sign"></span>
									</a>

                                     <a class="manageairportStatus" href="javascript:void(0);" title="Inactive" data-rel="tooltip" data-base-url="<?php echo site_url();?>/" data-value="0" data-airport-id="<?php echo $airport_list[$i]->airport_id;?>" >

										<span class="glyphicon glyphicon-minus-sign"></span>			                                          

									</a>

                                    

									<!--<a class="btn btn-primary" href="<?php echo site_url();?>/home/edit_airport_value/<?php echo $airport_list[$i]->airport_id;?>" title="Edit airport" data-rel="tooltip">

										<i class="icon-edit icon-white"></i>			                                          

									</a>-->

								</td>

							</tr>

                         <?php } ?>

                     <?php } else { ?>

                        

                                             <div class="alert alert-error">

                                                <button class="close" data-dismiss="alert" type="button">×</button>

                                                    <strong>Error!</strong>

                                                    No Data Found. Please try after some time...

                                            </div>

                                          

                                         <?php } ?>

											</tbody>

										</table>


									</div>
        
	   </div>
	   <div class="tab-pane" id="profile2">
	   <div class="table-responsive">
	   <div class="alert  alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>airport Update!</strong>

                                            Please wait airport values are updating automatically. It will take around 2-3 minutes...

                                            <br /><br />                               
										<!-- <div class="progress">
											<div class="progress-bar progress-bar-success" data-transitiongoal="100"></div>
											</div> -->
											<div class="progress progress-striped progress-success active">

                                            <div class="bar" style="width: 100%;"></div>

                                        </div>
                 
	   
	   
	   
	  
                                            
                                       
										<div class="table-responsive">
											<table  id="datatable2" class="table table-striped table-bordered">
                                           <!-- <table class="table" id="table6">-->
                                          <thead>

                                              <tr> 

                                                  <th>SI.No</th>                             	

                                                  <th>airport Name</th>

                                                  <th>airport Code</th>

                                                  <th>Value (1 USD=)</th> 

                                                  <th>Updated DateTime</th>                                

                                                  <th>Status</th>

                                                  <th>Actions</th>

                                              </tr>

                                          </thead>   

                                          <tbody>

                                           <?php if(!empty($airport_list)) {?>

                          <?php for($i=0;$i<count($airport_list);$i++) {?>

							<tr>

                                <td><?php echo $i+1;?></td>

                            	<td><?php echo $airport_list[$i]->airport_name;?></td>

								<td class="center"><?php echo $airport_list[$i]->airport_code;?></td>

								<td class="center"><?php echo $airport_list[$i]->value;?></td>             

                                <td class="center"><?php echo $airport_list[$i]->updated_datetime;?></td>

                               <td class="center">

                                <?php if($airport_list[$i]->status == 0) { ?>

									<span class="label label-inactive">Inactive</span>

                                 <?php } else if($airport_list[$i]->status == 1) {?>

                                 <span class="label label-success">Active</span>

                                 <?php } ?>

								</td>                                

								<td class="center">

									

                                    <a class="manageairportStatus" href="javascript:void(0);" title="Active" data-rel="tooltip" data-base-url="<?php echo site_url();?>/" data-value="1" data-airport-id="<?php echo $airport_list[$i]->airport_id;?>" >

										<span class="glyphicon glyphicon-ok-sign"></span>	                                          

									</a>

                                     <a class="manageairportStatus" href="javascript:void(0);" title="Inactive" data-rel="tooltip" data-base-url="<?php echo site_url();?>/" data-value="0" data-airport-id="<?php echo $airport_list[$i]->airport_id;?>" >

										<span class="glyphicon glyphicon-minus-sign"></span>                                          

									</a>

                                    

									<!--<a class="btn btn-primary" href="<?php echo site_url();?>/home/edit_airport_value/<?php echo $airport_list[$i]->airport_id;?>" title="Edit airport" data-rel="tooltip">

										<i class="icon-edit icon-white"></i>			                                          

									</a>-->

								</td>

							</tr>

                         <?php } ?>

                     <?php } else { ?>

                        

                                             <div class="alert alert-error">

                                                <button class="close" data-dismiss="alert" type="button">×</button>

                                                    <strong>Error!</strong>

                                                    No Data Found. Please try after some time...

                                            </div>

                                          

                                         <?php } ?>

											</tbody>

										</table>

									</div>
									</div>
									</div>
	   </div>
     

    
    </div><!-- contentpanel -->
 <!-- end of content -->
</div>
</div>
</div>
</div>
</div>
</div>
 <?php  $this->load->view('footer'); ?>
 <script src="<?php echo base_url(); ?>public/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url(); ?>public/js/holder.js"></script>

<script src="<?php echo base_url(); ?>public/js/custom.js"></script>
<script>
  jQuery(document).ready(function(){
    
    jQuery("a[rel^='prettyPhoto']").prettyPhoto();
    
    //Replaces data-rel attribute to rel.
    //We use data-rel because of w3c validation issue
    jQuery('a[data-rel]').each(function() {
        jQuery(this).attr('rel', jQuery(this).data('rel'));
    });
    
  });
</script>




<script src="<?php echo base_url(); ?>public/js/jquery.datatables.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/chosen.jquery.min.js"></script>


<script>
  jQuery(document).ready(function() {
    
    jQuery('#table1').dataTable();
    
    jQuery('#table5').dataTable({
      "sPaginationType": "full_numbers"
    });
    jQuery('#table6').dataTable({
      "sPaginationType": "full_numbers"
    });
    // Chosen Select
    jQuery("select").chosen({
      'min-width': '100px',
      'white-space': 'nowrap',
      disable_search_threshold: 10
    });
    
    // Delete row in a table
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        
        return false;
    });
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });
  
  
  });
</script>

<script src="<?php echo base_url(); ?>public/js/admin/my-jquery.js"></script>




















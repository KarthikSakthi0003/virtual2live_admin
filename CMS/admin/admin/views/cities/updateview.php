<?php $this->load->view('header'); ?>
<?php echo $this->load->view('left_panel'); ?>
<div class="mainpanel">
  <?php echo $this->load->view('top_panel'); ?>
  <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap-wysihtml5.css" />
  <style>
  .paging_full_numbers {
    line-height: 22px;
    margin-top: 22px;
  }
  .mb30 {
    margin-bottom: 30px;
    /* height: 398px; */
    min-height: 400px;
  }
  </style>

  <div class="contentpanel">
    <form id="form_hotel" method="post" action="<?php echo site_url();?>/hotelduplication/update_hotel_name">
      <input type="text" class="form-control" id="searchName" value="" placeholder="Enter Hotel Name" name="hotelName"  required />
      <input type="hidden" name="id" value="">
      <input type="hidden" name="api" value="">
      <input type="hidden" name="adrress" value="">
      <button type="submit" id="update" >Update</button>
    </form>

  </div>

</div>


<link rel="stylesheet" href="http://tpdtechnosoft.com/TPD/tickmytrip/public/css/jquery-ui.css">



<?php echo $this->load->view('footer'); ?>

<script src="<?php echo base_url(); ?>public/js/jquery-1.10.2.min.js"></script>
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

<script src="js/custom.js"></script>
<script>
jQuery(document).ready(function() {

  jQuery('#table1').dataTable();

  jQuery('#table2').dataTable({
    "sPaginationType": "full_numbers"
  });
  jQuery('#table3').dataTable({
    "sPaginationType": "full_numbers"
  });
  jQuery('#table4').dataTable({
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

<script type="text/javascript" src="<?php echo base_url(); ?>public/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url();?>public/js/wysihtml5-0.3.0.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap-wysihtml5.js"></script>
<script src="<?php echo base_url();?>public/js/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url();?>public/js/ckeditor/adapters/jquery.js"></script>



<script>
jQuery(document).ready(function(){

  // HTML5 WYSIWYG Editor
  jQuery('#wysiwyg').wysihtml5({color: true,html:true});
  jQuery('#wysiwyg1').wysihtml5({color: true,html:true});
  jQuery('#wysiwyg2').wysihtml5({color: true,html:true});
  jQuery('#wysiwyg3').wysihtml5({color: true,html:true});
  jQuery('#wysiwyg4').wysihtml5({color: true,html:true});
  jQuery('#wysiwyg5').wysihtml5({color: true,html:true});
  jQuery('#wysiwyg6').wysihtml5({color: true,html:true});

  // CKEditor
  jQuery('#ckeditor').ckeditor();

});
</script>

</body>
</html>






</body>
</html>



<script src="<?php echo base_url();?>public/js/jquery-1.10.2.min.js"></script>


<script src="<?php echo base_url();?>public/js/jquery-ui.js"></script>


<!-- APARTMENT Destination AutoComplete List-->
<script>


var siteUrl = '<?php echo site_url();?>';
$(function() {






 $("#hotelName").autocomplete({
   source: siteUrl+"/cms/hotels_city_list",
   minLength: 2,
   autoFocus: true
 });


});
$('#submit').click(function(){
  $('form_hotel').show();
})

$(document).ready(function(){
  $city_name="";
  $("#submit").click(function(){$city_name = $("#hotelName").val();

    $city_name = $city_name;


    if($city_name!= ""){
     $('#searchName,#update').css({
      'visibility' : 'visible'
    });

   }else {alert("Enter City Name")}

   $("#searchName").autocomplete({
     source: siteUrl+"/cms/hotels_city_list_new/?city_name="+$city_name,
     minLength: 2,
     autoFocus: true,
     select: function( event, ui ) {

      $("input[name='id']").val(ui.item.id);
      $("input[name='api']").val(ui.item.api);
      $("input[name='adress']").val(ui.item.adress);


    }

  });



 });





//alert($city_name);








});

</script>


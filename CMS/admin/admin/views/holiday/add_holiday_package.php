<?php $this->load->view('header'); ?>
				
                        function __doPostBack(elm) {
                            var val = elm.options[elm.selectedIndex].value;
                            if(val == "1")
                            {
                                $('#inter').show();
                                //	$('#inter').addClass('required');
                                $('#dome').hide();
                            }
                            if(val == "2")
                            {	$('#inter').hide();
                                $('#dome').show();
                                //$('#dome').addClass('required');
                            }
							
							}    
                    </script>
	  			
                    </body>
                    </html>
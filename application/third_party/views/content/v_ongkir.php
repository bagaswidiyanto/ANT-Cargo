<div id="heading-breadcrumbs" class="no-mb">
            <div class="container"  data-animate="fadeInUp">
                <div class="row"><center>
                    <div class="heading">
                                <h3>Cek ONGKIR</h3>
                                <div data-animate="fadeInUp"> 
                           
                        </div>
                            </div>
                             <form action="" method="post"><br>
                            
                                <p class="min40"><h4>Masukan lokasi asal dan tujuan serta berat untuk mengetahui tarif pengiriman kami</h4></p><br>
                                	<div class="row">
                                        <div class="inputform">
                                            <input type="text" id="hint" name="asal" class="dropdown-header" required="required"/>
					    <input type="hidden" id="asal" name="dari" class="dropdown-header" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="inputform">
                                            <input type="text" id="hint2" name="ke" class="dropdown-header" required="required"/>
					    <input type="hidden" id="tujuan" name="tujuan" class="dropdown-header" />
                                        </div>
                                    </div>
                                     <div class="row weight">
                                        <div class="inputform">
                                            <input type="text" class="form-control weight" value="1" name ="berat" id="" placeholder="BERAT" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-lg btn-primary">CEK</button>
                                </div>
                                <!-- /.row -->
                            </form>
                            </center>
                </div>
            </div>
        </div>
        <!-- /.bar -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
   
        <style>
       .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        } 
	</style> 
        <script>
        
$( document ).ready(function() {
base_url = '<?=base_url();?>';
        $( "#hint" ).autocomplete({
                source: base_url+"autocomplete/search/"+$("#hint").val(),
                select: function (event, ui) {
                	event.preventDefault();
			        $("#hint").val(ui.item.label); // display the selected text
			        $("#asal").val(ui.item.value); // save selected id to hidden input
			    },
                focus: function(event, ui) {
			        event.preventDefault();
			        $("#hint").val(ui.item.label);
			    },
                
                minLength:3
                });

        	$( "#hint2" ).autocomplete({
                source: base_url+"autocomplete/search/"+$("#hint").val(),
                select: function (event, ui) {
                	event.preventDefault();
			        $("#hint2").val(ui.item.label); // display the selected text
			        $("#tujuan").val(ui.item.value); // save selected id to hidden input
			    },
                focus: function(event, ui) {
			        event.preventDefault();
			        $("#hint2").val(ui.item.label);
			    } ,   
                
                minLength:3
                });
	
  });
             </script>
             

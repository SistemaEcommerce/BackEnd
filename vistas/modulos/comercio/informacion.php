<?php

$comercio = ControladorComercio::ctrSeleccionarComercio();
?>

<div class="box box-info">
	
	<div class="box-header with-border">
		
		 <h3 class="box-title">INFORMACIÓN DEL COMERCIO</h3>

		 <div class="box-tools pull-right">

      		<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">

        		<i class="fa fa-minus"></i>

        	</button>

        </div>

	</div>

	<div class="box-body formularioInformacion">

		<!-- IMPUESTO -->

		<div class="form-group col-lg-6">
	      
	      <label for="usr">Impuesto:</label>
	      
	      <div class="input-group ">
	        
	        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
	        <input type="number" min="1" class="form-control cambioInformacion" id="impuesto" value="<?php echo $comercio["impuesto"]; ?>">

	      </div>
	    
	    </div>

	    <!-- ENVÍO NACIONAL -->

	    <div class="form-group col-lg-6">
      
	      <label for="usr">Envío local:</label>
	      
	      <div class="input-group">
	        
	        <span class="input-group-addon"><i class="ion ">S/.</i></span>
	        <input type="number" min="1" class="form-control cambioInformacion" id="envioLocal" value="<?php echo $comercio["envioLocal"]; ?>">

	      </div>
	    
	    </div>

	    <!-- ENVÍO INTERNACIONAL -->

     	<div class="form-group col-lg-6">
      
	      <label for="usr">Envío Nacional:</label>
	      
	      <div class="input-group">
	        
	        <span class="input-group-addon"><i class="ion ">S/.</i></span>
	        <input type="number" min="1" class="form-control cambioInformacion" id="envioNacional" value="<?php echo $comercio["envioNacional"]; ?>">

	      </div>
	    
	    </div>

	    <!-- TASA MÍNIMA NACIONAL -->

	    <div class="form-group col-lg-6">
      
	      <label for="usr">Tasa Mínima Local:</label>
	      
	      <div class="input-group">
	        
	        <span class="input-group-addon"><i class="ion ">S/.</i></span>
	        <input type="number" min="1" class="form-control cambioInformacion" id="tasaMinimaLocal" value="<?php echo $comercio["tasaMinimaLocal"]; ?>">

	      </div>
	    
	    </div>

		<!-- TASA MÍNIMA INTERNACIONAL -->

	 	<div class="form-group col-lg-6">
      
	      <label for="usr">Tasa Mínima Nacional:</label>
	      
	      <div class="input-group">
	        
	        <span class="input-group-addon"><i class="ion ">S/.</i></span>
	        <input type="number" min="1" class="form-control cambioInformacion" id="tasaMinimaNacional" value="<?php echo $comercio["tasaMinimaNacional"]; ?>">

	      </div>
	    
	    </div>

	    <!-- SELECCIONAR PAÍS -->

	    <div class="form-group col-lg-6">
      
	      <label for="sel1">Seleccione Region:</label>

	      <input type="hidden" id="codigoRegion" value="<?php echo $comercio["region"]; ?>">
	      
	      <select class="form-control cambioInformacion" id="seleccionarRegion">

	      	<option id="regionSeleccionado"></option>
	       
	      </select>

	    </div>

	    <!-- PASARELA DE PAGO PAYPAL -->

	    <div class="panel panel-default">
	    	
			<div class="panel-heading">

      			<h4 class="text-uppercase">Configuración Paypal</h4>

      		</div>
			
			<div class="panel-body">
				
				<div class="form-group row">
					
					 <div class="col-xs-3">
					 	
						<label>Modo:</label>

						 <?php

      					if($comercio["modoPaypal"] == "sandbox"){

      						echo '	<label class="checkbox">

      									<input class="cambioInformacion" type="radio" value="sandbox" name="modoPaypal" checked>  

      									Sandbox

      								</label>
              					
          							<label class="checkbox">

          								<input class="cambioInformacion" type="radio" value="live" name="modoPaypal"> 

          								Live

          							</label>';
      					}else{

      						echo '	<label class="checkbox">

      									<input class="cambioInformacion" type="radio" value="sandbox" name="modoPaypal">  

      									Sandbox

      								</label>
              					
          							<label class="checkbox">

          								<input class="cambioInformacion" type="radio" value="live" name="modoPaypal" checked> 

          								Live

          							</label>';


      					}

      					?>

					 </div>

					 <div class="col-xs-4">
            
            			<label for="comment">Cliente:</label>
      
            			<input type="text" class="form-control cambioInformacion" id="clienteIdPaypal" value="<?php echo $comercio["clienteIdPaypal"]; ?>">

          			</div>

      			 	<div class="col-xs-5">

		            	<label for="comment">Llave Secreta:</label>
		      
		            	<input type="text" class="form-control cambioInformacion" id="llaveSecretaPaypal" value="<?php echo $comercio["llaveSecretaPaypal"]; ?>">

		          </div>

				</div>

			</div>

	    </div>

	    <!-- PASARELA DE PAGO PAYU -->

		<div class="panel panel-default">
    
	  		<div class="panel-heading">

	      		<h4 class="text-uppercase">Configuración Payu Latam</h4>

	      	</div>

	      	<div class="panel-body">

	        	<div class="form-group row">
	          
	          		<div class="col-xs-3">

	          			<label>Modo:</label>
	            
				             <?php

				          if($comercio["modoPayu"] == "sandbox"){

				            echo '<label class="checkbox"><input class="cambioInformacion" type="radio" value="sandbox" name="modoPayu" checked>  Sandbox</label>
				              <label class="checkbox"><input class="cambioInformacion" type="radio" value="live" name="modoPayu"> Live</label>';
				          
				          }else{

				            echo '<label class="checkbox"><input class="cambioInformacion" type="radio" value="sandbox" name="modoPayu">  Sandbox</label>
				              <label class="checkbox"><input class="cambioInformacion" type="radio" value="live" name="modoPayu" checked> Live</label>';

				          }

				          ?>

	          		</div>
	          
		          	<div class="col-xs-3">
		            
		            	<label for="comment">Merchant Id:</label>
		      
		            	<input type="text" class="form-control cambioInformacion" id="merchantIdPayu" value="<?php echo $comercio["merchantIdPayu"]; ?>" >

		          	</div>
	          
	          		<div class="col-xs-3">

	        			<label for="comment">Account Id:</label>
	      
	            		<input type="text" class="form-control cambioInformacion" id="accountIdPayu" value="<?php echo $comercio["accountIdPayu"]; ?>">

	     		 	</div>

	      			<div class="col-xs-3">

	            		<label for="comment">Api Key:</label>
	      
	             		<input type="text" class="form-control cambioInformacion" id="apiKeyPayu" value="<?php echo $comercio["apiKeyPayu"]; ?>">

	          		</div>

	        	</div>

	      	</div>

    	</div>
		
	</div>

  	<div class="box-footer">
      
    	<button type="button" id="guardarInformacion" class="btn btn-primary pull-right">Guardar</button>
    
 	</div>

</div>
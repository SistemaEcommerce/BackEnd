<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

require_once "../controladores/cabeceras.controlador.php";
require_once "../modelos/cabeceras.modelo.php";

class TablaCategorias{

  /*=============================================
  MOSTRAR LA TABLA DE CATEGORÍAS
  =============================================*/ 

 	public function mostrarTabla(){	

 	$item = null;
 	$valor = null;

 	$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);	
	/* 	if (is_array($categorias)) {
		
		} */
 	$datosJson = '{
		 
		  "data": [ ';

	for($i = 0; $i < count($categorias); $i++){
	
			/*=============================================
			REVISAR ESTADO
			=============================================*/ 

			if( $categorias[$i]["estado"] == 0){
				
				$colorEstado = "btn-danger";
				$textoEstado = "Desactivado";
				$estadoCategoria = 1;

			}else{

				$colorEstado = "btn-success";
				$textoEstado = "Activado";
				$estadoCategoria = 0;

			}

		 	$estado = "<button class='btn ".$colorEstado." btn-xs btnActivar' estadoCategoria='".$estadoCategoria."' idCategoria='".$categorias[$i]["id"]."'>".$textoEstado."</button>";

		 	/*=============================================
			REVISAR IMAGEN PORTADA
			=============================================*/ 

			$item = "ruta";
			$valor = $categorias[$i]["ruta"];

			$cabeceras = ControladorCabeceras::ctrMostrarCabeceras($item, $valor);

			if(is_array($cabeceras) && $cabeceras["portada"] != ""){

				 $imgPortada = "<img class='img-thumbnail imgPortadaCategorias' src='".$cabeceras["portada"]."' width='100px'>";

			}else{

				$imgPortada = "<img class='img-thumbnail imgPortadaCategorias' src='vistas/img/cabeceras/default/default.jpg' width='100px'>";
			}

			/*=============================================
			REVISAR OFERTAS
			=============================================*/

			if(is_array($categorias) && $categorias[$i]["oferta"] != 0){

				if(is_array($categorias) && $categorias[$i]["precioOferta"] != 0){

					$tipoOferta = "PRECIO";
					$valorOferta = "S/. ".number_format($categorias[$i]["precioOferta"],2);

				}else{

					$tipoOferta = "DESCUENTO";
					$valorOferta = $categorias[$i]["descuentoOferta"]." %";

				}


			}else{

				$tipoOferta = "No tiene oferta";
				$valorOferta = 0;

			}

			if(is_array($categorias) && $categorias[$i]["imgOferta"] != ""){

				 $imgOfertas = "<img class='img-thumbnail imgOfertaCategorias' src='".$categorias[$i]["imgOferta"]."' width='100px'>";

			}else{

				$imgOfertas = "<img class='img-thumbnail imgOfertaCategorias' src='vistas/img/ofertas/default/default.jpg' width='100px'>";

			}

			/*=============================================
  			CREAR LAS ACCIONES
  			=============================================*/
	    
		    $acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarCategoria'idCategoria='".$categorias[$i]["id"]."' data-toggle='modal' data-target='#modalEditarCategoria'><i class='fa fa-pencil'></i></button> <button class='btn btn-danger btnEliminarCategoria' idCategoria='".$categorias[$i]["id"]."' imgPortada='" . (is_array($cabeceras) ? $cabeceras['portada'] : 'vistas/img/cabeceras/default/default.jpg') . "'rutaCabecera='".$categorias[$i]["ruta"]."' imgOferta='".$categorias[$i]["imgOferta"]."'><i class='fa fa-times'></i></button></div>";

/* 			$acciones5 = "<div class='btn-group'><button class='btn btn-warning btnEditarCategoria' idCategoria='".$categorias[$i]["id"]."' data-toggle='modal' data-target='#modalEditarCategoria'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarCategoria' idCategoria='".$categorias[$i]["id"]."' imgPortada='".$cabeceras["portada"]."'  rutaCabecera='".$categorias[$i]["ruta"]."' imgOferta='".$categorias[$i]["imgOferta"]."'><i class='fa fa-times'></i></button></div>";
 */				    
			$datosJson .= '[
                "' . ($i + 1) . '",
                "' . $categorias[$i]["categoria"] . '",
                "' . $categorias[$i]["ruta"] . '",
                "' . $estado . '",
                "' . (is_array($cabeceras) ? $cabeceras["descripcion"] : 'Sin descripción') . '",
                "' . (is_array($cabeceras) ? $cabeceras["palabrasClaves"] : 'Sin palabras clave') . '",
                "' . $imgPortada . '",
                "' . $tipoOferta . '",
                "' . $valorOferta . '",
                "' . $imgOfertas . '",
                "' . $categorias[$i]["finOferta"] . '",
                "' . $acciones . '"
                ],';

	}

	$datosJson = substr($datosJson, 0, -1);

	$datosJson.=  ']
		  
	}'; 

	echo $datosJson;


 	}


}

/*=============================================
ACTIVAR TABLA DE CATEGORÍAS
=============================================*/ 
$activar = new TablaCategorias();
$activar -> mostrarTabla();
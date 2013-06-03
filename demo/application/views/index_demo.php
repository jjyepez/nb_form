<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Demo de ns framework (ns_fw) 0.1</title>
	<link href="<?=base_url()?>/css/estilos_ns.css.php" type="text/css" rel="stylesheet"/>
</head>
<body>
	<?php
		if($_SERVER['SERVER_NAME']=="localhost"){
			$tabla='principal.denuncias';
		} else {
			$tabla='wpD_posts';
		}
		$parametros=array(
			'crear_formulario' 		=> array(true,'f_datos',array('parametros_html'=>"target='_self' method='POST' action=''")),
			'formulario_onsubmit'	=> 'alert(9);',
			
			'tabla_destino'                            => $tabla,
			'tabla_origen'                             => $tabla, // opcional ya que se puede pasar como parámetro directo ... ns

			'mostrar_titulo'                           => array(true,''),
			
			//'etiquetas_clases_adicionales'           => 'alinear-arriba alinear-derecha negrita ancho-40-porciento',
			'etiquetas_clases_adicionales'             => 'alinear-arriba ancho-50-porciento',
			//'mensajes_validacion_clases_adicionales' => 'alinear-izquierda',
			//'tooltips_clases_adicionales'            => 'alinear-derecha normal',
			'campos_clases_adicionales'                => 'alinear-arriba ancho-300',

			'mostrar_etiquetas'		=> true,
			'mostrar_placeholders'	=> true,
			'mostrar_dospuntos'		=> true,

			//'posicion_etiquetas' 	=> 'izquierda',
			//'posicion_tooltips' 	=> 'abajo-etiqueta',
			//'posicion_requerido' 	=> 'derecha-campo',
			//'posicion_msj_validacion'=> 'abajo-campo',

			'etiquetas'=>array(
				//los campos se ordenaran en base a este orden ! .. ns
				//los campos que no se les defina etiqueta saldrán ordenados al final en el formulario 
				//    con el nombre del campo original como etiqueta .. ns 
				'nombre_razon_social'	=>'Establecimiento',
				//'rif'					=>'RIF',
				'anexo_1'				=>'Anexo',
				'nombre_producto_servicio'	=>'Producto',
				'anexo_2'				=>'Anexo',
				'anexo_3'				=>'Anexo',
				'precio_regulado'		=>'Precio regulado',
				'texto_denuncia'		=>'Texto de la denuncia',
				'observaciones'			=>'Observaciones',
				'fecha_registro'		=>'Fecha de registro',
				'estatus'				=>'Estatus',
				'direccion'				=>'Dirección',
				'es_regulado'			=>'¿Es regulado?',
				'tipo_establecimiento'	=>'Código Tipo',
				'id_responsable'		=>'Responsable',
				'id_estado'				=>'Estado',
				'id_municipio'			=>'Municipio',
				'id_parroquia'			=>'Parroquia',
				'tipo_denuncia'			=>'Tipo denuncia',
				'otro_tipo'				=>'Otro',
				'codigo_denuncia'		=>'Código Denuncia',
				//'precio_observado'		=>'Precio observado',
				'id_denuncia'			=>'ID denuncia',
				'tipo_producto'			=>'Tipo producto',
				'marca_producto'		=>'Marca',
				'presentacion_producto'	=>'Presentación',
				//'medida_producto'		=>'Medida'
			),
			'tooltips' => array(
				'id_estado'     =>'Escoja uno de los estados listados y se cargarán los municipios correspondientes.',
				'tipo_denuncia' =>'Escoja uno de los estados listados y se cargarán los municipios correspondientes.',
				'es_regulado'   =>'Escoja uno de los estados listados y se cargarán los municipios correspondientes.',
			),
			'mensajes_validacion' => array(
				'id_estado'     =>'Es requerido.',
				'tipo_denuncia' =>'Debe indicar el dato.',
				'es_regulado'   =>'Valor inválido.',
			),
			'config_campos'	=> array(
				'id_estado'				=>array('lista'), //array('localizacion.t_estados','id_estado','descripcion')),
				'tipo_denuncia'			=>array('seleccionmultiple'), //sin parámetros ya que se piensa cargar luego con jcombo! .. ns
				//'id_parroquia'			=>array('lista'), //sin parámetros ya que se piensa cargar luego con jcombo! .. ns
				//'tipo_denuncia' 			=>array('lista',array('principal.tipos_denuncias','id_tipo_denuncia','tipo_denuncia')),
				//'tipo_establecimiento' 	=>array('lista',array('principal.t_establecimientos','id_establecimiento','descripcion')),
				//'anexo_1' 				=>array('oculto'),
				'anexo_1' 				=>array('imagen', array('./application/img/placeholder.jpg')),
				'anexo_2' 				=>array('imagen', array('./application/img/placeholder.jpg')),
				'anexo_3' 				=>array('archivo'),
				'direccion'				=>array('text'),
				'es_regulado'			=>array('oculto'),
			),
			'mostrar_botones'			=>array(true,true), //arriba, abajo .. ns
			'botones' => array(
				'b_primero'				=>array('registro_primero'),
				'b_anterior'			=>array('registro_anterior'),
				's1'					=>array('separador_h'),
				'b_nuevo'				=>array('submit',array('Nuevo',"alert(\"nuevo\");")),
				'b_enviar'				=>array('submit',array('Guardar',"alert(\"enviando\");")),
				'b_eliminar'			=>array('button',array('Eliminar',"alert(\"eliminando\");")),
				'b_cancelar'			=>array('reset',array('Cancelar')),
				's2'					=>array('separador_h'),
				'b_siguiente'			=>array('registro_siguiente'),
				'b_ultimo'				=>array('registro_ultimo'),

			)
		);
	?>

	<div class="contenedor_formulario">
		<?=ns_generar_formulario('f_denuncias',$tabla,$parametros);?>
	</div>




















<!-- se coloca abajo para no distraer en el desarrollo de lo importante -->

	<style>
		/* ------------- clases comunes --------------- */
		body {font-family: sans-serif; font-size: 0.8em;}
		.alinear-derecha {text-align:right;}
		.negrita{font-weight:bold;}
		.normal{font-weight:normal;}
		.ancho-120 {max-width: 120px; width: 100%;}
		.ancho-200 {max-width: 200px; width: 100%;}
		.ancho-250 {max-width: 250px; width: 100%;}
		.ancho-300 {max-width: 300px; width: 100%;}
		.ancho-600 {max-width: 600px; width: 100%;}
		.ancho-40-porciento {max-width: 40%; width: 100%;}
		.ancho-50-porciento {max-width: 50%; width: 100%;}
		.alinear-arriba {vertical-align: top;}
		/* -------------------------------------------- */
		.contenedor_formulario { 
			border-top: 1px solid #ddd;
			border-left: 1px solid #ddd;
			border-bottom: 1px solid #bbb;
			border-right: 1px solid #bbb;
			border-radius: 3px;
			background-color: #eff0ff; 
			margin: 0 auto; 
			padding: 10px 20px;
			width: 630px;
		}
		/* ------------ a continuacion clases propias del ns_formulario ---------- */
		.ns_formulario {margin: 0 auto;}
		.ns_formulario hr {margin: 0; border: 0;border-bottom:1px dotted #ccc;height: 10px}
		.ns_formulario table { width: 100%;}
		.ns_formulario table tr:hover td { background-color: rgba(255,255,255,0.5);}

		.ns_formulario .titulo {
			font-size: 1.2em;
		}
		.ns_formulario td.celda-etiqueta,
		.ns_formulario td.celda-campo {
			border-bottom: 1px dotted #ccc;
		}
		.ns_formulario td.celda-etiqueta label{
			margin: 4px 0;
		}
		.ns_formulario .campo_tooltip {
			font-size: 0.8em;
			opacity: 0.5;
		}
		.ns_formulario .mensaje_validacion {
			font-size: 0.8em;
			color: #ff0000;
		}
		.ns_formulario .ns_campo_formulario {
			font-family: inherit;
			font-size: inherit;
			border: 1px solid #ddd;
			border-top: 1px solid #999;
			border-left: 1px solid #999;
			background: none;
			background-color: #fff;
			padding: 3px;
			margin: 3px 0;
			border-radius: 2px;
		}
		.ns_formulario .ns_campo_formulario:hover {
			border: 1px solid #999;
			border-top: 1px solid #777;
			border-left: 1px solid #777;
			box-shadow: 1px 1px 2px rgba(0,0,0,0.2) inset;
		}
		.ns_formulario .ns_campo_formulario:focus {
			border: 1px solid #369;
			background-color: #ffffee;
			box-shadow: 1px 1px 2px rgba(0,0,0,0.2) inset;
		}
		.ns_formulario .area-botones {
			text-align: center;
			vertical-align: center;
			padding:5px;
		}
		.ns_formulario img.ns_imagen_formulario {
			width: 200px;
			height: auto;
			border: 1px solid #ccc;
			background-color: #fff;
			padding: 3px;
		}
	</style>
</body>
</html>
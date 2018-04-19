<?php

include 'PageTemplate.php';

abstract class SchoolPage extends PageTemplate{
	
	public function SchoolPage( $newTitle='') {
		$this->title = $newTitle;
	}
	
	public function printHeader(){
        $text .= '<!DOCTYPE html>';
        $text .= '<html lang="es">';
        $text .= '<head>';
        $text .= '<meta charset="UTF-8">';
        $text .= '<title>UCSP NETWORK</title>';
        $text .= '<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">';
        $text .= '<link rel="stylesheet" href="CSS/estilos.css">';
        $text .= '<link rel="stylesheet" href="Icons/styles.css">';
        $text .= '<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>';
        $text .= '</head>';
        return $text;
	}
	
	public function menu(){
        $text .='<div class="contenedor">'
        $text .='<h1 class="logo" >UCSP NETWORK</h1>'
        $text .='<nav class="nav" id="nav">'
        $text .='<ul class="menu">'
        $text .='<li class="menu__item"><a class="menu__link select" href="">Inicio</a></li>'
        $text .='<li class="menu__item"><a class="menu__link" href="">Cursos</a></li>'
        $text .='<li class="menu__item"><a class="menu__link" href="">Docentes</a></li>'
        $text .='<li class="menu__item"><a class="menu__link" href="">Contacto</a></li>'
        $text .='</ul>'
        $text .='</nav>'
        $text .='</div>'
        return $text;
	}
	
	public function perbas(){
		$text .='<div class="Photos">';
        $text .='<div id=img1>';
        $text .='<img src="Imagenes/img1.png" style="width:250px;height:350px;" alt="" class="img__color">';
        $text .='<h1 class="nombre">Juan Suarez</h1>';
        $text .='<ul class="d_per">';
        $text .='<li class="l_datos">CODIGO:         888-10-4589</li>';
        $text .='<li class="l_datos">FACULTAD:       Ciencias de la Computacion</li>';
        $text .='<li class="l_datos">SEMESTRE:       Tercero</li>';
        $text .='<li class="l_datos">USUARIO:    Juan.suarez</li>';
        $text .='<li class="l_datos">PROMOCION:        2016-II</li>';
        $text .='<li class="l_datos">PERIODO ELECTIVO:   2018-I</li>';
        $text .='</ul>';
                        
        $text .='<a class="icon-portal" href="Perfil1.html"></a>';
        $text .='</div>';
        $text .='<div id=img2>';
        $text .='<img src="Imagenes/img2.png" style="width:250px;height:350px;" alt="" class="img__color">';
        $text .='<h1 class="nombre">Renato Wiesse</h1>';
        $text .='<ul class="d_per">';
        $text .='<li class="l_datos">CODIGO: 888-10-2919</li>';
          
        $text .='<li class="l_datos">FACULTAD: Administracion</li>';
        $text .='<li class="l_datos">SEMESTRE: Tercero</li>';
        $text .='<li class="l_datos">USUARIO: Renato.wiesse</li>';
        $text .='<li class="l_datos">PROMOCION: 2017-1</li>';
        $text .='<li class="l_datos">PERIODO ELECTIVO: 2018-1</li>';
        $text .='</ul>';
        $text .='<a class="icon-portal" href="Perfil2.html"></a>';
        $text .='</div>';
        $text .='<div id=img3>';
        $text .='<img src="Imagenes/img3.png" style="width:250px;height:350px;" alt="" class="img__color">';
        $text .='<h1 class="nombre">Jose Vega</h1>';
        $text .='<ul class="d_per">';
        $text .='<li class="l_datos">CODIGO:</li>';
        $text .='<li class="l_datos">FACULTAD:</li>';
        $text .='<li class="l_datos">SEMESTRE:</li>';
        $text .='<li class="l_datos">USUARIO:</li>';
        $text .='<li class="l_datos">PROMOCION:</li>';
        $text .='<li class="l_datos">PERIODO ELECTIVO:</li>';
        $text .='</ul>';
        $text .='<a class="icon-portal" href="Perfil3.html"></a>';
        $text .='</div>';
        $text .='<div id=img4>';
        $text .='<img src="Imagenes/img4.png" style="width:250px;height:350px;" alt="" class="img__color">';
        $text .='<h1 class="nombre">Manuel Diaz</h1>';
        $text .='<ul class="d_per">';
        $text .='<li class="l_datos">CODIGO:888-10-8989</li>';
        $text .='<li class="l_datos">FACULTAD: Derecho</li>';
        $text .='<li class="l_datos">SEMESTRE: Tercero</li>';
        $text .='<li class="l_datos">USUARIO: Alejandro.lopez</li>';
        $text .='<li class="l_datos">PROMOCION:2017-1</li>';
        $text .='<li class="l_datos">PERIODO ELECTIVO:2018-1</li>';
        $text .='</ul>';
        $text .='<a class="icon-portal" href="Perfil4.html"></a>';
        $text .='</d </div>';
		$text .='return $text;';
        return $text;
	}	
}
?>

<?php
//redirecciona las pagina
function redireccionar($pagina){
	header('location: '.RUTA_URL.$pagina);

}
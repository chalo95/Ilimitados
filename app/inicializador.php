<?php
	//instaciando configuracion
	require_once'config/configurar.php';
	require_once 'helpers/url_helper.php';

/*
	//agrgando libreria manualmente
	require_once'librerias/Base.php';
	require_once'librerias/Controlador.php';
	require_once'librerias/Core.php';*/

	//autoload de las librerias php

	spl_autoload_register(function($nombreclases){
		require_once 'librerias/'.$nombreclases.'.php';
	});


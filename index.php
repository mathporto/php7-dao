<?php 

	require_once("config.php");

	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//echo json_encode($usuarios);

	//Carrega um usuário
	$root = new Usuario();
	$root->loadById(7);
	echo $root."<hr>";

	//Carrega lista com todos os usuários
	$lista = Usuario::getList();
	echo json_encode($lista)."<hr>";

	//Carrega uma lista buscando pelo login
	$search = Usuario::search("o");
	echo json_encode($search)."<hr>";

	//Carrega usuario usando login e senha
	$usuario = new Usuario();
	$usuario->login("root","@rr0ba");
	echo $usuario;

 ?>
<?php

class Conexao {
	//Atributos de conexão
	var $host = "127.0.0.1";
	var $db = "fisiohelper";
	var $user = "postgres";
	var $pass = "postgres";
	var $port = 5432;
	var $link = null;

	function __construct() {
		$this->connect();
	}
	function connect(){
		$this->link = pg_connect("host={$this->host} port={$this->port}) dbname={$this->db} user={$this->user} password={$this->pass}") 
	or die ("Erro na conexão!");
		set_time_limit(0);
		return true;
	}
	function query($sql) {
		$result = pg_query($this->link, "{$sql}") or die ($sql);
		return $result;
	}
	
	function queryFetchObject($res){
		$object = pg_fetch_object($res);
		return $object;		
	}
	
	function queryFetchRow($res){
		$row = pg_fetch_row($res);
		return $row;		
	}
}
?>
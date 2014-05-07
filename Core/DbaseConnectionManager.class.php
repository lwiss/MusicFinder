<?php


class DbaseConnectionManager {

    static private  $db = 'oci:dbname=//icoracle.epfl.ch:1521/db2014_g21';
 	static private $user = 'db2014_g21';
	static private $pass = 'db2014_g21';
	static private $instance = null;
	
	public static function getInstance(){
		try{
		    if(DbaseConnectionManager::$instance == null){
				DbaseConnectionManager::$instance = new PDO(DbaseConnectionManager::$db,DbaseConnectionManager::$user,DbaseConnectionManager::$pass);
			}
		}catch(Exception $e){
			die('Erreur : '.$e->getMessage());
		}
		return DbaseConnectionManager::$instance;
	}
}
?>
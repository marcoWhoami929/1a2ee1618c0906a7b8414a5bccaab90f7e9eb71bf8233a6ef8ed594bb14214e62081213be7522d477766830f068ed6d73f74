<?php

class db{
    private $dbHost = 'localhost';
    private $dbUser = 'root';
    private $dbPass = '';
    private $dbName = 'apiRest';
                                                                                                                                                                                                                                                                                                                                                                                                                                                               
    //Conexion
    public function connecDB(){
        $mysqlConnect = "mysql:host=$this->dbHost;dbname=$this->dbName";
        $dbConnexion =  new PDO($mysqlConnect,$this->dbUser,$this->dbPass);
        $dbConnexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $dbConnexion;
    }
}
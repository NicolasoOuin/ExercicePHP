<?php
namespace OCFram;
 
class PDOFactory
{
  public static function getMysqlConnexion()
  {
      
    try
    {    
    $db = new \PDO('mysql:host=localhost;dbname=db_secondnews', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
    $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
 
    return $db;
  }
}
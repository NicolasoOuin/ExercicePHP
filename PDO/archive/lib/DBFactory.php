<?php
class DBFactory
{
  public static function getMysqlConnexionWithPDO()
  {
    try
    {    
    $db = new PDO('mysql:host=localhost;dbname=bd_firstnews', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $db;
  }
  
  public static function getMysqlConnexionWithMySQLi()
  {
    return new MySQLi('localhost', 'root', '', 'news');
  }
}
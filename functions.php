<?php
use \Hcode\Model\User;
use \Hcode\DB\Sql;

   function formatPrice(float $vlprice)
   {

   	return number_format($vlprice, 2, ",", ".");

   }

   function checkLogin($inadmin = true)
   {

   	return User::checkLogin($inadmin);

   }

   function getUserName()
   {

   	$user = User::getFromSession();

   	$sql = new Sql();

   	$results = $sql->select("SELECT * FROM db_ecommerce.tb_persons WHERE idperson = :idperson;",[

   		':idperson'=>$user->getidperson()

   	]);

   	//echo json_encode($results[0]['desperson']);
   	//exit;

	return $results[0]['desperson'];

   }

?>
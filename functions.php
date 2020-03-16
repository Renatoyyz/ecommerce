<?php
use \Hcode\Model\User;
use \Hcode\Model\Cart;
use \Hcode\DB\Sql;

   function formatPrice($vlprice)
   {

      if( !$vlprice > 0 ) $vlprice = 0;

   	return number_format($vlprice, 2, ",", ".");

   }

   function formatDate($date)
   {

      return date('d/m/Y', strtotime($date) );

   }

   function checkLogin($inadmin = true)
   {

   	return User::checkLogin($inadmin);

   }

   function getUserName()
   {

   	$user = User::getFromSession();

   	$sql = new Sql();

   	$results = $sql->select("SELECT * FROM tb_persons WHERE idperson = :idperson;",[

   		':idperson'=>$user->getidperson()

   	]);

   	//echo json_encode($results[0]['desperson']);
   	//exit;

	return $results[0]['desperson'];

   }

   function getCartNrQtd()
   {

      $cart = Cart::getFromSession();

      $totals = $cart->getProductsTotals();

      return $totals['nrqtd'];

   }

   function getCartVlSubTotal()
   {

      $cart = Cart::getFromSession();

      $totals = $cart->getProductsTotals();

      return formatPrice($totals['vlprice']);

   }

   

?>
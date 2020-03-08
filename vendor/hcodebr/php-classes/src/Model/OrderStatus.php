<?php

namespace Hcode\model;

use \Hcode\DB\Sql;
use \Hcode\Model;

class OrderStatus extends Model {//class

	const EM_ABERTO = 1;
	const AGUARDANDO_PAGAMENTO = 2;
	const PAGO = 3;
	const ENTREGE = 4;

}//class

?>
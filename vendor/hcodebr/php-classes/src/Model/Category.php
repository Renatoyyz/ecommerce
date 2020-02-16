<?php

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Mailer;

  class Category extends Model {

      public static function listAll()
      {//list all

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_categories ORDER BY descategory;");
      }//list all

      public function save()
      {//save

        $sql = new Sql();

        $results = $sql->select("CALL sp_categories_save(:idcategory, :descategory)", array(

           ":idcategory"=>$this->getidcategory(),
           ":descategory"=>$this->getdescategory()

        ));

        $this->setData($results[0]);

      }//save

      public function get($idcategory)
      {//get

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_categories WHERE idcategory = :idcategory", array(

              ":idcategory"=>$idcategory

        ));


        $this->setData($results[0]);

      }//get

      public function delete()
      {

        $sql = new Sql();

        $sql->query("DELETE FROM tb_categories WHERE idcategory = :idcategory", array(

          ":idcategory"=>$this->getidcategory()


        ));

      }


  }

?>
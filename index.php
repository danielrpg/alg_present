<?php
ob_start();
require_once "app/controller/IndexController.php";
/**
 * Description of index
 *
 * @author Daniel Fernandez
 */
class Index {
    /*
     * Este es el metodo que ejecuta la aplicación
     */
    public function run($action){
      $indexController = new IndexController();
  	  switch ($action) {
  		  case 'index':
         //  echo "Estas en el index";
  			  break;
  		  default:
          $indexController->runIndex('index');
          break;
  	  }   
    }
}
$index = new Index();
$index->run($_GET['action']);
ob_end_flush();
?>

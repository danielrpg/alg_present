<?php
require_once 'app/view/IndexView.php';
/**
 * Description of Router
 *
 * @author Daniel Fernandez
 */
class IndexController {
    /*
     * Este es el metodo constructor para el proyecto
     */
    public function __construct() {   
    }
    /*
     * Esta es la funcion que ejecuta y redirecciona la solicitud  que se haga
     */
    public function runIndex($tp){
        $indexView = new IndexView();
        switch ($tp) {
           case 'index':
                $indexView->runIndex();
                break;
            default:
                echo "Esta en el default";
                break;
        }
    }
}

?>

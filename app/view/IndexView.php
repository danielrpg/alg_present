<?php
/**
 * Description of HomeView
 *
 * @author Daniel
 */
class IndexView {
    // Este es el atributo que crea el template de la vista
    private $template;
    
    /*
     * Este es el metodo constructor de la clase HomeView
     */
    public function __construct() {
        // Aqui todo lo que se define para este constructor
    }
    
    /*
     * Este es el metodo que ejecuta el template de la vista
     */
    public function runIndex(){
        $library = Array('title'=>'',
                         'keywords'=>'Desarrollo web Tareas',
                          'description'=>'Desarrollo web tareas');
        $template = file_get_contents('app/site/index.html');
        foreach ($library as $key => $value) {
             $template = str_replace('{'.$key.'}', $value, $template);
        }
        $template = str_replace('{clasejs}', 'app/site/js/Index.js', $template);
        $header = file_get_contents('app/site/header.html');
        $template = str_replace('{header}', $header, $template); 
        $template = str_replace('{content}', 'Este es el contenido', $template);
        $footer = file_get_contents('app/site/footer.html');
        $template = str_replace('{footer}', $footer, $template);
        print($template);
    }
    
}

?>

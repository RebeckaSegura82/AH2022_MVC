<?php

namespace MVC;

class Router {

    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn) {
        $this->rutasGET[$url] = $fn;
    }
    public function post($url, $fn) {
        $this->rutasPOST[$url] = $fn;
    }

    public function comprobarRutas() {
        $urlActual = $_SERVER['REQUEST_URI'] === '' ? '/' : $_SERVER['REQUEST_URI'];
        $metodo = $_SERVER['REQUEST_METHOD'];

        if($metodo === 'GET') {
            $fn = $this->rutasGET[$urlActual] ?? null;
        } else {
            $fn = $this->rutasPOST[$urlActual] ?? null;
        }

        if($fn) {
            // La URL existe y hay una función asociada
            call_user_func($fn, $this);

        } else {
            echo "Pagina no Encontrada";
        }
    }  

    public function render($view, $datos = []) {

        foreach($datos as $key => $value){
            $$key = $value;
        }

        ob_start(); // Inicia almacenamiento en memoria del archivo view 
        include __DIR__ . "/views/$view.php"; 
        $contenido = ob_get_clean(); // limpia la memoria
        include __DIR__ . "/views/layout.php";

    }

}
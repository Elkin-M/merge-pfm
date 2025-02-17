<?php
namespace App\Controllers;

use App\Models\ProductosModel;
class ProductosController{
    public static function list(){
        $producto = new ProductosModel( );
        $listado = $producto->all( );

        
        return [
            'view' => 'productos/listado.php',
            
        ];
    }
    public static function new( ){
        return [
            'view' => 'productos/form.php',
            'form' => [
                'title' => 'editar  producto',
                'button' => 'Crear producto'
            ]
        ];
    }
    public static function edit( ){
        return [
            'view' => 'productos/form.php',
            'form' => [
                'title' => 'Editando producto',
                'button' => 'Guardar cambios'
            ]
        ];     
    }
    public static function delete( ){
        //no tiene nada (esta vacio)
        echo "Eliminando producto";
    }
}
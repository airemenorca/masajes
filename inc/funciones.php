<?php

//Muestra multiples productos, cantidad de productos como parametros

function obtenerProductos($cantidad = 10) {
    include 'conexion.php';

    try {
        $sql = " SELECT * FROM productos LIMIT $cantidad";
        $resultado = $bd->query( $sql );
    } catch (Exception $e) {
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}

//Muestra un solo producto, ID del producto como parametro

function obtenerProducto($id_producto) {
    include 'conexion.php';

    try {
        $sql = "SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta FROM productos WHERE id = $id_producto ";
        $resultado = $bd->query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}
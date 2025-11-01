<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('mascotas','MascotasController::index');
$routes->post('agregar_mascotas','MascotasController::agregarMascotas');
$routes->get('eliminar_mascotas/(:num)','MascotasController::eliminarMascotas/$1');
$routes->get('buscar_mascotas/(:num)','MascotasController::buscarMascotas/$1');
$routes->post('modificar_mascotas','MascotasController::modificarMascotas');

//*Citas
$routes->get('citas','CitasController::index');
$routes->post('agregar_citas','CitasController::agregarCitas');
$routes->get('eliminar_citas/(:num)','CitasController::eliminarCitas/$1');
$routes->get('buscar_citas/(:num)','CitasController::buscarCitas/$1');
$routes->post('modificar_citas','CitasController::modificarCitas');



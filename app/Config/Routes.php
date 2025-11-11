<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('mahasiswa', 'Mahasiswa::index');
$routes->get('mahasiswa/mhs_result', 'Mahasiswa::mhs_result');
$routes->get('mahasiswa/mhs_row', 'Mahasiswa::mhs_row');
$routes->get('mahasiswa/mhs_resultarray', 'Mahasiswa::mhs_resultarray');
$routes->get('mahasiswa/mhs_rowarray', 'Mahasiswa::mhs_rowarray');
$routes->get('mahasiswa', 'Mahasiswa::index');
$routes->get('mahasiswa/tambah', 'Mahasiswa::tambah');
$routes->post('mahasiswa/simpan', 'Mahasiswa::simpan');
$routes->get('mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('mahasiswa/update/(:num)', 'Mahasiswa::updateData/$1');
$routes->get('mahasiswa/hapus/(:num)', 'Mahasiswa::hapus/$1');
$routes->get('mahasiswa/cetak', 'Mahasiswa::cetak');
$routes->post('mahasiswa/updateData/(:num)', 'Mahasiswa::updateData/$1');

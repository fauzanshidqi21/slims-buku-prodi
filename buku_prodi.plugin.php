<?php
/**
 * Plugin Name: Laporan Buku Prodi
 * Plugin URI: -
 * Description: Laporan Buku Berdasarkan Prodi
 * Version: 1.0.0
 * Author: Fauzan
 * Author URI: -
 */

//get plugin instance
use SLiMS\Plugins;
$plugins = Plugins::getInstance();

//Menu Buku Prodi
$plugins->registerMenu('bibliography', 'Buku Prodi', __DIR__. '/pages/buku_prodi.inc.php');
$plugins->registerMenu('reporting', 'Laporan Buku Prodi', __DIR__. '/pages/laporan.inc.php');


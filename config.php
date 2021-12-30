<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'aulas.cwkcjtiatchy.us-east-1.rds.amazonaws.com';
$CFG->dbname    = 'moodle_pregrado';
$CFG->dbuser    = 'integrador';
$CFG->dbpass    = '!!1nt3gr4c10n**';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

//$CFG->sslproxy = true;
//$CFG->wwwroot   = 'https://pregrado.aulasvirtuales.udistrital.edu.co';
//$CFG->wwwroot   = 'http://3.236.64.38';
//$CFG->wwwroot   = 'http://pregradoaulas.udistrital.edu.co';
$CFG->wwwroot   = 'https://pregradoaulas.udistrital.edu.co';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';
$CFG->dirroot = '/var/www/html';
//$CFG->cachedir = '/var/www/cache';
$CFG->cachedir = '/var/www/cache3';
$CFG->tempdir = '/var/www/temp';
$CFG->localcachedir = '/var/www/local';
//$CFG->dbsessions = 1;
$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

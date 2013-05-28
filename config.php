<?php
$directory = getcwd();
define( 'DIRECTORY', str_replace( $_SERVER[ 'DOCUMENT_ROOT' ], '', $directory ).'/' );
?>
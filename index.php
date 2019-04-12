<?php
require __DIR__ . '/loader.php';
require __DIR__ . '/includes/WpupCI/PDACustomCI.php';
$server = new PDACustomCI();

//$meta_data = $server->handleRequest( array( 'action' => 'get_metadata', 'slug' => 'pda-woocommerce' ) );
$meta_data = trim( $server->handleRequest( array( 'action' => 'get_metadata', 'slug' => $argv[1] ) ) );
if ( empty( $meta_data ) ) {
	exit;
}
$meta_data_file = fopen( "meta_data.json", "w" ) or die( "Unable to open file!" );
fwrite( $meta_data_file, $meta_data );
fclose( $meta_data_file );


<?php


	function plugin_dir_path($file) {
		return dirname( $file . '/' );
	}

	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT);
	define("WPINC", true);
	
	require_once( 'wp-army.php' );
	echo("test echo");
	$path = 'assets/test_army.xml';
	echo( file_get_contents($path));
	if( !file_exists($path)) {
		echo($path . " was found");
	} 
	echo( file_exists($path));
	$xml_string = simplexml_load_file('assets/test_army.xml');
	echo($xml_string);

	$army_list = new Wp_Army_List();
	echo($army_list);
?>

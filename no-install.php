
<?php


	function plugin_dir_path($file) {
		return (dirname( $file  ) . '/');
	}

	function register_activation_hook($variable) {}
	function register_deactivation_hook($variable) {}
	function add_action($variable){}
	function is_admin(){}

	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT);
	define("WPINC", true);
	
	require_once( 'wp-army.php' );

	$path = (dirname(__FILE__)) . '/assets/testarmy.xml';

	//$army_list = Wp_Army_List::creat

	if( file_exists($path))
	{
		//echo("File found");
		$xml = simplexml_load_file('assets/testarmy.xml');
		echo(var_dump($xml));
	}
	else
	{
		echo($path . " file not found!");
	}


	$army_list = Wp_Army_List::create_army_list_from_xml_obj($xml);
	$army_list->render_army_list();

	//echo($army_list);
?>

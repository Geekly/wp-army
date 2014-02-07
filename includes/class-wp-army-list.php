<?php

/**
 * Plugin class. This class should ideally be used to work with the
 * public-facing side of the WordPress site.
 *
 * If you're interested in introducing administrative or dashboard
 * functionality, then refer to `class-plugin-name-admin.php`
 *
 * @TODO: Rename this class to a proper name for your plugin.
 *
 * @package wp-army
 * @author  Keith Hooks <khooks@gmail.com>
 */

/**
*   This is the class the represents an army list in session
*	- functions to parse from xml
*   - to render into blog entry code
*	- to export to xml
*   - to serialize in the database
*   - to read from the database
*/
class Wp_Army_List
{
	
	function __construct()
	{
		# code...
	}

	static function create_army_from_xml(xml_army)
	{
		$army = new Wp_Army_List();
		return $army;
	}

}



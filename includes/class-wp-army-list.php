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

	var $army;
	var $faction = "FactionName";
	var $description = "Description";
	var $player = "PlayerName";
	var $army_themeforce = "ThemeForce";
	var $army_caster_name = "Caster";
	var $army_caster_points = 6;
	var $army_caster_focusfury = 6;
	var $army_tier = "None";
	var $models;


	
	function __construct()
	{
		# code...
	}

	static function create_army_list_from_xml_obj($xml_army)
	{
		echo($xml_army);
		$army_list = new Wp_Army_List();
		$army_list->army = $xml_army;
		
		$army_list->faction = (string)$xml_army->faction;
		$army_list->description = (string)$xml_army->description;
		$army_list->player = (string)$xml_army->player;
		$army_list->faction = (string)$xml_army->faction;

		$army_list->models = xml2array($xml_army->army->models);
		print_r( $xml_army->models );


		//echo($army_list->models);

		//$army_list->army_caster_name = $army_list->models->caster['name'];

		return $army_list;
	}

	function __toString()
	{
		return $this->army->asXML();
	}

	function render_army_list()
	{
echo <<<ENDLIST
		<div id="armylist">
		Rendering army list
		<h2>{$this->description}</h2>
		<h3>Faction:  {$this->faction}</h3>
		<h3>Caster: {$this->army_caster_name}</h3>
		<ul>
		<li>{render_models();}
		</ul>
		</div>
ENDLIST;
	}

	function render_models()
	{

	}



}



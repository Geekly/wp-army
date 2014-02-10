<?php

	function xml2array($xml)
	{
	    $arr = array();

	    foreach ($xml as $element)
	    {
	        $tag = $element->getName();
	        
	        $e = get_object_vars($element);
	        if (!empty($e))
	        {
	            $arr[$tag] = $element instanceof SimpleXMLElement ? xml2array($element) : $e;
	        }
	        else
	        {
	            $arr[$tag] = trim($element);
	        }
	    }

	    return $arr;
	}


	function validate_xml($xml_string, $validate_schema)
	{

	    $xml = new XMLReader();
	    $xml->xml($xml_string);
	    echo("Setting schema");
	    $xml->setSchema($validate_schema);
	    echo("Validating against " . $validate_schema);
	    $xml->setParserProperty(XMLReader::VALIDATE, true);
	    if ($xml->isValid())
	    {	
	    	echo( "<p>");
	    	echo("XML is valid");
	    	echo("</p>");
	    	return true;
	    }
	    else
	    {
	    	echo( $xml->xml );
	    	return false;

	    }
	}
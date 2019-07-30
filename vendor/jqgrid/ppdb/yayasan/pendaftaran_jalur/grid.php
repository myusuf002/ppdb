<?php
require_once '../../../jq-config.php';
// include the jqGrid Class
require_once ABSPATH."php/jqGrid.php";
// include the driver class
require_once ABSPATH."php/jqGridPdo.php";
// Connection to the server
$conn = new PDO(DB_DSN,DB_USER,DB_PASSWORD);
// Tell the db that we use utf-8
$conn->query("SET NAMES utf8");

// Create the jqGrid instance
$grid = new jqGridRender($conn);
// Write the SQL Query
$grid->SelectCommand = 'SELECT ID, Jalur, Tingkat1, Tingkat2, Tingkat3, Tingkat4, Tingkat5, Alur1, Alur2, Alur3, Alur4, Keterangan, Persyaratan1, Persyaratan2, Persyaratan3, Persyaratan4 FROM pendaftaran_jalur';
// Set the table to where you add the data
$grid->table = 'pendaftaran_jalur';
$grid->setPrimaryKeyId('ID');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
// Let the grid create the model
$Model = array(
    array("name"=>"ID","label"=>"ID","width"=>50,"hidden"=>true),
    array("name"=>"Jalur","label"=>"Jalur","width"=>25),
	array("name"=>"Tingkat1","label"=>"Tingkat 1","width"=>25),
	array("name"=>"Tingkat2","label"=>"Tingkat 2","width"=>25),
	array("name"=>"Tingkat3","label"=>"Tingkat 3","width"=>25),
	array("name"=>"Tingkat4","label"=>"Tingkat 4","width"=>25),
	array("name"=>"Tingkat5","label"=>"Tingkat 5","width"=>25),
	array("name"=>"Alur1","label"=>"Alur 1","width"=>25),
	array("name"=>"Alur2","label"=>"Alur 2","width"=>25),
	array("name"=>"Alur3","label"=>"Alur 3","width"=>25),
	array("name"=>"Alur4","label"=>"Alur 4","width"=>25),
	array("name"=>"Keterangan","label"=>"Keterangan","width"=>25),
	array("name"=>"Persyaratan1","label"=>"Persyaratan1","width"=>25),
	array("name"=>"Persyaratan2","label"=>"Persyaratan2","width"=>25),
	array("name"=>"Persyaratan3","label"=>"Persyaratan3","width"=>25),
    array("name"=>"Persyaratan4","label"=>"Persyaratan4","width"=>25)
);
$grid->setColModel($Model);
// Set the url from where we obtain the data
$grid->setUrl('grid.php');
// Set some grid options
$grid->setGridOptions(array(
    "caption"=>"Jalur Pendaftaran",
    "rowNum"=>10,    
    "rowList"=>array(10,20,30,50,100),
	"height"=>'auto',
	"hoverrows"=>true,
	"rownumbers"=>true,
	"sortname"=>"ID",
	"sortorder"=>"asc",
	"altRows"=>true,
	"altclass"=>'myAltRowClass',
	"autowidth"=>true
	
));
// The primary key should be entered
$grid->setColProperty('ID', array("editrules"=>array("required"=>false)));
// Enable navigator
$grid->navigator = true;
// Enable only deleting
$grid->setNavOptions('navigator', array("excel"=>false,"add"=>true,"edit"=>true,"del"=>true,"view"=>false, "search"=>false));
// Enjoy
$grid->renderGrid('#grid','#pager',true, null, null, true,true);
$conn = null;
?>

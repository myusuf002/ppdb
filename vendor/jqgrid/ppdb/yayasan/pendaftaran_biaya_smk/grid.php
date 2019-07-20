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
$grid->SelectCommand = 'SELECT ID, Jalur, BiayaPendaftaran, BiayaPendidikan, BiayaPembangunan, BiayaTotal FROM pendaftaran_biaya_smk';
// Set the table to where you add the data
$grid->table = 'pendaftaran_biaya_smk';
$grid->setPrimaryKeyId('ID');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
// Let the grid create the model
$Model = array(
    array("name"=>"ID","label"=>"ID","width"=>50,"hidden"=>true),
	array("name"=>"Jalur","label"=>"Jalur","width"=>25),
    array("name"=>"BiayaPendaftaran","label"=>"BiayaPendaftaran","width"=>25),
	array("name"=>"BiayaPendidikan","label"=>"BiayaPendidikan","width"=>25),
	array("name"=>"BiayaPembangunan","label"=>"BiayaPembangunan","width"=>25),
	array("name"=>"BiayaTotal","label"=>"BiayaTotal","width"=>25)
);
$grid->setColModel($Model);
// Set the url from where we obtain the data
$grid->setUrl('grid.php');
// Set some grid options
$grid->setGridOptions(array(
    "caption"=>"Pendaftaran SMK",
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

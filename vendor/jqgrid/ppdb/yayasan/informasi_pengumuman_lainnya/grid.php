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
$grid->SelectCommand = 'SELECT ID, Tanggal, Judul, Keterangan, Poster FROM informasi_pengumuman_lainnya';
// Set the table to where you add the data
$grid->table = 'informasi_pengumuman_lainnya';
$grid->setPrimaryKeyId('ID');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
// Let the grid create the model
$Model = array(
    array("name"=>"ID","label"=>"ID","width"=>50,"hidden"=>true),
    array("name"=>"Tanggal","label"=>"Tanggal","width"=>25),
    array("name"=>"Judul","label"=>"Judul","width"=>50),
	array("name"=>"Keterangan","label"=>"Keterangan","width"=>50),
	array("name"=>"Poster","label"=>"Poster","width"=>50)
);
$grid->setColModel($Model);
// Set the url from where we obtain the data
$grid->setUrl('grid.php');
// Set some grid options
$grid->setGridOptions(array(
    "caption"=>"Pengumuman Lainnya",
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
$grid->setDbDate('Y-m-d');
$grid->setDbTime('Y-m-d H:i:s'); 
$grid->setUserDate('Y-m-d');
$grid->setUserTime('Y-m-d');

$grid->setColProperty('ID', array("editrules"=>array("required"=>false)));
$grid->setColProperty('Tanggal', 
             array("formoptions"=>array("label"=>"Tanggal"),"editable"=>true,"formatter"=>"date","datefmt"=>'d/m/Y',"formatoptions"=>array("srcformat"=>"Y-m-d H:i:s", "newformat"=>"Y-m-d"),
				   "editrules"=>array("edithidden"=>true,"required"=>true,"readonly"=>false),
                   "editoptions"=>array("tabindex"=>7,"required"=>true,"readonly"=>false,"dataInit"=>
                      "js:function(elm){setTimeout(function(){
                          jQuery(elm).datepicker({dateFormat:'yy-m-d'});
                             jQuery('.ui-datepicker').css({'zIndex':'1200','font-size':'75%'});},100);}")
            ));
// Enable navigator
$grid->navigator = true;
// Enable only deleting
$grid->setNavOptions('navigator', array("excel"=>false,"add"=>true,"edit"=>true,"del"=>true,"view"=>false, "search"=>false));
// Enjoy
$grid->renderGrid('#grid','#pager',true, null, null, true,true);
$conn = null;
?>

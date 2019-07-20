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
$grid->SelectCommand = 'SELECT Nisn, NamaLengkap, JenisKelamin, AsalSekolah, JalurPendaftaran, Tanggal, Jam, Ruangan FROM admin_ujian';
// Set the table to where you add the data
$grid->table = 'admin_ujian';
$grid->setPrimaryKeyId('Nisn');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
// Let the grid create the model

$grid->setColModel();
// Set the url from where we obtain the data
$grid->setUrl('grid.php');
$grid->addCol(array( 
    "name"=>"actions", 
    "formatter"=>"actions", 
    "editable"=>false, 
    "sortable"=>false, 
    "resizable"=>false, 
    "fixed"=>true, 
    "autowidth"=>true, 
    // use keys to save or cancel a row. 
    "formatoptions"=>array("keys"=>true) 
    ), "first");
// Set some grid options
$grid->setGridOptions(array(
    "rowNum"=>10,    
    "rowList"=>array(10,20,30,50,100),
    "height"=>'auto',
    "hoverrows"=>true,
    "rownumbers"=>true,
    "sortname"=>"Nisn",
    "sortorder"=>"asc",
    "altRows"=>true,
    "altclass"=>'myAltRowClass',
    "autowidth"=>true
    
));
// The primary key should be entered
$grid->setColProperty('Nisn', array("editrules"=>array("required"=>false)));
// Enable navigator
$grid->navigator = true;
$grid->toolbarfilter = true;
// Enable only deleting
$grid->setNavOptions('add',array("width"=>"400","autodataheight"=>true,"closeAfterAdd"=>true));
$grid->setNavOptions('view',array("width"=>"400","autodataheight"=>true,"datawidth"=>"auto"));
$grid->setNavOptions('edit',array("width"=>"400","autodataheight"=>true,"closeAfterEdit"=>true));
$grid->setNavOptions('navigator', array("excel"=>true,"pdf"=>true,"docx"=>true,"add"=>true,"edit"=>true,"del"=>true,"view"=>true, "search"=>true));
// Enjoy
$grid->renderGrid('#grid','#pager',true, null, null, true,true); 
$conn = null;
?>

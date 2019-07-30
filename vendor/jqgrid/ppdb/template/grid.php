<?php
require_once '../../jq-config.php';
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
$grid->SelectCommand = 
'SELECT nama_jalur_pendaftaran AS "Jalur Pendaftaran",
        keterangan_jalur_pendaftaran AS Keterangan,
        biaya_pendaftaran_jalur_pendaftaran AS "Biaya Pendaftaran",
        biaya_pendidikan_jalur_pendaftaran AS "Biaya Pendidikan",
        biaya_pembangunan_jalur_pendaftaran AS "Biaya Pembangunan" FROM `jalur_pendaftaran`';
// Set the table to where you add the data
$grid->table = 'jalur_pendaftaran';
$grid->setPrimaryKeyId('id_jalur_pendaftaran');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
// Let the grid create the model

$grid->setColModel();
// Set the url from where we obtain the data
$grid->setUrl('grid.php');

// Set some grid options
$grid->setGridOptions(array(
    "rowNum"=>10,    
    "rowList"=>array(10,20,30,50,100),
    "height"=>'auto',
    "hoverrows"=>true,
    "rownumbers"=>true,
    "sortname"=>"id_jalur_pendaftaran",
    "sortorder"=>"asc",
    "altRows"=>true,
    "altclass"=>'myAltRowClass',
    "autowidth"=>true
    
));
// The primary key should be entered
$grid->setColProperty('id_jalur_pendaftaran', array("editrules"=>array("required"=>true)));
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

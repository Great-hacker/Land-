<?php // content="text/plain; charset=utf-8"
include("dbconnect.php");
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');

 
 //$value1=$_REQUEST['value1'];
 //$value2=$_REQUEST['value2'];
 $a=array();
 $b=array();
 $qt1=mysql_query("select distinct Crop_Type  from fertilizer order by total DESC");
 $val=0;
 while($r1=mysql_fetch_array($qt1))																									
	{
	  $fertilizer1=$r1['Crop_Type'];
		

 $qt=mysql_query("select * from fertilizer where Crop_Type='$fertilizer1' order by total DESC");
 
 if($r=mysql_fetch_array($qt))																									
	{
	 $fertilizer=$r['Crop_Type'];
	 $tot=$r['total'];
	if($val<=2)
	{
//echo $tot;
	array_push($a,$fertilizer);
	array_push($b,$tot);

	}
	$val++;
 	
	
 	}
	}
$datay=$b;//array(12,13,15,8,12,6,3);
$datax=$a;//array('Jan','Feb','Mar','Apr','May','Jun','Jul');

// Size of graph
$width=500;
$height=500;
 
// Set the basic parameters of the graph
$graph = new Graph($width,$height,'auto');
$graph->SetScale('textlin');
 
// Rotate graph 90 degrees and set margin
$graph->Set90AndMargin(100,20,50,30);
 
// Nice shadow
$graph->SetShadow();
 
// Setup title
$graph->title->Set('Result');
$graph->title->SetFont(FF_VERDANA,FS_BOLD,14);
 
// Setup X-axis
$graph->xaxis->SetTickLabels($datax);
$graph->xaxis->SetFont(FF_VERDANA,FS_NORMAL,12);
 
// Some extra margin looks nicer
$graph->xaxis->SetLabelMargin(0);
 
// Label align for X-axis
$graph->xaxis->SetLabelAlign('right','center');
 
// Add some grace to y-axis so the bars doesn't go
// all the way to the end of the plot area
$graph->yaxis->scale->SetGrace(80);
 
// We don't want to display Y-axis
//$graph->yaxis->Hide();
 
// Now create a bar pot
$bplot = new BarPlot($datay);
$bplot->SetFillColor('orange');
$bplot->SetShadow();
 
//You can change the width of the bars if you like
//$bplot->SetWidth(0.5);
 
// We want to display the value of each bar at the top
$bplot->value->Show();
$bplot->value->SetFont(FF_ARIAL,FS_BOLD,12);
$bplot->value->SetAlign('left','center');
$bplot->value->SetColor('black','darkred');
$bplot->value->SetFormat('%.1f mkr');
 
// Add the bar to the graph
$graph->Add($bplot);
 
// .. and stroke the graph
//$graph->Stroke();
$graph->Stroke("test1.jpg");

?>
<img src="test1.jpg" width="400" height="500">
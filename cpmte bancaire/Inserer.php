<?php
mysql_connect("localhost","root","");
mysql_select_db("bdsoussiajawhar");
$num=$_POST["T1"];
$ncin=$_POST["T2"];
$nom=$_POST["T3"];
$pr=$_POST["T4"];
$ty=$_POST["D1"];
$sd=$_POST["T5"];
$rq="select * from compte where '$num'=NumCpt";
$rs=mysql_query($rq);
if (mysql_num_rows($rs)!=0) {
  echo("echec d ajout  car le compte  existe ");}
  else {
    $rq1="INSERT INTO compte values ('$num',$ncin','$nom','$pr','$ty','$sd')";
    $rs1=mysql_query($rq1);
    if ($rq1==NULL) {
      echo ("echec d insertion d information")
      
    }
    else {
      echo("success d ajouter d information")
    }

  }
?>

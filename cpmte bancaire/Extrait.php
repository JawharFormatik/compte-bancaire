<?php

mysql_connect("localhost","root","");
mysql_select_db("bdsoussiajawhar");
$num=$_POST["T1"];
$ncin=$_POST["T2"];
$nom=$_POST["T3"];
$pr=$_POST["T4"];
$ty=$_POST["D1"];
$sd=$_POST["T5"];
$rq="select * from compte where '$num'='NumCpt'";
$rs=mysql_query($rq);
if (mysql_num_rows($rs)!=0) {
  echo("Numero du compte existe ");}
  else {
    $rq1="select * from compte";
    $rs1=mysql_query($rq1);
    if ($rq1==NULL) {
      echo ("aucune compte existe ");}
    else {
      ?>
      <table border="1" width="89%">
	<tr>
		<td width="273">N° compte</td>
		<td>N° cin</td>
		<td>Nom</td>
		<td>Prenom</td>
		<td>Type</td>
		<td>Solde</td>
	</tr>
</table>
<?php
while ($eng=mysql_fetch_array($rs1)) {

 ?>
 <table border="1" width="89%">
	<tr>
		<td width="273">N° compte</td>
		<td><? $eng ['NumCpt']?></td>
    <td><? $eng ['Ncin']?></td>
    <td><? $eng ['Nom']?></td>
    <td><? $eng ['Prenom']?></td>
    <td><? $eng ['TypeC']?></td>
    <td><? $eng ['Solde']?></td>
	
	</tr>
</table>}<? }}?>
 











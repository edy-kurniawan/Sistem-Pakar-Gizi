<?php
if (!$calstyle) $calstyle = "1";

// CELL BACKGROUND COLORS
// Edit these colors to suit your needs [for Calendar Style 1]
$nbc="ffff99"; // NORMAL BACKGROUND COLOR
$abc="E9B4A1"; // MARKED BACKGROUND COLOR
$tbc="CCFFCC"; // TODAY'S BACKGROUND COLOR

// DAY NAMES
// Edit the calendar day name column headers below
$day[0]="Min";
$day[1]="Sen";
$day[2]="Sel";
$day[3]="Rab";
$day[4]="Kam";
$day[5]="Jum";
$day[6]="Sab";

// MONTH NAMES
// Edit the calendar month names below
$mth[1]="Januari";
$mth[2]="Februari";
$mth[3]="Maret";
$mth[4]="April";
$mth[5]="Mei";
$mth[6]="Juni";
$mth[7]="Juli";
$mth[8]="Agustus";
$mth[9]="September";
$mth[10]="Oktober";
$mth[11]="Nopember";
$mth[12]="Desember";

if (!$daystart) $daystart=0;
if (!$ny) $ny=0;
if (!$nt) $nt=0;
if (!$ctime) $ctime = "-0";
if (!$tw) $tw="130"; // Table Width
if (!$ch) $ch="";   // Cell Height
if (!$algn) $algn="0";
if (!$fsm) $fsm="14"; // FONT SIZE MONTH
if (!$fsd) $fsd="9";  // FONT SIZE DAY NAMES
if (!$fsn) $fsn="11"; // FONT SIZE NUMBERS

if (!$fwm) $fwm="bold"; else $fwm="normal"; // FONT WEIGHT MONTH
if (!$fwd) $fwd="normal"; else $fwd="bold"; // FONT WEIGHT DAY NAMES
if (!$fwn) $fwn="normal"; else $fwn="bold"; // FONT WEIGHT NUMBERS

?> 
<style TYPE="text/css">
<!--
.monthyear {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: <?echo$fsm?>px; font-weight: <?echo$fwm?>; color: #000000}
.daynames {  font-family: Arial, Helvetica, sans-serif; font-size: <?echo$fsd?>px; font-weight: <?echo$fwd?>; color: #000000}
.dates {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: <?echo$fsn?>px; font-weight: <?echo$fwn?>; color: #000000}
-->
</style>
<?php
// CALCULATE COLUMN WIDTHS
$cw=$tw/7;

// DETERMINE AND SET DATE NUMBER CELL ALIGNMENT
if ($algn==0) $algn="align='center' valign='middle'";
else $algn="align='right' valign='top'";

// DETERMINE TODAYS DAY NUMBER
$ctime = $ctime*3600;
$tmo = date("m", time()+$ctime);
$tda = date("j", time()+$ctime);
$tyr = date("Y", time()+$ctime);
$tnum = (intval((date ("U", mktime(20,0,0,$tmo,$tda,$tyr))/86400)))-$daystart; // TODAY'S DAY NUMBER

// CHECK FOR COMMAND LINE DATE VARIABLES
if (!$mo) $mo=$tmo;
if (!$yr) $yr=$tyr;

$daycount = (intval((date ("U", mktime(20,0,0,$mo,1,$yr))/86400)))-$daystart; // FIRST OF MONTH DAY NUMBER

$mo=intval($mo);
$mn = $mth[$mo]; // SET MONTH NAME
if ($ny!=1) {$mn = $mn." ".$yr;} // ADD YEAR TO MONTH NAME?

// ON WHAT DAY DOES THE FIRST FALL
$sd = date ("w", mktime(0,0,0,$mo,1-$daystart,$yr));
$cd = 1-$sd;

// NUMBER OF DAYS IN MONTH
$nd = mktime (0,0,0,$mo+1,0,$yr);
$nd = (strftime ("%d",$nd))+1;

////////////////////////////////////////
// PROCESS DAY MARKING /////////////////
////////////////////////////////////////

if ($mrks) {

$mrks = explode ("x",$mrks);
$smc = count ($mrks);
$mrke = explode ("x",$mrke);
$emc = count ($mrke);

if ($smc==1) {
$mrks[1]="3000-01-01";
$mrke[1]="3000-01-01";
}
}

$i=0;

while ($i < $smc) {

$mrks[$i] = ereg_replace('-','/', $mrks[$i]);
$mrke[$i] = ereg_replace('-','/', $mrke[$i]);
$start = intval(strtotime ($mrks[$i])/86400)+1;
$end = intval(strtotime ($mrke[$i])/86400)+1;

if (!$mrke[$i]) $end=$start; // MARK SINGLE DAY WITH ONLY MRKS VARIABLE

if (!$bgc[$start]) {$bgc[$start]=1;} else {$bgc[$start]=4;}
$bgc[$end]=3;
for ($n = ($start+1); $n < $end; $n++) {
$bgc[$n] = 2;}
$i++;
}

////////////////////////////////////////////
// DISPLAY CALENDAR ////////////////////////
////////////////////////////////////////////

?>
<table WIDTH="<? echo$tw?>" BORDER="0" CELLSPACING="0" CELLPADDING="2">
  <tr> 
    <td CLASS="monthyear"> 
      <div ALIGN="center"> 
        <? echo "$mn";?>
      </div>
    </td>
  </tr>
</table>
      
<table WIDTH="<? echo$tw?>" BORDER="0" CELLSPACING="2" CELLPADDING="1" CLASS="daynames">
  <tr ALIGN="center"> 
<?php
for ($I=0;$I<7;$I++) {
$dayprint=$daystart+$I;
if ($dayprint>6) $dayprint=$dayprint-7;
echo"<td WIDTH=$cw>$day[$dayprint]</td>";
}
?>
  </tr>
<?php
// PRINT CALENDAR USING TABLE BACKGROUND COLORS [CALENDAR STYLE 1]
if ($calstyle==1) { 
for ($i = 1; $i<7; $i++) { 
if ($cd>$nd) break;
?>
<tr <?php echo $algn ?> CLASS="dates" height=<?php echo $ch ?>> 
<?php
for ($prow = 1; $prow<8; $prow++) { 
if ($daycount==$tnum && $nt!="1" && $cd>0) {echo "<td width=$cw bgcolor=$tbc>$cd</td>";$daycount++;$cd++;}
else { ?>
<td width=" <?php echo $cw ?>" <?php if ($cd>0 && $cd<$nd) {echo " bgcolor=";if ($bgc[$daycount]) {echo $abc;} else {echo $nbc;} echo ">$cd";$daycount++;} else {echo ">";} $cd++;?></td>
<?php }} ?>
</tr>
<?php
}
} // END [CALENDAR STYLE 1]

// PRINT CALENDAR USING GRAPHICS BACKGROUNDS [CALENDAR STYLE 2]
if ($calstyle==2) { 
for ($i = 1; $i<7; $i++) { 
if ($cd>$nd) break;
?>
<tr <?php echo $algn ?> CLASS="dates" height=<?php echo $ch ?>> 
<?php
for ($prow = 1; $prow<8; $prow++) { 
if ($daycount==$tnum && $nt!="1" && $cd>0) {echo "<td width=\"25\" background='stath$bgc[$daycount].gif'>$cd</td>";$daycount++;$cd++;}
else { ?>
<td width="25" <?php if ($cd>0 && $cd<$nd) {echo " background='stat$bgc[$daycount].gif'>$cd";$daycount++;} else {echo ">";} $cd++;?>></td>
<?php }} ?>
</tr>
<?php
}
} // END [CALENDAR STYLE 2]

?>

</table>

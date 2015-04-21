<? 
header("Expires: " . gmdate("D, d M Y H:i:s", time() + (0*60)) . " GMT"); header("Refresh".": "."120");
?>

<html>
<head>
<title>Automated Emergency Room Dashboard</title>
<link rel="stylesheet" href="erdashboard.css">
<link type="font" name="mytimes" subtype="TrueType" src="calibri.ttf" src-bold="calibrib.ttf" src-italic="calibrii.ttf" src-bolditalic="calibribi.ttf"/>
</style>
</head>
<body>
<table width=1200 class=header>
<tr>
<td width=100></td>
<td width=600><center><img src="images/MSH_JWLHC_RGB.jpg"></td>
<td width=500></td>
</tr>
<tr>
<td></td>
<td colspan=7><center><b>EMERGENCY DEPARTMENT ACTIVITY DASHBOARD</td>
</tr>
<tr>
<td></td>
<td></td>
<td><center></td>
</tr>
<tr><td><center>&nbsp</td></tr>
</table>
<? 



$colWidthWide=600;
$colWidthDefault=100;
$colWidthNarrow=100;
$rowSpan=1;
$targetOU="";
$fileName=$DOCUMENT_ROOT."/erdashboard.psv";
$fileName="erdashboard.psv";

// $FS is of type "Scripting.FileSystemObject"
if (file_exists($fileName))
{

  $fileHandle=fopen($fileName,"r");
  /*$demofile=GetFile($fileName) */ /* don't know how to convert this filesystem method */ 
  /*$demofile=fopen($fileName,"r");*/
  $createdate=filectime($fileName);

  print "<table class=sample>"."\r\n";

  while(!feof($fileHandle))
  {


    $lineCounter=$lineCounter+1;
    $inLine=fgets($fileHandle);
    $colArray=explode("|",$inLine);

    print "<tr>"."\r\n";

    for ($intIndex=0; $intIndex<=count($colArray)-4; $intIndex=$intIndex+1)
    {
      $colValue=rtrim($colArray[$intIndex]);
      $targetOU=trim($colArray[9]);
      $formatAs=trim($colArray[10]);
      $target=doubleval($colArray[8]);

      if ($intIndex==1)
      {
        if ($col1LastValue==$colValue) { $colValue=""; } else { $col1LastValue=$colValue; } 
        $rowSpan=trim($colArray[0]);
      } 


      if ($lineCounter==1 || $intIndex==1)
      {
        $bgColor="Silver";
        if ($lineCounter==1) { $fontStyle="<b><center>"; } else { $fontStyle=""; } 
        if ($lineCounter==1 && $intIndex==1) { $bgColor="White"; } 
      }
        else
      {
        if ($colValue=="" || $colValue=="0") { $colValue="--"; } 
        $bgColor="White";
        $fontStyle="";
      } 


	if ($lineCounter>1 && $intIndex<8)
	{
		if ((is_numeric($colValue)) && (doubleval($target)>0))
		{
			if ($targetOU=="UNDER")
			{		
				if (doubleval($colValue)<=doubleval($target)) { $bgColor="#7FE817"; } else { $bgColor="#E42217"; } 
			}
			elseif ($targetOU=="OVER")
			{
				if (doubleval($colValue)>=doubleval($target)) { $bgColor="#7FE817"; } else { $bgColor="#E42217"; } 
			}
			else { $bgColor="white"; }
		} 
	} 


      if ($intIndex==2)
      {

        $colWidth=$colWidthWide;
        $colAlign="left";
      }
        else
      {

        $colWidth=$colWidthNarrow;
        $colAlign="center";
      } 


      if ($intIndex>0)
      {

        if ($intIndex==1)
        {

          if ($rowSpan!="")
          {
            print "<th rowspan = ".$rowSpan." bgcolor=".$bgColor." width=".$colWidth." align=".$colAlign.">".$fontStyle;
          } 
        }
          else
        {

          print "<td bgcolor=".$bgColor." width=".$colWidth." align=".$colAlign.">".$fontStyle;
        } 


       if (is_numeric($colValue))
        {

          if ($formatAs=="TIME")
          {

            $tmpHours=floor($colValue);
            $tmpMin=$colValue-floor($colValue);
            $tmpMin=intval($tmpMin*60);
            if ($tmpMin<10)
            {

              $colValue=$tmpHours.":0".$tmpMin;
            }
              else
            {

              $colValue=$tmpHours.":".$tmpMin;
            } 

          }
            else
          if ($formatAs=="PCNT")
          {

            if ($colValue<1)
            {

              $colValue="<1";
            } 

            $colValue=$colValue."%";
          } 

        } 

        print $colValue;

        if ($intIndex==1)
        {

          print "</th>"."\r\n";
        }
          else
        {

          print "</td>"."\r\n";
        } 

      } 


    }


    print "</tr>"."\r\n";

  } 

} 

print "</table>";

?>

<br><br><br>
<table width=1100 class=header>
<tr>
<td width=1100>Weekly results are in line with the Pay for Performance timelines (Sunday to Saturday).
</td>
</tr>
<tr>
<td width=1100><br>Data as of: <? echo date("F d Y H:i:s.", filectime($fileName));?></td>

</tr>
<tr>
<td width=1100>Source: Cerner </td>
</tr>
<tr>
<td width=1100><br>
Note: Daily Audits are performed on ED Admits for the "Date/Time Left ED". Therefore, length of stay calculations will not be valid for this population until audited. Turn-around time for audit is usually 3 days.
</td>
</tr>
</table>

</body>
</html>

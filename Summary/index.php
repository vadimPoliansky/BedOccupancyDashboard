<?php
header("Expires: " . gmdate("D, d M Y H:i:s", time() + (0*60)) . " GMT");
define('ROOTPATH', (__DIR__ . DIRECTORY_SEPARATOR . '..'));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<!--[if lt IE 8]>
<script src="/IE8.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="../excanvas.js"></script>
<![endif]-->
<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
<style type="text/css">

	body {
		margin:0px;
		margin-right:1px;
		background: none repeat scroll 0 0 #5b728b;
	}
	
	.header{		
		background: none repeat scroll 0 0 #254252;
		border-bottom:1px solid #0c232f;
		color:#e7e7e7;
		padding:5px;
		margin-bottom:50px;
		text-align:center;
	}
	
	.header-top {

		color: #e7e7e7;

	}
	.header-title{
		font-size:2em;
		display: inline-block;
		*display: inline;
		zoom: 1;
	}
	.header-subtitle {
		font-size:0.9em;
	}
	.atGlance-button {
		cursor: pointer;
		display: inline-block;
		*display: inline;
		zoom: 1;
		right:0;
		padding:5px;
		position:absolute;
	}
	
	.header-logo{
		float:right;
		height:100px;
	}
	
	.footer{
		color:#e7e7e7;
		padding:2px;
		font-size:0.7em;
		text-align:left;
		padding-left:10px;
		text-indent:-5px;
		width:60%;
		margin: 0 auto;
		margin-top:-20px;
	}

	.bed {
		background: none repeat scroll 0 0 #2d882d;
		border: 1px solid #2d882d;
		color: #e7e7e7;
		display: inline-block;
		height: 45px;
		line-height: 28px;
		margin-right: -1px;
		padding: 4px;
		'width: 108px;
		width: 9%;
		max-width: 9%;
		min-width: 9%;
	    margin-top: -1px;
	}
	
	.bed-title {
		height:28px;
		font-size:0.7em;
		margin-top:-7px;
		font-weight: 900;
		width:100%;
		white-space: nowrap;
		overflow:hidden;
	}
	.detail {
		padding-top:8px;
		font-size:0.7em;
		width: 100%;
		overflow:hidden;
		text-overflow: ellipsis;
		height:20px;
		margin:0px;
		padding:0px;
		margin-top:-7px;

	}
	.detail2 {
		padding-top:8px;
		font-size:0.7em;
		mwidth: 100%;
		overflow:hidden;
		text-overflow: ellipsis;
		height:20px;
		margin:0px;
		padding:0px;
		margin-top:-7px;
		font-style: oblique;
	}
	
	body {
		font-family: Calibri, Georgia, Palatino Linotype, Palatino, Tahoma, Arial, SunSans-Regular, sans-serif; 
	}
	
	.floor {
		width:60%;
		margin: 0 auto;
		color:#E7E7E7;
		margin-bottom:20px;
		background: none repeat scroll 0 0 #254252;
		border:1px solid #0c232f;
		border-top:5px solid #0c232f;
	}
	
	.floor-title{
		font-size:2em;
		margin-bottom: -10px;
		padding-left:5px;
		display: inline-block;
		*display: inline;
		zoom: 1;
		min-height:55px;
	}
	.floor-details{
		float:right;
		display: inline-block;
		*display: inline;
		zoom: 1;
		margin:5px;
	}
	.floor-detail{
		text-align:right;
		font-weight:100;
		line-height:normal;
		font-size:0.8em;
	}
	
	.floor-detail-total{
		text-decoration:overline;
	}
	
	table {
		border-collapse: collapse;
		text-indent: -1px;
		width: 100%;
		padding:0px;
		margin:0px;
	}
	
	.unit {
		text-align:center;
		margin:-2px auto;
		line-height:10px;
		background: none repeat scroll 0 0 #445A71;
		border:1px solid #0c232f;
		min-height:100px;
		display: inline-block;
		*display: inline;
		zoom: 1;
		width: 100%;
	}
	
	.unit-detail {
		font-weight:100;
		line-height:normal;
		font-size:0.8em;
		color:#282828
	}
	
	.unit-detail-total {
		text-decoration:overline;
	}
	
	.unit-title {
		padding:5px;
		margin-top: 10px;
		color:#091318;
		text-align:right;
		font-weight: 900;
		display: inline-block;
		*display: inline;
		zoom: 1;
	}
	
	.unit-title .unit-title-caption {
		height:100%;
	}
	
	.unit-title-caption {
		margin-bottom:10px;
	}
	
	.unit-beds {
		display: inline-block;
		*display: inline;
		zoom: 1;
		width:90%;
		margin:0px;
		padding:0px;
	}
	
	
	.legend {
		display: inline-block;
		*display: inline;
		zoom: 1;
		font-size:0.8em
	}
	.legend-occ{
		display: inline-block;
		*display: inline;
		zoom: 1;
		color:#e7e7e7;
	}
	.legend-vacant{
		display: inline-block;
		*display: inline;
		zoom: 1;
		color:#e7e7e7;
	}
	.legend-spaced{
		display: inline-block;
		*display: inline;
		zoom: 1;
	}
	.legend-occ-swatch{
		height:15px;
		width: 75px;
		background: none repeat scroll 0 0 #aa3939;
		border:1px solid #d46a6a;
	}
	.legend-vacant-swatch{
		height:15px;
		width: 75px;
		background: none repeat scroll 0 0 #2D882D;
		border: 1px solid #55AA55;
	}
	.legend-spaced-swatch{
		height:15px;
		width: 75px;
		background: none repeat scroll 0 0 #a923f3;
		border: 1px solid #d59af6;
	}		
	?>
</style>


</head>
<html>
<link type="font" name="mytimes" subtype="TrueType" src="calibri.ttf" src-bold="calibrib.ttf" src-italic="calibrii.ttf" src-bolditalic="calibribi.ttf"/>
</body>

	<title>Admissions/Discharges by Bed Dashboard Beta</title>
	
	<div class="header"">
		<div class="header-top"">
			<div  onclick="location.href='/dashboard_test';" class="atGlance-button"><i class="fa fa-bed"></i> Breakdown by Bed</div>
			<div class="header-title">Admissions/Discharges by Bed Dashboard Beta</div>
		</div>
		<div class="header-subtitle">Data Source: CERNER</div>
		<div class="header-subtitle">Data as of: April 16 2015 9:40:00</div>
		<div class="legend">
			<span class="legend-vacant">
				<div class="legend-vacant-swatch"><div class="legend-text">Vacant</div></div>
			</span>
			<span class="legend-occ">
				<div class="legend-occ-swatch"><div class="legend-text">Occupied</div></div>
			</span>
			<span class="legend-spaced">
				<div class="legend-spaced-swatch"><div class="legend-text">Bed-Spaced*</div></div>
			</span>
		</div>
		
	</div>
	
		<div class="bed-table" style="display:none;">
	
		<?php
			
			$lineCounter=0;
			$fileName=ROOTPATH."/beds.psv";

			if (file_exists($fileName))
			{
				$currFloor = " ";
				$currUnit = " ";
				$newFloor = true;
				$topUnit = false;
				$unitArray[] = "";
				$floorArray[] = "";
		
				$fileHandle=fopen($fileName,"r");
				while(!feof($fileHandle))
				{
					$lineCounter=$lineCounter+1;
					$inLine=fgets($fileHandle);
					if ($inLine != ""){
						$colArray=explode('|',trim($inLine));
						if (count($colArray) > 0 ) {
							$floor=$colArray[1];
							$floorTitle = $colArray[6];
							if ($floor != $currFloor) { 
								array_push($floorArray, $floor);
								if ($lineCounter > 1) { print "</div>"."\r\n"; }
								if ($lineCounter > 1) { print "</div>"."\r\n"; }
								if ($lineCounter > 1) { print "</div>"."\r\n"; }
								print "<div class='floor floor-" . $floor ."'>"."\r\n";
								print "<div class='floor-title'>" . $floorTitle ."</div>"."\r\n";
								print "<div class='floor-details'>"."\r\n";
								print "<div class='floor-detail' id='floor-detail-" . $floor ."'></div>"."\r\n";
								print "<div class='floor-detail' id='floor-detail2-" . $floor ."'></div>"."\r\n";
								print "<div class='floor-detail' id='floor-detail3-" . $floor ."'></div>"."\r\n";
								print "<div class='floor-detail floor-detail-total' id='floor-detail4-" . $floor ."'></div>"."\r\n";
								print "</div>"."\r\n";
								$topUnit = true;
							} else {
								$topUnit = false;
							}
							$currFloor = $floor;
							
							$unit = trim(str_replace(" ", "_", $colArray[2]));
							$unitTitle = $colArray[7];
							if ($unit != $currUnit) { 
								array_push($unitArray, $unit);
								if ($topUnit == FALSE) { print "</div>"."\r\n"; }
								if ($topUnit == FALSE) { print "</div>"."\r\n"; }
								print "<div class='unit unit-" . $unit ."' unit='". $unit ."'>"."\r\n";
								print "<div class='unit-title'><div class='unit-title-caption'>" . $unitTitle ."</div>"."\r\n";
								print "<div class='unit-detail' id='unit-detail-". $unit ."'></div>"."\r\n";
								print "<div class='unit-detail' id='unit-detail2-". $unit ."'></div>"."\r\n";
								print "<div class='unit-detail' id='unit-detail3-". $unit ."'></div>"."\r\n";
								print "<div class='unit-detail unit-detail-total ' id='unit-detail4-". $unit ."'></div>"."\r\n";
								print "</div>"."\r\n";
								print "<div class='unit-beds'>"."\r\n";
							}
							$currUnit = $unit;
							
							$bed = trim($colArray[3] . $colArray[4]);
							$bedTitle = trim($colArray[3] . $colArray[4] . " - " .  $colArray[5]);
							$service =  $colArray[9];
							print '<div class="bed floor-' . $floor .' unit-' . $unit .' service-' . $service . ' bed-' . $unit  . '" id="bed-' . $bed . '" serviceGroup="' . $service . '">';
							print	'<div class="bed-title">' . $bedTitle . '</div>';
							print	'<div class="detail detail-'. $bed . '" id="detail-' .$bed . '"></div>';
							print	'<div class="detail2 detail2-'. $bed . '" id="detail2-' .$bed . '"></div>';
							print '</div>';
						}
					}
			  }
			  if ($lineCounter > 1) { print "</div>"."\r\n"; }
			}
		?>
		</div>
	</div>
	</div>

	<div class="bed-chart">
	
		<div class="floor floor-service">
		   <div class="floor-title">By Service</div>
		   <div class="floor-units"></div>
		   <table class='unit-charts'>
				<td>
				   <div class="unit unit-Medicine" unit="Medicine">
					  <div class="unit-title">Medicine</div>
					  <div class="unit-chart">
						 <canvas id="unit-chart-Medicine" height="200" width="200" style="width: 200px; height: 200px;"></canvas>
					  </div>
				   </div>
				</td>
				<td>
				   <div class="unit unit-Surgery" unit="Surgery">
					  <div class="unit-title">Surgery</div>
					  <div class="unit-chart">
						 <canvas id="unit-chart-Surgery" height="200" width="200" style="width: 200px; height: 200px;"></canvas>
					  </div>
				   </div>
			   </td>
		   </table>
		</div>
	
		<?php
			
			$lineCounter=0;
			$fileName=ROOTPATH."/beds.psv";

			if (file_exists($fileName))
			{
				$currFloor = " ";
				$currUnit = " ";
				$newFloor = true;
				$topUnit = false;
		
				$fileHandle=fopen($fileName,"r");
				while(!feof($fileHandle))
				{
					$lineCounter=$lineCounter+1;
					$inLine=fgets($fileHandle);
					if ($inLine != ""){
						$colArray=explode('|',trim($inLine));
						if (count($colArray) > 0 ) {
							$floor=$colArray[1];
							$floorTitle = $colArray[6];
							if ($floor != $currFloor) { 
								if ($lineCounter > 1) { print "</tr></table>"."\r\n"; }
								if ($lineCounter > 1) { print "</div>"."\r\n"; }
								if ($lineCounter > 1) { print "</div>"."\r\n"; }
								if ($lineCounter > 1) { print "</div>"."\r\n"; }
								print "<div class='floor floor-" . $floor ."'>"."\r\n";
								print "<div class='floor-title'>" . $floorTitle ."</div>"."\r\n";
								print "<div class='floor-units'></div>"."\r\n";
								$topUnit = true;
							} else {
								$topUnit = false;
							}
							$currFloor = $floor;
							
							$unit = trim(str_replace(" ", "_", $colArray[2]));
							$unitTitle = $colArray[7];
							if ($unit != $currUnit) { 
								if ($topUnit == FALSE) { 
									print "</div>"."\r\n";
									print "</div>"."\r\n"; 
									print "</div>"."\r\n"; 
								}
								if ($topUnit == TRUE) {
									print "<table class='unit-charts'>"."\r\n";
									print "<tr>"."\r\n";
								}
								print "<td>"."\r\n";
								print "<div class='unit unit-" . $unit ."' unit='". $unit ."'>"."\r\n";
								print "<div class='unit-title'>" . $unitTitle ."</div>"."\r\n";
								print "<div class='unit-chart'>"."\r\n";
								print '<canvas id="unit-chart-' . $unit .'" width="200" height="200"></canvas>'."\r\n";
								print "</td>"."\r\n";
							}
							$currUnit = $unit;
						}
					}
			  }
			  if ($lineCounter > 1) { print "</tr></table>"."\r\n"; }
			  if ($lineCounter > 1) { print "</div>"."\r\n"; }
			}
		?>
		</div>
	</div>
	
	<div class="footer">
		<p>*Bed-Spaced: A Medicine patient in a Surgery bed, or a Surgery patient in a Medicine bed.<br>
		Medicine Service = Anesthesiology, Endocrinology, Family Medicine, Gastroenterology, General Medicine, Infectious Disease, Nephrology, Oncology, Radiology, Respirology, Stroke Red.<br>
		Surgery Service = CCI - Breast, CCI - Digestive, CCI - GU, CCI - Gyne, CCI - HNK, CCI - Joint, CCI - Ocular, CCI - Sarcoma, Dentistry, General Surgery, Gynecology, Ophthalmology, Ortho Reconstructive, Ortho Sarcoma, Orthopedic Surgery, Otolaryngology, Plastic Surgery, Thoracic Surgery, Urology, Gastroenterology<br>
		Note: Gastroenterology Patients in a Medicine bed are counted as Medicine UNIT. Gastroenterology Patients in a Surgery bed are counted as Surgery UNIT</p>
	</div>

</body>
</html>

<script src="../Chart.js" type="text/javascript"></script>

<script type="text/javascript">

<?php
		print "function autorun() {"."\r\n";
			
		$lineCounter=0;
		$fileName=ROOTPATH."/inpatients2.psv";

		if (file_exists($fileName))
		{
			
			$servicesFileName=ROOTPATH."/services.psv";
			$fileHandle=fopen($servicesFileName,"r");
			$med_serv="";
			$service="";
			while(!feof($fileHandle))
			{
				$lineCounter=$lineCounter+1;
				$inLine=fgets($fileHandle);
				if ($inLine != ""){
					$colArray=explode('|',$inLine);
					$med_serv = trim($colArray[0]);
					$serviceGroup = trim($colArray[1]);
					$serviceArray[$med_serv] = $serviceGroup;
				}
			}
			
			$fileHandle=fopen($fileName,"r");
			while(!feof($fileHandle))
			{
				$lineCounter=$lineCounter+1;
				$inLine=fgets($fileHandle);
				if ($inLine != ""){
					$colArray=explode('|',$inLine);
					
					$colBed = trim($colArray[1]) . trim($colArray[2]);
					$colService = trim($colArray[11]);
					if (array_key_exists($colService,$serviceArray)){
						$colServiceGroup = $serviceArray[$colService];
					} else {
						$colServiceGroup = "";
					}
					
					if ( trim($colArray[7]) != null) {
						$date = date_create(trim($colArray[2]));
						print 'bedEle = document.getElementById("bed-' . $colBed . '");'."\r\n";
						print 'bedDetailEle = document.getElementById("detail-' . $colBed . '");'."\r\n";
						print 'bedDetail2Ele = document.getElementById("detail2-' . $colBed . '");'."\r\n";
						print 'if(bedEle != null) {'."\r\n";
						print '		serviceGroupBed = bedEle.getAttribute("serviceGroup")'."\r\n";
						print 'if(serviceGroupBed == "'. $colServiceGroup .'" || "Both" == "'. $colServiceGroup .'") {;'."\r\n";
						print '		bedEle.style.backgroundColor = "#aa3939";'."\r\n";
						print '		bedEle.style.borderColor = "#d46a6a";'."\r\n";
						print '		bedEle.style.color = "#e7e7e7";'."\r\n";
						print '		bedEle.className = bedEle.className + " bed-occupied"'."\r\n";
						print '} else {'."\r\n";
						print '		bedEle.style.backgroundColor = "#a923f3";'."\r\n";
						print '		bedEle.style.borderColor = "#d59af6";'."\r\n";
						print '		bedEle.className = bedEle.className + " bed-spaced"'."\r\n";
						print "}"."\r\n";
						print '		bedDetailEle.innerHTML = "' . $colService . '";'."\r\n";
						print '		bedDetail2Ele.innerHTML = "' . str_replace("'","", trim($colArray[15])) . '";'."\r\n";
						print "}"."\r\n";
					}
				}
				
				
		  }
			foreach($unitArray as &$unit){
				print 'unitDetailEle = document.getElementById("unit-detail-' . $unit . '");'."\r\n";
				print 'unitDetailEle2 = document.getElementById("unit-detail2-' . $unit . '");'."\r\n";
				print 'unitDetailEle3 = document.getElementById("unit-detail3-' . $unit . '");'."\r\n";
				print 'unitDetailEle4 = document.getElementById("unit-detail4-' . $unit . '");'."\r\n";
				print 'if(unitDetailEle != null) {'."\r\n";
				print '		totalBedCount = document.querySelectorAll(".unit-' . $unit . ' .bed").length'."\r\n";
				print '		occupiedCount = document.querySelectorAll(".unit-' . $unit . ' .bed-occupied").length'."\r\n";
				print '		spacedCount = document.querySelectorAll(".unit-' . $unit . ' .bed-spaced").length'."\r\n";
				print '		vacantCount = totalBedCount - occupiedCount - spacedCount'."\r\n";
				print '		unitDetailEle.innerHTML = "Vacant: " + vacantCount + " (%" + Number(vacantCount/totalBedCount*100).toFixed(0) +")";'."\r\n";
				print '		unitDetailEle2.innerHTML = "Occupied: " + occupiedCount + " (%" + Number(occupiedCount/totalBedCount*100).toFixed(0) +")";'."\r\n";
				print '		unitDetailEle3.innerHTML = "Bed-Spaced: " + spacedCount + " (%" + Number(spacedCount/totalBedCount*100).toFixed(0) +")";'."\r\n";
				print '		unitDetailEle4.innerHTML = "Total Beds: " + totalBedCount;'."\r\n";
				print "}"."\r\n";
			}
			
			foreach($floorArray as &$floor){
				print 'floorDetailEle = document.getElementById("floor-detail-' . $floor . '");'."\r\n";
				print 'floorDetailEle2 = document.getElementById("floor-detail2-' . $floor . '");'."\r\n";
				print 'floorDetailEle3 = document.getElementById("floor-detail3-' . $floor . '");'."\r\n";
				print 'floorDetailEle4 = document.getElementById("floor-detail4-' . $floor . '");'."\r\n";
				print 'if(floorDetailEle != null) {'."\r\n";
				print '		totalBedCount = document.querySelectorAll(".floor-' . $floor . ' .bed").length'."\r\n";
				print '		occupiedCount = document.querySelectorAll(".floor-' . $floor . ' .bed-occupied").length'."\r\n";
				print '		spacedCount = document.querySelectorAll(".floor-' . $floor . ' .bed-spaced").length'."\r\n";
				print '		vacantCount = totalBedCount - occupiedCount - spacedCount'."\r\n";
				print '		floorDetailEle.innerHTML = "Vacant: " + vacantCount + " (%" + Number(vacantCount/totalBedCount*100).toFixed(0) +")";'."\r\n";
				print '		floorDetailEle2.innerHTML = "Occupied: " + occupiedCount + " (%" + Number(occupiedCount/totalBedCount*100).toFixed(0) +")";'."\r\n";
				print '		floorDetailEle3.innerHTML = "Bed-Spaced: " + spacedCount + " (%" + Number(spacedCount/totalBedCount*100).toFixed(0) +")";'."\r\n";
				print '		floorDetailEle4.innerHTML = "Total Beds: " + totalBedCount;'."\r\n";
				print "}"."\r\n";
			}
			
			print "		"."\r\n";
		  
		}
		
	
	?>

options = {
                //Boolean - Show a backdrop to the scale label
                scaleShowLabelBackdrop: true,
                //String - The colour of the label backdrop
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                // Boolean - Whether the scale should begin at zero
                scaleBeginAtZero: true,
                //Number - The backdrop padding above & below the label in pixels
                scaleBackdropPaddingY: 2,
                //Number - The backdrop padding to the side of the label in pixels
                scaleBackdropPaddingX: 2,
                //Boolean - Show line for each value in the scale
                scaleShowLine: true,
                //Boolean - Stroke a line around each segment in the chart
                segmentShowStroke: true,
                //String - The colour of the stroke on each segement.
                segmentStrokeColor: "#445A71",
                //Number - The width of the stroke value in pixels
                segmentStrokeWidth: 2,
                //Number - Amount of animation steps
                animationSteps: 20,
                //String - Animation easing effect.
                animationEasing: "easeInOutSine",
                //Boolean - Whether to animate the rotation of the chart
                animateRotate: true,
                //Boolean - Whether to animate scaling the chart from the centre
                animateScale: true,
                //String - A legend template
                legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
            };
			
	
		<?php
				print 'timeOut = 100;'."\r\n";
		
				$service = "Medicine";
				print 'setTimeout(function(){'."\r\n";
				print 'var ctxEle = document.getElementById("unit-chart-Medicine")'."\r\n";
				print 'if(ctxEle != null) {'."\r\n";
				print '		totalBedCount = document.querySelectorAll(".service-' . $service . '").length'."\r\n";
				print '		occupiedCount = document.querySelectorAll(".service-' . $service . '.bed-occupied").length'."\r\n";
				print '		spacedCount = document.querySelectorAll(".service-' . $service . '.bed-spaced").length'."\r\n";
				print '		vacantCount = totalBedCount - occupiedCount - spacedCount'."\r\n";
				print '		var ctx = ctxEle.getContext("2d");'."\r\n";
				print '		data = ['."\r\n";
				print '    {'."\r\n";
				print '        value: vacantCount,'."\r\n";
				print '        color: "#2d882d",'."\r\n";
				print '        highlight: "#2d882d",'."\r\n";
				print '        label: "Vacant",'."\r\n";
				print '        labelColor : "white",'."\r\n";
				print '        labelFontSize : "16"'."\r\n";
				print '    },'."\r\n";
				print '    {'."\r\n";
				print '        value: occupiedCount,'."\r\n";
				print '        color: "#aa3939",'."\r\n";
				print '        highlight: "#d46a6a",'."\r\n";
				print '        label: "Occupied"'."\r\n";
				print '    },'."\r\n";
				print '    {'."\r\n";
				print '        value: spacedCount,'."\r\n";
				print '        color: "#a923f3",'."\r\n";
				print '        highlight: "#d59af6",'."\r\n";
				print '        label: "Bed Spaced"'."\r\n";
				print '    }'."\r\n";
				print '];'."\r\n";
				print 'var myPieChart = new Chart(ctx).Pie(data,options);'."\r\n";
				print "}"."\r\n";
				print '}, timeOut);'."\r\n";
				print 'timeOut = timeOut + 100;'."\r\n";
				
				$service = "Surgery";
				print 'setTimeout(function(){'."\r\n";
				print 'var ctxEle = document.getElementById("unit-chart-'. $service .'")'."\r\n";
				print 'if(ctxEle != null) {'."\r\n";
				print '		totalBedCount = document.querySelectorAll(".service-' . $service . '").length'."\r\n";
				print '		occupiedCount = document.querySelectorAll(".service-' . $service . '.bed-occupied").length'."\r\n";
				print '		spacedCount = document.querySelectorAll(".service-' . $service . '.bed-spaced").length'."\r\n";
				print '		vacantCount = totalBedCount - occupiedCount - spacedCount'."\r\n";
				print '		var ctx = ctxEle.getContext("2d");'."\r\n";
				print '		data = ['."\r\n";
				print '    {'."\r\n";
				print '        value: vacantCount,'."\r\n";
				print '        color: "#2d882d",'."\r\n";
				print '        highlight: "#2d882d",'."\r\n";
				print '        label: "Vacant"'."\r\n";
				print '    },'."\r\n";
				print '    {'."\r\n";
				print '        value: occupiedCount,'."\r\n";
				print '        color: "#aa3939",'."\r\n";
				print '        highlight: "#d46a6a",'."\r\n";
				print '        label: "Occupied"'."\r\n";
				print '    },'."\r\n";
				print '    {'."\r\n";
				print '        value: spacedCount,'."\r\n";
				print '        color: "#a923f3",'."\r\n";
				print '        highlight: "#d59af6",'."\r\n";
				print '        label: "Bed Spaced"'."\r\n";
				print '    }'."\r\n";
				print '];'."\r\n";
				print 'var myPieChart = new Chart(ctx).Pie(data,options);'."\r\n";
				print "}"."\r\n";
				print '}, timeOut);'."\r\n";
				print 'timeOut = timeOut + 100;'."\r\n";
	
		foreach($unitArray as &$unit){
			if ($unit != ""){
				print 'setTimeout(function(){'."\r\n";
				print 'var ctxEle = document.getElementById("unit-chart-'. $unit .'")'."\r\n";
				print 'if(ctxEle != null) {'."\r\n";
				print '		totalBedCount = document.querySelectorAll(".unit-' . $unit . ' .bed").length || 0.001'."\r\n";
				print '		occupiedCount = document.querySelectorAll(".unit-' . $unit . ' .bed-occupied").length || 0.001'."\r\n";
				print '		spacedCount = document.querySelectorAll(".unit-' . $unit . ' .bed-spaced").length || 0.001'."\r\n";
				print '		vacantCount = totalBedCount - occupiedCount - spacedCount'."\r\n";
				print '		if (vacantCount<0) { vacantCount=0; }'."\r\n";
				print '		var ctx = ctxEle.getContext("2d");'."\r\n";
				print '		data = ['."\r\n";
				print '    {'."\r\n";
				print '        value: vacantCount,'."\r\n";
				print '        color: "#2d882d",'."\r\n";
				print '        highlight: "#2d882d",'."\r\n";
				print '        label: "Vacant"'."\r\n";
				print '    },'."\r\n";
				print '    {'."\r\n";
				print '        value: occupiedCount,'."\r\n";
				print '        color: "#aa3939",'."\r\n";
				print '        highlight: "#d46a6a",'."\r\n";
				print '        label: "Occupied"'."\r\n";
				print '    },'."\r\n";
				print '    {'."\r\n";
				print '        value: spacedCount,'."\r\n";
				print '        color: "#a923f3",'."\r\n";
				print '        highlight: "#d59af6",'."\r\n";
				print '        label: "Bed Spaced"'."\r\n";
				print '    }'."\r\n";
				print '];'."\r\n";
				print 'var myPieChart = new Chart(ctx).Pie(data,options);'."\r\n";
				print "}"."\r\n";
				print '}, timeOut);'."\r\n";
				print 'timeOut = timeOut + 100;'."\r\n";
			}
		}
		
		print "		"."\r\n";
		print "}"."\r\n";
		print"window.onload = autorun;"."\r\n";
		  
		
	
	?>

</script>




<?php
header("Expires: " . gmdate("D, d M Y H:i:s", time() + (0*60)) . " GMT");
define('ROOTPATH', __DIR__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 8]>
<script src="/IE8.js"></script>
<![endif]-->

<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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
		color:#e7e7e7;
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
		width:95%;
		margin: 0 auto;
		margin-top:-20px;
	}

	.bed {
		background: none repeat scroll 0 0 #2d882d;
		border: 1px solid #55aa55;
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
		width:95%;
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
		min-height:90px;
		width:85%;
	}
	.floor-details{
		width:10%;
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
	
	.unit {
		background: none repeat scroll 0 0 #445A71;
		text-align:left;
		padding:5px;
		margin:-1px;
		line-height:10px;
		border:1px solid #0c232f;
		min-height:100px
	}
	
	.unit-detail {
		font-weight:100;
		line-height:normal;
		font-size:0.8em;
		color:#e7e7e7
	}
	
	.unit-detail-total {
		text-decoration:overline;
	}
	
	.unit-title {
		margin-top: 10px;
		color:#091318;
		float:right;
		text-align:right;
		font-weight: 900;
		display: inline-block;
		*display: inline;
		zoom: 1;
		width:10%;
		
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
		color:#e7e7e7;
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
		background: none repeat scroll 0 0 #2d882d;
		border: 1px solid #55aa55;
	}
	.legend-spaced-swatch{
		height:15px;
		width: 75px;
		background: none repeat scroll 0 0 #a923f3;
		border: 1px solid #d59af6;
	}	
	?>
</style>



<html>
<link type="font" name="mytimes" subtype="TrueType" src="calibri.ttf" src-bold="calibrib.ttf" src-italic="calibrii.ttf" src-bolditalic="calibribi.ttf"/>
</body>

	<title>Admissions/Discharges by Bed Dashboard Beta</title>
	
	<div class="header"">
		<div class="header-top"">
			<div class="header-title">Admissions/Discharges by Bed Dashboard Beta</div>
			<a onclick="location.href='./summary';" class="atGlance-button"><i class="fa fa-pie-chart"></i> Summary</a>
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
	
	

	<div class="bed-chart">
	
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
								print "<div class='floor-details'>"."\r\n";
								print "<div class='floor-detail' id='floor-detail-" . $floor ."'></div>"."\r\n";
								print "<div class='floor-detail' id='floor-detail2-" . $floor ."'></div>"."\r\n";
								print "<div class='floor-detail' id='floor-detail3-" . $floor ."'></div>"."\r\n";
								print "<div class='floor-detail floor-detail-total' id='floor-detail4-" . $floor ."'></div>"."\r\n";
								print "</div>"."\r\n";
								print "<div class='floor-title'>" . $floorTitle ."</div>"."\r\n";
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
							print '<div class="bed floor-' . $floor .' unit-' . $unit .' bed-' . $service . ' bed-' . $unit  . '" id="bed-' . $bed . '" serviceGroup="' . $service . '">';
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
	
	<div class="footer">
		<p>*Bed-Spaced: A GIM patient in a Surgery bed, or a Surgery patient in a GIM bed.<br>
		GIM Service = Anesthesiology, Endocrinology, Family Medicine, Gastroenterology, General Medicine, Infectious Disease, Nephrology, Oncology, Radiology, Respirology, Stroke Red.<br>
		Surgery Service = CCI - Breast, CCI - Digestive, CCI - GU, CCI - Gyne, CCI - HNK, CCI - Joint, CCI - Ocular, CCI - Sarcoma, Dentistry, General Surgery, Gynecology, Ophthalmology, Ortho Reconstructive, Ortho Sarcoma, Orthopedic Surgery, Otolaryngology, Plastic Surgery, Thoracic Surgery, Urology, Gastroenterology<br>
		Note: Gastroenterology Patients in a GIM bed are counted as GIM UNIT. Gastroenterology Patients in a Surgery bed are counted as Surgery UNIT</p>
	</div>

</body>
</html>

<script type="text/javascript">
		<?php
	

		$lineCounter=0;
		$fileName=ROOTPATH."/inpatients2.psv";

		if (file_exists($fileName))
		{
			print "function autorun() {"."\r\n";
			
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
			
			print "}"."\r\n";
			print"window.onload = autorun;"."\r\n";
		  
		}
		
	
	?>

</script>


<html>
<body>

<form action="." method="post">
	<div class="filters">
		<input type="button" value="Filters" id="filterIt" />
		<select id="viewType">
			<option selected value="simple">Simple View</option>
			<option value="filtered">Filtered View</option>
			<option value="full">Full View</option>
		</select>
		<label>Search: </label>
		<input id="keyword" type="text" name="searchbox" />
		<input id="btn_search" type="image" src="" alt="Submit" width="35" height="35" name="action" value="search" />
	</div>
	<div class="item" style="display:block"></div>
	<div class="item" style="display:none">
	<?php 
	for($i = 0; $i < count($cat); $i++){
		$c = 0;
		if($cat[$i] == 'entry'){
			$join = "INNER JOIN entries_miniatures a ON(entries.id = a.entry_id) JOIN miniatures s ON(a.miniature_id = s.id)";
		}elseif($cat[$i] == 'stat'){
			$join = "INNER JOIN stats_miniatures a ON(stats.id = a.stat_id) JOIN miniatures s ON(a.miniature_id = s.id)";
		}else{
		$join = "INNER JOIN miniatures a ON($catmin[$i] = a.$cattab[$i])";
		}//end else
		$oGallery = $cat[$i]::all(array('group' => $catmin[$i], 'joins' => $join));
			foreach($oGallery as $oGall){
				$c++;
			}
			$tmp[] = $c;
	 }
		array_multisort($tmp, SORT_ASC, $lbl, $cat, $catmin, $cattab);
	?>
		
	<?php 
	for($i = 0; $i < count($cat); $i++){
	?><fieldset><legend><?php echo $lbl[$i]; ?></legend>
		<?php
		if($cat[$i] == 'entry'){
			$join = "INNER JOIN entries_miniatures a ON(entries.id = a.entry_id) JOIN miniatures s ON(a.miniature_id = s.id)";
		}elseif($cat[$i] == 'stat'){
			$join = "INNER JOIN stats_miniatures a ON(stats.id = a.stat_id) JOIN miniatures s ON(a.miniature_id = s.id)";
		}else{
		$join = "INNER JOIN miniatures a ON($catmin[$i] = a.$cattab[$i])";
		}//end else
		$oGallery = $cat[$i]::all(array('order' => $catsort[$i], 'group' => $catmin[$i], 'joins' => $join));
			foreach($oGallery as $oGall){
			?><input type="checkbox" name="<?php echo $cat[$i];?>[]" value="<?php echo $oGall->id; ?>" <?php 

				$sField = $cat[$i];
				if(isset($aSz) && array_key_exists($sField, $aSz)){
					$bChecked = false;
					foreach($aSz[$sField] as $sValue){
						if($sValue == $oGall->id){
							$bChecked = true;
						}//end if
					}//end foreach
					if($bChecked){
						echo 'checked="checked"';
					}// end else
				}//end if
			
			?> /> <?php echo $oGall->label; ?><br /><?php 
			}// end for
			?></fieldset><?php }?></div>
</form>
</body>

</html>

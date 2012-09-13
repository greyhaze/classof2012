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
	for($k = 0; $k < count($mast); $k++){
	?>
	<fieldset><legend><?php echo $lbl[$k]; ?></legend>
		<?php
		$tmp=array("");
		array_multisort($mast[$k], SORT_ASC);
		for($i = 0; $i < count($mast[$k]); $i++){
			if(!array_search($mast[$k][$i], $tmp, true)){
				$tmp[]=$mast[$k][$i]; ?>
				<input type="checkbox" name="<?php echo $nam[$k];?>[]" value="<?php echo $mast[$k][$i]; ?>" /> <?php echo $mast[$k][$i]; ?><br />
				<?php 
			}// end if
		}// end for
		?></fieldset>
	<?php }; ?>
</div>
</form>
</body>

</html>
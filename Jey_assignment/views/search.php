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

<!-- 
	<legend>SIZE: </legend>
	<legend>RARITY: </legend>
	<legend>TYPE: </legend>
	<legend>PLACE OF ORIGIN: </legend>
	<legend>GENDER: </legend>
	<legend>CLASS: </legend>
	<legend>WEAPONS: </legend>
	<legend>ARMOUR: </legend>
	<legend>MANUALS: </legend>
	<legend>STATS: </legend>
	<legend>SET: </legend>
	<legend>PRODUCTION LINE: </legend>
	<legend>MANUFACTURER: </legend>
	<legend>STREET DATE BY YEAR: </legend>



	<div class="name">Alu Demon</div>
	<img src="./views/images/pfb_02/alu_demon.jpg" alt="Demon woman with bat wings and skimpy clothes" />
	<div class="size">Medium</div>
	<div class="rarity">Common</div>
	<div class="gender">Gender: Female</div>
	<div class="race">Race: Alu Demon</div>
	<div class="class">Class: NA</div>
	<div class="details">Description: Demonic chick with skimpy clothes</div>
	<div class="weapons">Unarmed</div>
	<div class="armour">Unarmoured</div>
	<div class="alts">Alternate Paint: NA</div>
	<div class="entry">D&D Fiend Folio: Alu Demon (pg107)</div>
	<div class="entry">D&D Monster Manual I: Alu Demon (pg202)</div>
	<div class="entry">PF Bestiary I: Alu Demon (pg22)</div>
	<div class="stats">DDM1 | DDM2.0 | Heroscape</div>
	<div class="set">Heroes and Monsters</div>
	<div class="productionline">Pathfinder Battles</div>
	<div class="manufacturer">Paizo/WizKidz</div>
	<div class="streetdate">Street Date: Aug, 2012</div>
	<div class="sources"><a href="http://paizo.com/paizo/blog/v5748dyo5ldab?Pathfinder-Battles-Preview-A-Salute-to-Evil" target="_blank">Source 1</a> | Source 2</div>
 -->
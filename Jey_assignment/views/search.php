<?php


foreach(gallery::find('all', array('conditions' => array('type in (?) AND origin in (?)', array('aberration', 'construct', 'humanoid'), array('abyss', 'hell', 'material plane')))) as $oGallery){
//	echo $oGallery->size;
	}//foreach
	

?>

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
	<fieldset><legend>SIZE: </legend>
		<input type="checkbox" name="size[]" value="Tiny" /> Tiny<br />
		<input type="checkbox" name="size[]" value="Small" /> Small<br />
		<input type="checkbox" name="size[]" value="Medium" /> Medium<br />
		<input type="checkbox" name="size[]" value="Large" /> Large 2x2<br />
		<input type="checkbox" name="size[]" value="Huge" /> Huge 3x3<br />
		<input type="checkbox" name="size[]" value="Gargantuan" /> Gargantuan 4x4<br />
		<input type="checkbox" name="size[]" value="Colossal" /> Colossal 6x6<br />
	</fieldset><fieldset><legend>RARITY: </legend>
		<input type="checkbox" name="rarity[]" value="None" /> No Rarity<br />
		<input type="checkbox" name="rarity[]" value="Common" /> Common<br />
		<input type="checkbox" name="rarity[]" value="Uncommon" /> Uncommon<br />
		<input type="checkbox" name="rarity[]" value="Rare" /> Rare<br />
	</fieldset><fieldset><legend>TYPE: </legend>
		<input type="checkbox" name="type[]" value="Aberration" /> Aberration<br />
		<input type="checkbox" name="type[]" value="Animal" /> Animal<br />
		<input type="checkbox" name="type[]" value="Construct" /> Construct<br />
		<input type="checkbox" name="type[]" value="Giant" /> Giant<br />
		<input type="checkbox" name="type[]" value="Humanoid" /> Humanoid<br />
		<input type="checkbox" name="type[]" value="Magical Beast" /> Magical Beast<br />
		<input type="checkbox" name="type[]" value="Monstrous Humanoid" /> Monstrous Humanoid<br />
		<input type="checkbox" name="type[]" value="Outsider" /> Outsider<br />
		<input type="checkbox" name="type[]" value="Plant" /> Plant<br />
		<input type="checkbox" name="type[]" value="Undead" /> Undead<br />
	</fieldset><fieldset><legend>PLACE OF ORIGIN: </legend>
		<input type="checkbox" name="origin[]" value="Abyss" /> Abyss<br />
		<input type="checkbox" name="origin[]" value="Hell" /> Hell<br />
		<input type="checkbox" name="origin[]" value="Material Plane" /> Material Plane<br />
	</fieldset><fieldset><legend>GENDER: </legend>
		<input type="checkbox" name="gender[]" value="NA" /> NA<br />
		<input type="checkbox" name="gender[]" value="Female" /> Female<br />
		<input type="checkbox" name="gender[]" value="Male" /> Male<br />
	</fieldset><fieldset><legend>CLASS: </legend>
		<input type="checkbox" name="class[]" value="NA" /> NA<br />
		<input type="checkbox" name="class[]" value="Cleric" /> Cleric<br />
		<input type="checkbox" name="class[]" value="Fighter" /> Fighter<br />
		<input type="checkbox" name="class[]" value="Noble" /> Noble<br />
		<input type="checkbox" name="class[]" value="Warrior" /> Warrior<br />
		<input type="checkbox" name="class[]" value="Wizard" /> Wizard<br />
	</fieldset><fieldset><legend>WEAPONS: </legend>
		<input type="checkbox" name="weapons[]" value="Unarmed" /> Unarmed<br />
		<input type="checkbox" name="weapons[]" value="Cane" /> Cane<br />
		<input type="checkbox" name="weapons[]" value="Dual Wielding" /> Dual Wielding<br />
		<input type="checkbox" name="weapons[]" value="Exotic" /> Exotic Weapon<br />
		<input type="checkbox" name="weapons[]" value="Staff" /> Staff<br />
		<input type="checkbox" name="weapons[]" value="Polearm" /> Polearm<br />
		<input type="checkbox" name="weapons[]" value="Pick" /> Pick<br />
	</fieldset><fieldset><legend>ARMOUR: </legend>
		<input type="checkbox" name="armour[]" value="Unarmoured" /> Unarmoured<br />
		<input type="checkbox" name="armour[]" value="Light" /> Light Armour<br />
		<input type="checkbox" name="armour[]" value="Medium" /> Medium Armour<br />
		<input type="checkbox" name="armour[]" value="Heavy" /> Heavy Armour<br />
	</fieldset><fieldset><legend>MANUALS: </legend>
		<input type="checkbox" name="source[]" value="FiendFolio" /> Fiend Folio<br />
		<input type="checkbox" name="source[]" value="MonsterManual" /> Monster Manual<br />
		<input type="checkbox" name="source[]" value="MonsterManual2" /> Monster Manual 2<br />
	</fieldset><fieldset><legend>STATS: </legend>
		<input type="checkbox" name="stats[]" value="DDM" /> DDM<br />
		<input type="checkbox" name="stats[]" value="DDM2.0" /> DDM2.0<br />
		<input type="checkbox" name="stats[]" value="Heroscape" /> Heroscape<br />
	</fieldset><fieldset><legend>SET: </legend>
		<input type="checkbox" name="setname[]" value="PFB_HaM" /> Heroes &amp; Monsters<br />
		<input type="checkbox" name="setname[]" value="PFB_RotR" /> Rise of the Runelords<br />
		<input type="checkbox" name="setname[]" value="PFB_SS" /> Shattered Star<br />
	</fieldset><fieldset><legend>PRODUCTION LINE: </legend>
		<input type="checkbox" name="productionline[]" value="DCM" /> Dungeon Crawler Minis (DCM)<br />
		<input type="checkbox" name="productionline[]" value="DDM" /> Dungeon &amp; Dragons Miniatures (DDM)<br />
		<input type="checkbox" name="productionline[]" value="PFB" /> Pathfinder Battles (PFB)<br />
	</fieldset><fieldset><legend>MANUFACTURER: </legend>
		<input type="checkbox" name="manufacturer[]" value="GVN" /> Gifted Vision inc. (GVN)<br />
		<input type="checkbox" name="manufacturer[]" value="PZO" /> Paizo / WizKids (PZO)<br />
		<input type="checkbox" name="manufacturer[]" value="WotC" /> Wizards of the Coast (WotC)<br />
	</fieldset><fieldset><legend>STREET DATE BY YEAR: </legend>
		<input type="checkbox" name="streetdate[]" value="2012" /> 2012<br />
		<input type="checkbox" name="streetdate[]" value="2011" /> 2011<br />
		<input type="checkbox" name="streetdate[]" value="2010" /> 2010<br />
	</fieldset>
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
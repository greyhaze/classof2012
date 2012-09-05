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
		<input id="keyword" type="text" name="search" />
		<input id="btn_search" type="image" src="" alt="Submit" width="35" height="35" name="action" value="search" />
	</div>
	<div class="item" style="display:block"></div>
	<div class="item" style="display:none">
	<fieldset><legend>SIZE: </legend>
		<input type="checkbox" name="size[]" value="tiny" /> Tiny<br />
		<input type="checkbox" name="size[]" value="small" /> Small<br />
		<input type="checkbox" name="size[]" value="medium" /> Medium<br />
		<input type="checkbox" name="size[]" value="large" /> Large 2x2<br />
		<input type="checkbox" name="size[]" value="huge" /> Huge 3x3<br />
		<input type="checkbox" name="size[]" value="gargantuan" /> Gargantuan 4x4<br />
		<input type="checkbox" name="size[]" value="colossal" /> Colossal 6x6<br />
	</fieldset><fieldset><legend>RARITY: </legend>
		<input type="checkbox" name="rarity" value="none" /> No Rarity<br />
		<input type="checkbox" name="rarity" value="common" /> Common<br />
		<input type="checkbox" name="rarity" value="uncommon" /> Uncommon<br />
		<input type="checkbox" name="rarity" value="rare" /> Rare<br />
	</fieldset><fieldset><legend>TYPE: </legend>
		<input type="checkbox" name="type" value="aberration" /> Aberration<br />
		<input type="checkbox" name="type" value="animal" /> Animal<br />
		<input type="checkbox" name="type" value="construct" /> Construct<br />
		<input type="checkbox" name="type" value="giant" /> Giant<br />
		<input type="checkbox" name="type" value="humanoid" /> Humanoid<br />
		<input type="checkbox" name="type" value="magical beast" /> Magical Beast<br />
		<input type="checkbox" name="type" value="monstrous humanoid" /> Monstrous Humanoid<br />
		<input type="checkbox" name="type" value="outsider" /> Outsider<br />
		<input type="checkbox" name="type" value="plant" /> Plant<br />
		<input type="checkbox" name="type" value="undead" /> Undead<br />
	</fieldset><fieldset><legend>PLACE OF ORIGIN: </legend>
		<input type="checkbox" name="origin" value="abyss" /> Abyss<br />
		<input type="checkbox" name="origin" value="hell" /> Hell<br />
		<input type="checkbox" name="origin" value="material plane" /> Material Plane<br />
	</fieldset><fieldset><legend>GENDER: </legend>
		<input type="checkbox" name="gender" value="na" /> NA<br />
		<input type="checkbox" name="gender" value="female" /> Female<br />
		<input type="checkbox" name="gender" value="male" /> Male<br />
	</fieldset><fieldset><legend>CLASS: </legend>
		<input type="checkbox" name="class" value="na" /> NA<br />
		<input type="checkbox" name="class" value="cleric" /> Cleric<br />
		<input type="checkbox" name="class" value="fighter" /> Fighter<br />
		<input type="checkbox" name="class" value="wizard" /> Wizard<br />
	</fieldset><fieldset><legend>WEAPONS: </legend>
		<input type="checkbox" name="weapon" value="unarmed" /> Unarmed<br />
		<input type="checkbox" name="weapon" value="bowcrossbow" /> Bow/Crossbow<br />
		<input type="checkbox" name="weapon" value="dualwielding" /> Dual Wielding<br />
		<input type="checkbox" name="weapon" value="exotic" /> Exotic Weapon<br />
		<input type="checkbox" name="weapon" value="staffwand" /> Staff/Wand/Scepter<br />
		<input type="checkbox" name="weapon" value="swordboard" /> Sword/Board<br />
		<input type="checkbox" name="weapon" value="twohanded" /> Two Handed Weapon<br />
	</fieldset><fieldset><legend>ARMOUR: </legend>
		<input type="checkbox" name="armour" value="Unarmoured" /> Unarmoured<br />
		<input type="checkbox" name="armour" value="LightArmour" /> Light Armour<br />
		<input type="checkbox" name="armour" value="MediumArmour" /> Medium Armour<br />
		<input type="checkbox" name="armour" value="HeavyArmour" /> Heavy Armour<br />
	</fieldset><fieldset><legend>MANUALS: </legend>
		<input type="checkbox" name="entry" value="FiendFolio" /> Fiend Folio<br />
		<input type="checkbox" name="entry" value="MonsterManual" /> Monster Manual<br />
		<input type="checkbox" name="entry" value="MonsterManual2" /> Monster Manual 2<br />
	</fieldset><fieldset><legend>STATS: </legend>
		<input type="checkbox" name="stats" value="DDM" /> DDM<br />
		<input type="checkbox" name="stats" value="DDM2" /> DDM2.0<br />
		<input type="checkbox" name="stats" value="Heroscape" /> Heroscape<br />
	</fieldset><fieldset><legend>SET: </legend>
		<input type="checkbox" name="set" value="PFB_HaM" /> Heroes &amp; Monsters<br />
		<input type="checkbox" name="set" value="PFB_RotR" /> Rise of the Runelords<br />
		<input type="checkbox" name="set" value="PFB_SS" /> Shattered Star<br />
	</fieldset><fieldset><legend>PRODUCTION LINE: </legend>
		<input type="checkbox" name="productionline" value="DCM" /> Dungeon Crawler Minis (DCM)<br />
		<input type="checkbox" name="productionline" value="DDM" /> Dungeon &amp; Dragons Miniatures (DDM)<br />
		<input type="checkbox" name="productionline" value="PFB" /> Pathfinder Battles (PFB)<br />
	</fieldset><fieldset><legend>MANUFACTURER: </legend>
		<input type="checkbox" name="manufacturer" value="GVN" /> Gifted Vision inc. (GVN)<br />
		<input type="checkbox" name="manufacturer" value="PZO" /> Paizo / WizKids (PZO)<br />
		<input type="checkbox" name="manufacturer" value="WotC" /> Wizards of the Coast (WotC)<br />
	</fieldset><fieldset><legend>STREET DATE BY YEAR: </legend>
		<input type="checkbox" name="street" value="2012" /> 2012<br />
		<input type="checkbox" name="street" value="2011" /> 2011<br />
		<input type="checkbox" name="street" value="2010" /> 2010<br />
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
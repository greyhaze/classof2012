<?php
?>

<html>
<body>

<form>
	<div class="filters">
		<input type="button" value="Filters" id="filterIt" />
		<select>
			<option selected value="simple">Simple View</option>
			<option value="filtered">Filtered View</option>
			<option value="full">Full View</option>
		</select>
		<label>Search: </label>
		<input type="text" name="search" />
		<input type="image" src="./views/images/main/btn_search.png" alt="Submit" width="35" height="35" name="action" value="search" />
	</div>
	<div class="item" style="display:none">This shouldn't display.</div>
	<div class="item" style="display:block">This should display!</div>
</form>

</body>
	
	<!-- JavaScript link -->
	<script src="js/filterIt.js"></script>

</html>

<!-- 
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
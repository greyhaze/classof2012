<div class="minibox">
	<div id="name"><?php echo $oGallery->label;?></div>
	<img id="image" src="<?php echo $oGallery->image;?>" />
	<div id="size"><?php $oSize=Size::find('first', array('conditions' => array('id = ?', $oGallery->size_id)));
			echo $oSize->label ?></div>
	<div id="rarity"><?php $oRarity=Rarity::find('first', array('conditions' => array('id = ?', $oGallery->rarity_id)));
			echo $oRarity->label ?></div>
	<div name="setnum" class="hide">#<?php echo $oGallery->setnum;?></div>

	<!-- type -->
	<?php if(isset($aSz) && array_key_exists('type', $aSz)){ ?>
	<div name="type" class="filter">Type: <?php $oType=Type::find('first', array('conditions' => array('id = ?', $oGallery->type_id)));
			echo $oType->label ?></div><?php } ?>
	<div name="type" class="hide">Type: <?php $oType=Type::find('first', array('conditions' => array('id = ?', $oGallery->type_id)));
			echo $oType->label ?></div>
	<!-- end type -->

	<!-- origin -->
	<?php if(isset($aSz) && array_key_exists('origin', $aSz)){ ?>
	<div name="origin" class="filter" class="filter">Place of Origin: <?php $oOrigin=Origin::find('first', array('conditions' => array('id = ?', $oGallery->origin_id)));
			echo $oOrigin->label ?></div><?php } ?>
	<div name="origin" class="hide" class="filter">Place of Origin: <?php $oOrigin=Origin::find('first', array('conditions' => array('id = ?', $oGallery->origin_id)));
			echo $oOrigin->label ?></div>
	<!-- end origin -->

	<!-- race -->
	<?php if(isset($aSz) && array_key_exists('race', $aSz)){ ?>
	<div name="race" class="filter">Race: <?php echo $oGallery->race;?></div><?php } ?>
	<div name="race" class="hide">Race: <?php echo $oGallery->race;?></div>
	<!-- end race -->

	<!-- gender -->
	<?php if(isset($aSz) && array_key_exists('gender', $aSz)){ ?>
	<div name="gender" class="filter">Gender: <?php $oGender=Gender::find('first', array('conditions' => array('id = ?', $oGallery->gender_id)));
			echo $oGender->label ?></div><?php } ?>
	<div name="gender" class="hide">Gender: <?php $oGender=Gender::find('first', array('conditions' => array('id = ?', $oGallery->gender_id)));
			echo $oGender->label ?></div>
	<!-- end gender -->

	<!-- class -->
	<?php if(isset($aSz) && array_key_exists('profile', $aSz)){ ?>
	<div name="class" class="filter">Class: <?php $oProfile=Profile::find('first', array('conditions' => array('id = ?', $oGallery->profile_id)));
			echo $oProfile->label ?></div><?php } ?>
	<div name="class" class="hide">Class: <?php $oProfile=Profile::find('first', array('conditions' => array('id = ?', $oGallery->profile_id)));
			echo $oProfile->label ?></div>
	<!-- end class -->
	<div id="details" class="hide">Description: <?php echo $oGallery->details;?></div>

	<!-- weapons -->
	<?php if(isset($aSz) && array_key_exists('weapon', $aSz)){ ?>
	<div name="weapons" class="filter"><?php $oWeapon=Weapon::find('first', array('conditions' => array('id = ?', $oGallery->weapon_id)));
			echo $oWeapon->label ?></div><?php } ?>
	<div name="weapons" class="hide"><?php $oWeapon=Weapon::find('first', array('conditions' => array('id = ?', $oGallery->weapon_id)));
			echo $oWeapon->label ?></div>
	<!-- end weapons -->

	<!-- armour -->
	<?php if(isset($aSz) && array_key_exists('armour', $aSz)){ ?>
	<div name="armour" class="filter"><?php $oArmour=Armour::find('first', array('conditions' => array('id = ?', $oGallery->armour_id)));
			echo $oArmour->label ?></div><?php } ?>
	<div name="armour" class="hide"><?php $oArmour=Armour::find('first', array('conditions' => array('id = ?', $oGallery->armour_id)));
			echo $oArmour->label ?></div>
	<!-- armour -->

	<div id="alts" class="hide">Alternate Paint: 
		<?php foreach(Alternate::find('all', array('order' => 'label', 'conditions' => array('miniature_id = ?', $oGallery->id))) as $oAlternates){
		?><a href="<?php echo $oAlternates->link ?>" target="_blank"><?php echo $oAlternates->label ?></a> | <?php }?> </div>
 	<div id="proxies" class="hide">Proxies: 
	<?php foreach(Proxy::find('all', array('order' => 'label', 'conditions' => array('miniature_id = ?', $oGallery->id))) as $oProxies){
			?><a href="<?php echo $oProxies->link ?>" target="_blank"><?php echo $oProxies->label ?></a> | <?php }?> </div>

	<!-- entries -->
	<?php if(isset($aSz) && array_key_exists('entry', $aSz)){ ?>
	<div name="entries" class="filter">
	<?php 
		$sSel = 'label, heading, page';
		$sJoin = 'INNER JOIN entries_miniatures on(entries_miniatures.entry_id = entries.id)';
		foreach(entry::find('all', array('select' => $sSel, 'joins'=>array($sJoin), 'conditions' => array('miniature_id = ?', $oGallery->id))) as $oEntries){
		?><?php echo $oEntries->label ?>: <?php echo $oEntries->heading ?> (page<?php echo $oEntries->page ?>) <br /><?php }?> </div><?php } ?>
	<div name="entries" class="hide">
	<?php 
		$sSel = 'label, heading, page';
		$sJoin = 'INNER JOIN entries_miniatures on(entries_miniatures.entry_id = entries.id)';
		foreach(entry::find('all', array('select' => $sSel, 'joins'=>array($sJoin), 'conditions' => array('miniature_id = ?', $oGallery->id))) as $oEntries){
		?><?php echo $oEntries->label ?>: <?php echo $oEntries->heading ?> (page<?php echo $oEntries->page ?>) <br /><?php }?> </div>
	<!-- end armour -->

	<!-- setname -->
	<?php if(isset($aSz) && array_key_exists('setname', $aSz)){ ?>
	<div name="setname" class="filter"><?php $oSetname=Setname::find('first', array('conditions' => array('id = ?', $oGallery->setname_id)));
			echo $oSetname->label ?></div><?php }?>
	<div name="setname" class="hide"><?php $oSetname=Setname::find('first', array('conditions' => array('id = ?', $oGallery->setname_id)));
			echo $oSetname->label ?></div>
	<!-- end setname -->

	<!-- productionline -->
	<?php if(isset($aSz) && array_key_exists('productionline', $aSz)){ ?>
	<div name="productionline" class="filter"><?php $oProductionline=Productionline::find('first', array('conditions' => array('id = ?', $oGallery->productionline_id)));
			echo $oProductionline->label ?></div><?php }?>
	<div name="productionline" class="hide"><?php $oProductionline=Productionline::find('first', array('conditions' => array('id = ?', $oGallery->productionline_id)));
			echo $oProductionline->label ?></div>
	<!-- end productionline -->
	
	<!-- manufacturer -->
	<?php if(isset($aSz) && array_key_exists('manufacturer', $aSz)){ ?>
	<div name="manufacturer" class="filter"><?php $oManufacturer=Manufacturer::find('first', array('conditions' => array('id = ?', $oGallery->manufacturer_id)));
			echo $oManufacturer->label ?></div><?php }?>
	<div name="manufacturer" class="hide"><?php $oManufacturer=Manufacturer::find('first', array('conditions' => array('id = ?', $oGallery->manufacturer_id)));
			echo $oManufacturer->label ?></div>
	<!-- end manufacturer -->

	<div id="streetdate" class="hide">Street Date: <?php echo $oGallery->streetdate;?></div>
	<div id="sources">
	<?php 
		$sSel = 'label, link';
		$sJoin = 'INNER JOIN sources_miniatures on(sources_miniatures.source_id = sources.id)';
		foreach(source::find('all', array('select' => $sSel, 'joins'=>array($sJoin), 'conditions' => array('miniature_id = ?', $oGallery->id))) as $oSources){
		?><a href="<?php echo $oSources->link ?>" target="_blank"><?php echo $oSources->label ?></a> | <?php }?> </div>
	<div id="stats">
	<?php 
		$sSel = 'label, link';
		$sJoin = 'INNER JOIN stats_miniatures on(stats_miniatures.stat_id = stats.id)';
		foreach(stat::find('all', array('select' => $sSel, 'joins'=>array($sJoin), 'conditions' => array('miniature_id = ?', $oGallery->id))) as $oStats){
		?><a href="<?php echo $oStats->link ?>" target="_blank"><?php echo $oStats->label ?></a> | <?php }?>
	</div>
</div>
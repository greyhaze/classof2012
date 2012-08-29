<?php

foreach(gallery::find('all', array('order' => 'setnum')) as $oGallery){ 

?>

<div class="minibox">
	<div class="name"><?php echo $oGallery->name;?></div>
	<img class="image" src="<?php echo $oGallery->image;?>" />
	<div class="size"><?php echo $oGallery->size;?></div>
	<div class="rarity"><?php echo $oGallery->rarity;?></div>
	<div class="hide type">Type: <?php echo $oGallery->type;?></div>
	<div class="hide origin">Place of Origin: <?php echo $oGallery->origin;?></div>
	<div class="hide race">Race: <?php echo $oGallery->race;?></div>
	<div class="hide gender">Gender: <?php echo $oGallery->gender;?></div>
	<div class="hide class">Class: <?php echo $oGallery->class;?></div>
	<div class="hide details">Description: <?php echo $oGallery->details;?></div>
	<div class="hide weapons"><?php echo $oGallery->weapons;?></div>
	<div class="hide armour"><?php echo $oGallery->armour;?></div>
 	<div class="hide alts">Alternate Paint: 
		<?php foreach(alternates::find('all', array('conditions' => array('id_galleries = ?', $oGallery->id))) as $oAlternate){
		?><a href="<?php $oAlternate->link ?>" target="_blank"><?php $oAlternate->label ?></a> | <?php }?> </div>
	<div class="hide entry">
		<?php foreach(entries::find('all', array('conditions' => array('id_galleries = ?', $oGallery->id))) as $oEntry){
		?><?php $oEntry->source ?>: <?php $oEntry->heading ?> (page<?php $oEntry->page ?>) <?php }?> </div>
	<div class="hide setnum">#<?php echo $oGallery->setnum;?></div>
	<div class="hide setname"><?php echo $oGallery->setname;?></div>
	<div class="hide productionline"><?php echo $oGallery->productionline;?></div>
	<div class="hide manufacturer"><?php echo $oGallery->manufacturer;?></div>
	<div class="hide streetdate">Street Date: <?php echo $oGallery->streetdate;?></div>
	<div class="sources">
		<?php foreach(source::find('all', array('conditions' => array('id_galleries = ?', $oGallery->id))) as $oSource){
		?><a href="<?php $oSource->link ?>" target="_blank"><?php $oSource->label ?></a> | <?php }?> </div>
	<div class="stats">
		<?php foreach(stats::find('all', array('conditions' => array('id_galleries = ?', $oGallery->id))) as $oStats){
		?><a href="<?php $oStats->link ?>" target="_blank"><?php $oStats->label ?></a> | <?php }?>
	</div>
</div>
	
<?php }?>

	
	<!-- JavaScript link -->
	<script src="js/filterIt.js"></script>

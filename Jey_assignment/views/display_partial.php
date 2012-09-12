<div class="minibox">
	<div id="name"><?php echo $oGallery->name;?></div>
	<img id="image" src="<?php echo $oGallery->image;?>" />
	<div id="size"><?php echo $oGallery->size;?></div>
	<div id="rarity"><?php echo $oGallery->rarity;?></div>
	<div id="setnum" class="hide">#<?php echo $oGallery->setnum;?></div>
	<div id="type" class="hide">Type: <?php echo $oGallery->type;?></div>
	<div id="origin" class="hide">Place of Origin: <?php echo $oGallery->origin;?></div>
	<div id="race" class="hide">Race: <?php echo $oGallery->race;?></div>
	<div id="gender" class="hide">Gender: <?php echo $oGallery->gender;?></div>
	<div id="class" class="hide">Class: <?php echo $oGallery->class;?></div>
	<div id="details" class="hide">Description: <?php echo $oGallery->details;?></div>
	<div id="weapons" class="hide"><?php echo $oGallery->weapons;?></div>
	<div id="armour" class="hide"><?php echo $oGallery->armour;?></div>
 	<div id="alts" class="hide">Alternate Paint: 
		<?php foreach(Alternate::find('all', array('order' => 'label', 'conditions' => array('gallery_id = ?', $oGallery->id))) as $oAlternates){
		?><a href="<?php echo $oAlternates->link ?>" target="_blank"><?php echo $oAlternates->label ?></a> | <?php }?> </div>
 	<div id="proxies" class="hide">Proxies: 
		<?php foreach(Proxy::find('all', array('order' => 'label', 'conditions' => array('gallery_id = ?', $oGallery->id))) as $oProxies){
		?><a href="<?php echo $oProxies->link ?>" target="_blank"><?php echo $oProxies->label ?></a> | <?php }?> </div>
	<div id="entry" class="hide">
		<?php foreach(Entry::find('all', array('order' => 'source', 'conditions' => array('gallery_id = ?', $oGallery->id))) as $oEntries){
		?><?php echo $oEntries->source ?>: <?php echo $oEntries->heading ?> (page<?php echo $oEntries->page ?>) <br /><?php }?> </div>
	<div id="setname" class="hide"><?php echo $oGallery->setname;?></div>
	<div id="productionline" class="hide"><?php echo $oGallery->productionline;?></div>
	<div id="manufacturer" class="hide"><?php echo $oGallery->manufacturer;?></div>
	<div id="streetdate" class="hide">Street Date: <?php echo $oGallery->streetdate;?></div>
	<div id="sources">
		<?php foreach(Source::find('all', array('order' => 'label', 'conditions' => array('gallery_id = ?', $oGallery->id))) as $oSources){
		?><a href="<?php echo $oSources->link ?>" target="_blank"><?php echo $oSources->label ?></a> | <?php }?> </div>
	<div id="stats">
		<?php foreach(Stat::find('all', array('order' => 'label', 'conditions' => array('gallery_id = ?', $oGallery->id))) as $oStats){
		?><a href="<?php echo $oStats->link ?>" target="_blank"><?php echo $oStats->label ?></a> | <?php }?>
	</div>
</div>
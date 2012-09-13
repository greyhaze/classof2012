<div class="minibox">
	<div id="name"><?php echo $oGallery->label;?></div>
	<img id="image" src="<?php echo $oGallery->image;?>" />
	<div id="size"><?php echo $oGallery->size_id;?></div>
	<div id="rarity"><?php echo $oGallery->rarity_id;?></div>
	<div id="setnum" class="hide">#<?php echo $oGallery->setnum;?></div>
	<div id="type" class="hide">Type: <?php echo $oGallery->type_id;?></div>
	<div id="origin" class="hide">Place of Origin: <?php echo $oGallery->origin_id;?></div>
	<div id="race" class="hide">Race: <?php echo $oGallery->race;?></div>
	<div id="gender" class="hide">Gender: <?php echo $oGallery->gender;?></div>
	<div id="class" class="hide">Class: <?php echo $oGallery->class_id;?></div>
	<div id="details" class="hide">Description: <?php echo $oGallery->details;?></div>
	<div id="weapons" class="hide"><?php echo $oGallery->weapons_id;?></div>
	<div id="armour" class="hide"><?php echo $oGallery->armour_id;?></div>
 	<div id="alts" class="hide">Alternate Paint: 
		<?php foreach(Alternate::find('all', array('order' => 'label', 'conditions' => array('miniature_id = ?', $oGallery->id))) as $oAlternates){
		?><a href="<?php echo $oAlternates->link ?>" target="_blank"><?php echo $oAlternates->label ?></a> | <?php }?> </div>
 	<div id="proxies" class="hide">Proxies: 
	<?php foreach(Proxy::find('all', array('order' => 'label', 'conditions' => array('miniature_id = ?', $oGallery->id))) as $oProxies){
			?><a href="<?php echo $oProxies->link ?>" target="_blank"><?php echo $oProxies->label ?></a> | <?php }?> </div>
	<div id="entry" class="hide">
	<?php 
		$sSel = 'manual, heading, page';
		$sJoin = 'INNER JOIN entries_miniatures on(entries_miniatures.entry_id = entries.id)';
		foreach(entry::find('all', array('select' => $sSel, 'joins'=>array($sJoin), 'conditions' => array('miniature_id = ?', $oGallery->id))) as $oEntries){
		?><?php echo $oEntries->manual ?>: <?php echo $oEntries->heading ?> (page<?php echo $oEntries->page ?>) <br /><?php }?> </div>
	<div id="setname" class="hide"><?php echo $oGallery->setname_id;?></div>
	<div id="productionline" class="hide"><?php echo $oGallery->productionline_id;?></div>
	<div id="manufacturer" class="hide"><?php echo $oGallery->manufacturer_id;?></div>
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
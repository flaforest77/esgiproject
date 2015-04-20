<?php
	use Facebook\FacebookRequest;

	$request = new FacebookRequest($session,'GET','/me/photos/uploaded');
	$response = $request->execute();
	$graphObject = $response->getGraphObject()->asArray();

	echo "<pre>";
	print_r($graphObject);
	echo "</pre>";

	foreach ($graphObject["data"] as $image) { ?>
		<img class="img-thumbnail" src="<?php $image->images[5]->source;?>"/>
	<?php }?>
?>
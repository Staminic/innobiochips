<?php

defined('JPATH_BASE') or die;

// Add span with id so that element fxs work.
$d = $displayData;

?>

<input class="form-control"
	<?php foreach ($d->attributes as $key => $value) :
	echo $key . '="' . $value . '"';
endforeach;
	?> />

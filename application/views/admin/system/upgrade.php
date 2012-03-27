<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
?>

<div class="table" style="padding-bottom: 10px">
	<h3 style="float: left"><?php echo _('Upgrade'); ?></h3>
	<span style="float: right; padding: 5px"><?php echo buttoner(); ?></span>
	<hr class="clear"/>
	<?php
	echo _('Current Version') . ': ' . $current_version . '<br/>';
	echo ($new_versions ? _('Latest Version Available') . ': ' . ($new_versions[0]->name) : _('You have the latest version of FoOlFuuka.')) . '<br/><br/>';
	?>
	
</div>

<br/>

<?php
if ($new_versions)
{
	echo '<div class="table" style="padding-bottom: 10px; margin-right:10px;">';
	echo '<h3>' . _('Changelog') . '</h3><div class="changelog">';
	echo Markdown($changelog);
	echo '</div></div>';
}

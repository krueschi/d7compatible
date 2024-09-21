<?php
/**
 * @file
 * Template for outputting the main content block.
 *
 * This template overrides block.tpl.php to remove all wrappers if there are
 * no custom classes specified.
 */
?>
<?php if (!empty($classes)): ?>
	<div class="<?php print $classes; ?>">
<?php endif; ?>
	<?php print render($content); ?>
<?php if (!empty($classes)): ?>
	</div>
<?php endif; ?>

<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 */
?>

<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<!-- @TODO: Provide markup for your options page here. -->

<?php

	if(isset($added_cites)){
		foreach ($added_cites as $cite) {
			echo $cite." added<br />"."\n";
		}
	}

?>

	<form action="?page=wp-bibtex-cite" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit">
	</form>

<table id="bibtex-cite-list">
<thead>
	<tr>
<?php
	foreach($plugin->get_table_field_display() as $field){
		echo '		<th>'.$field.'</th>'."\n";
	}
?>
	</tr>
</thead>
<tbody>
<?php

	foreach($publications as $publication){
		echo '	<tr>'."\n";
		foreach($plugin->get_table_field_display() as $field){
			echo '		<th>'.$publication->$field.'</th>'."\n";
		}
		echo '	</tr>'."\n";
	}
?>
</tbody>
<tfoot>
	<tr>
<?php
	foreach($plugin->get_table_field_display() as $field){
		echo '		<th>'.$field.'</th>'."\n";
	}
?>
	</tr>
</tfoot>
</table>

</div>

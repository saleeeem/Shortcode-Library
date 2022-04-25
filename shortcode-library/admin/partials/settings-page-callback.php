<?php 
//settings page template for shortcode-directory
global $wpdb;
$table_name = $wpdb->prefix . 'shortcode_directory_table';
?>
<div class="wrap">
  <div class="head">
    <h2 class="main">Short Codes Library</h2>
    <p class="sub-content">Add Your Shortcodes.</p>
  </div>
<form action="" method="POST" class="shortcode">
    <div style="margin-bottom:10px;">
    <input type="text" name="shortcodeName" placeholder="ShortCode Name" required>
    </div>
    <div style="margin-bottom:10px;">
    <input type="text" name="shortcode" placeholder="ShortCode" required>
    </div>
    <div style="margin-bottom:10px;">
    <input type="submit" name="submit" value="submit" >
    </div>
</form>
<?php
if(isset($_POST['submit'])){
        $name = $_POST['shortcodeName'];     
		$shortcode = $_POST['shortcode'];     
		$wpdb->query("INSERT INTO $table_name(name, shortcode) VALUES('$name', '$shortcode')");
}



?>
 <h2 class="table-title">All Available ShortCodes</h2>
<table border="1" id="shortcodes">
    <tr>
     <th>id</th>
     <th>name</th>
     <th>Shortcode</th>
     <th>Delete</th>
    </tr>

      <?php

        $result = $wpdb->get_results( "SELECT * FROM $table_name");
        foreach ( $result as $print )   { ?>
          <tr>
                  <td >  <?php echo $print->id; ?> </td>
                  <td><?php echo $print->name; ?> </td>
                  <td><?php echo $print->shortcode; ?> </td>
                  <td><button id="<?php echo $print->id; ?>" class="shortcode-delete"> X </button> </td>
          </tr>
            <?php }
      ?>

</table>
</div>
<script>

</script>

<?php 


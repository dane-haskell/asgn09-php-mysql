<?php require_once('../../private/initialize.php'); ?>

<?php
  $pages = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'salamanderName' => 'Red-Legged Salamander'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'salamanderName' => 'Pigeon Mountain Salamander'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'salamanderName' => 'ZigZag Salamander'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'salamanderName' => 'Slimy Salamander'],
  ];
?>

<?php $page_title = 'Salamanders'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>
<div id="content">
  <div class="pages listing">
    <h1>Salamanders</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('salamanders/create.php'); ?>">Create Salamander</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php foreach($pages as $page) { ?>
        <tr>
          <td><?php echo h($page['id']); ?></td>
          <td><?php echo h($page['position']); ?></td>
          <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo h($page['salamanderName']); ?></td>
          <td><a class="action" href="<?php echo url_for('salamanders/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('salamanders/edit.php?id=' . h(u($page['id']))); ?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>

<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Create Salamander'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('index.php'); ?>">&laquo; Home</a>

  <div class="subject new">
    <h1>Create Salamander</h1>

    <form action="<?php echo url_for('salamanders/create.php'); ?>" method="post">
      <dl>
        <dt>Salamander Name</dt>
        <dd><input type="text" name="salamanderName" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Salamander" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>

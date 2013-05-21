<div id="page-container" class="row-fluid">
  <div id="page-content" class="span9">
    <div class="groups view">

      <h2><?php  echo __('Group'); ?></h2>

      <table class="table table-striped table-bordered">
        <tr>
          <td><strong><?php echo __('Id'); ?></strong></td>
          <td>
            <?php echo h($group['Group']['id']); ?>
            &nbsp;
          </td>
        </tr>
        <tr>
          <td><strong><?php echo __('Name'); ?></strong></td>
          <td>
            <?php echo h($group['Group']['name']); ?>
            &nbsp;
          </td>
        </tr>
        <tr>
          <td><strong><?php echo __('Created'); ?></strong></td>
          <td>
            <?php echo h($group['Group']['created']); ?>
            &nbsp;
          </td>
        </tr>
        <tr>
          <td><strong><?php echo __('Modified'); ?></strong></td>
          <td>
            <?php echo h($group['Group']['modified']); ?>
            &nbsp;
          </td>
        </tr>
      </table>
    </div>
  </div>
</div><!-- #page-container .row-fluid -->

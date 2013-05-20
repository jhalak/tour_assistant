<div class="users view">

  <h2><?php  echo __('User'); ?></h2>
  <div class="pull-right">
    <?php echo $this->Html->link('<i class="icon-edit icon-black"></i> ' . __('Edit'), '/users/edit/' . $user['User']['id'] , array('class' => 'btn btn-success', 'escape' => false)); ?>
    <br><br>
  </div>

  <table class="table table-striped table-bordered">
    <tr>
      <td><strong><?php echo __('Name'); ?></strong></td>
      <td>
        <?php echo h($user['User']['name']); ?>
        &nbsp;
      </td>
    </tr>
    <tr>
      <td><strong><?php echo __('Email'); ?></strong></td>
      <td>
        <?php echo h($user['User']['email']); ?>
        &nbsp;
      </td>
    </tr>
    <tr>
      <td><strong><?php echo __('Username'); ?></strong></td>
      <td>
        <?php echo h($user['User']['username']); ?>
        &nbsp;
      </td>
    </tr>
    <tr>
      <td><strong><?php echo __('Member since'); ?></strong></td>
      <td>
        <?php echo h($user['User']['created']); ?>
        &nbsp;
      </td>
    </tr>
  </table>
  <!-- .table table-striped table-bordered -->

</div><!-- .view -->


<div class="related">

  <h3><?php echo __('Related Members'); ?></h3>

  <?php if (!empty($user['Member'])): ?>

    <table class="table table-striped table-bordered">
      <tr>
        <th><?php echo __('Name'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php
      $i = 0;
      foreach ($user['Member'] as $member): ?>
        <tr>
          <td><?php echo $member['name']; ?></td>
          <td class="actions">
            <?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id']), array('class' => 'btn btn-mini')); ?>
            <?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id']), array('class' => 'btn btn-mini')); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $member['id'])); ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table><!-- .table table-striped table-bordered -->

  <?php endif; ?>


  <div class="actions">
    <?php echo $this->Html->link('<i class="icon-plus icon-white"></i> ' . __('New Member'), array('controller' => 'members', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>        </div>
  <!-- .actions -->

</div><!-- .related -->


<div class="related">

  <h3><?php echo __('Related Tours'); ?></h3>

  <?php if (!empty($user['Tour'])): ?>

    <table class="table table-striped table-bordered">
      <tr>
        <th><?php echo __('Name'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php
      $i = 0;
      foreach ($user['Tour'] as $tour): ?>
        <tr>
          <td><?php echo $tour['name']; ?></td>
          <td class="actions">
            <?php echo $this->Html->link(__('View'), array('controller' => 'tours', 'action' => 'view', $tour['id']), array('class' => 'btn btn-mini')); ?>
            <?php echo $this->Html->link(__('Edit'), array('controller' => 'tours', 'action' => 'edit', $tour['id']), array('class' => 'btn btn-mini')); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tours', 'action' => 'delete', $tour['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $tour['id'])); ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table><!-- .table table-striped table-bordered -->

  <?php endif; ?>


  <div class="actions">
    <?php echo $this->Html->link('<i class="icon-plus icon-white"></i> ' . __('New Tour'), array('controller' => 'tours', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>        </div>
  <!-- .actions -->

</div><!-- .related -->

<div class="users view">

  <h2><?php  echo __('User'); ?></h2>

  <table class="table table-striped table-bordered">
    <tr>
      <td><strong><?php echo __('Id'); ?></strong></td>
      <td>
        <?php echo h($user['User']['id']); ?>
        &nbsp;
      </td>
    </tr>
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
      <td><strong><?php echo __('Password'); ?></strong></td>
      <td>
        <?php echo h($user['User']['password']); ?>
        &nbsp;
      </td>
    </tr>
    <tr>
      <td><strong><?php echo __('Group'); ?></strong></td>
      <td>
        <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id']), array('class' => '')); ?>
        &nbsp;
      </td>
    </tr>
    <tr>
      <td><strong><?php echo __('Created'); ?></strong></td>
      <td>
        <?php echo h($user['User']['created']); ?>
        &nbsp;
      </td>
    </tr>
    <tr>
      <td><strong><?php echo __('Modified'); ?></strong></td>
      <td>
        <?php echo h($user['User']['modified']); ?>
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
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('Name'); ?></th>
        <th><?php echo __('User Id'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php
      $i = 0;
      foreach ($user['Member'] as $member): ?>
        <tr>
          <td><?php echo $member['id']; ?></td>
          <td><?php echo $member['name']; ?></td>
          <td><?php echo $member['user_id']; ?></td>
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
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('Name'); ?></th>
        <th><?php echo __('Description'); ?></th>
        <th><?php echo __('User Id'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php
      $i = 0;
      foreach ($user['Tour'] as $tour): ?>
        <tr>
          <td><?php echo $tour['id']; ?></td>
          <td><?php echo $tour['name']; ?></td>
          <td><?php echo $tour['description']; ?></td>
          <td><?php echo $tour['user_id']; ?></td>
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

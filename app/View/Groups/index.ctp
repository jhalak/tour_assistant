<div class="groups index">
  <h2><?php echo __('Groups'); ?></h2>
  <table cellpadding="0" cellspacing="0"
         class="table table-striped table-bordered">
    <tr>
      <th><?php echo $this->Paginator->sort('id'); ?></th>
      <th><?php echo $this->Paginator->sort('name'); ?></th>
      <th><?php echo $this->Paginator->sort('created'); ?></th>
      <th><?php echo $this->Paginator->sort('modified'); ?></th>
      <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php
    foreach ($groups as $group): ?>
      <tr>
        <td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
        <td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
        <td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
        <td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
        <td class="actions">
          <?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id']), array('class' => 'btn btn-mini')); ?>
          <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id']), array('class' => 'btn btn-mini')); ?>
          <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

  <p>
    <small>
      <?php
      echo $this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
      ));
      ?>      </small>
  </p>

  <div class="pagination">
    <ul>
      <?php
      echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
      echo $this->Paginator->numbers(array('separator' => '</li><li>', 'currentClass' => 'disabled', 'before' => '<li>', 'after' => '</li>'));
      echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
      ?>
    </ul>
  </div>
  <!-- .pagination -->

</div><!-- .index -->
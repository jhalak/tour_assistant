<div class="summary">
  <h2><?php echo __('Summary'); ?></h2>
  <dl>
    <dt><?php echo $this->TaHtml->themeLabelValue('Total cost', $total_cost); ?></dt>
    <dt><?php echo $this->TaHtml->themeLabelValue('Total deposit', $total_deposit); ?></dt>
    <dt><?php echo $this->TaHtml->themeLabelValue('Total member', $total_member); ?></dt>
    <dt><?php echo $this->TaHtml->themeLabelValue('Per head cost', number_format($per_head_cost, 2)); ?></dt>
  </dl>
  <table class="table table-striped table-bordered">
    <thead>
    <tr>
      <th><?php echo __('Name'); ?></th>
      <th><?php echo __('Total deposit'); ?></th>
      <th><?php echo __('Calculation'); ?></th>
      <th><?php echo __('Balance'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($deposits as $deposit): ?>
    <?php $amount = !empty($deposit[0]['amount']) ? $deposit[0]['amount'] : 0;?>
    <tr>
      <td><?php echo $deposit['member']['name']; ?></td>
      <td><?php echo $amount;?></td>
      <td><?php echo $amount . ' - ' . $per_head_cost;?></td>
      <td><?php echo $this->TaHtml->themeBalance($amount - $per_head_cost); ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
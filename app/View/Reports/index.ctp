<div class="box-header well" data-original-title>
    <?php echo $this->Html->tag('h2','<i class="icon-user"></i> Reports',array('escape'=>false))?>
</div>
<div class="box-content">
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
          <thead>
                  <tr>
                        <th><?php echo __('Name'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                  </tr>
          </thead>   
          <tbody>
              <?php foreach ($files as $file): ?>
                    <tr>
                            <td><?php echo h($file); ?>&nbsp;</td>
                            <td class="center">
                                    <?php echo $this->Html->link(__('<i class="icon-zoom-in icon-white"></i>  View'), array('action' => 'view', $file),array('class'=>"btn btn-success",'escape'=>false)); ?>
                            </td>
                    </tr>
                <?php endforeach; ?>
          </tbody>
  </table>            
</div>
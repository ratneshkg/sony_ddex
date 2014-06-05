<div class="box-header well" data-original-title>
    <?php echo $this->Html->tag('h2','<i class="icon-user"></i> Users',array('escape'=>false))?>
    <div class="additional-links">
                <?php echo $this->Html->link(__('New User'), array('action' => 'add'),array('class'=>"btn btn-success",'escape'=>false)); ?>
    </div>

</div>
<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
          <thead>
                  <tr>
                        <th><?php echo __('Name'); ?></th>
                        <th><?php echo __('username'); ?></th>
                        <th><?php echo __('email'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                  </tr>
          </thead>   
          <tbody>
              <?php foreach ($users as $user): ?>
                    <tr>
                            <td><?php echo h($user['User']['first_name']) .' '.h($user['User']['middle_name']).' '.h($user['User']['last_name']) ?>&nbsp;</td>
                            <td class="center"><?php echo h($user['User']['username']); ?>&nbsp;</td>
                            <td class="center"><?php echo h($user['User']['email']); ?>&nbsp;</td>
                            <td class="center">
                                    <?php echo $this->Html->link(__('<i class="icon-zoom-in icon-white"></i>  View'), array('action' => 'view', $user['User']['id']),array('class'=>"btn btn-success",'escape'=>false)); ?>
                                    <?php echo $this->Html->link(__('<i class="icon-edit icon-white"></i>  Edit'), array('action' => 'edit', $user['User']['id']),array('class'=>"btn btn-info",'escape'=>false)); ?>
                                    <?php echo $this->Form->postLink(__('<i class="icon-trash icon-white"></i> Delete'), array('action' => 'delete', $user['User']['id']), array('class'=>"btn btn-danger",'escape'=>false), __('Are you sure ?')); ?>
                            </td>
                    </tr>
                <?php endforeach; ?>
          </tbody>
    </table>            
</div>
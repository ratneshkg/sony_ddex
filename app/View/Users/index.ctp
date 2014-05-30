                <?php echo $this->Html->link(__('New User'), array('action' => 'add'),array('class'=>"btn btn-success",'escape'=>false)); ?>

<div class="row-fluid sortable">		
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon-user"></i> Users</h2>
                        <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                        </div>
                </div>
                <div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                          <thead>
                                  <tr>
                                        <th><?php echo $this->Paginator->sort('first_name'); ?></th>
                                        <th><?php echo $this->Paginator->sort('middle_name'); ?></th>
                                        <th><?php echo $this->Paginator->sort('last_name'); ?></th>
                                        <th><?php echo $this->Paginator->sort('username'); ?></th>
                                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                  </tr>
                          </thead>   
                          <tbody>
                              <?php foreach ($users as $user): ?>
                                    <tr>
                                            <td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
                                            <td class="center"><?php echo h($user['User']['middle_name']); ?>&nbsp;</td>
                                            <td class="center"><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
                                            <td class="center"><?php echo h($user['User']['username']); ?>&nbsp;</td>
                                            <td class="center"><?php echo h($user['User']['email']); ?>&nbsp;</td>
                                            <td class="center">
                                                    <?php echo $this->Html->link(__('<i class="icon-zoom-in icon-white"></i>  View'), array('action' => 'view', $user['User']['id']),array('class'=>"btn btn-success",'escape'=>false)); ?>
                                                    <?php echo $this->Html->link(__('<i class="icon-edit icon-white"></i>  Edit'), array('action' => 'edit', $user['User']['id']),array('class'=>"btn btn-info",'escape'=>false)); ?>
                                                    <?php echo $this->Form->postLink(__('<i class="icon-trash icon-white"></i> Delete'), array('action' => 'delete', $user['User']['id']), array('class'=>"btn btn-danger",'escape'=>false), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
                                            </td>
                                    </tr>
                                <?php endforeach; ?>
                          </tbody>
                  </table>            
                </div>
        </div><!--/span-->
			
</div><!--/row-->
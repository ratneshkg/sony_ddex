<?php echo $this->Html->link(__('New Provider'), array('action' => 'add'),array('class'=>"btn btn-success",'escape'=>false)); ?>

<div class="row-fluid sortable">		
        <div class="box span12">
                <div class="box-header well" data-original-title>
                     <?php echo $this->Html->tag('h2',__('<i class="icon-user"></i> Add Provider'),array('escape'=>false));
                           echo $this->element('box_icons'); ?>
                </div>
                <div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                          <thead>
                                  <tr>
                                        <th><?php echo $this->Paginator->sort('provider_name'); ?></th>
                                        <th><?php echo $this->Paginator->sort('provider_code'); ?></th>
                                        <th><?php echo $this->Paginator->sort('party_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('party_name'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                  </tr>
                          </thead>   
                          <tbody>
                              <?php foreach ($providers as $provider): ?>
                                    <tr>
                                            <td><?php echo h($provider['Provider']['provider_name']); ?>&nbsp;</td>
                                            <td class="center"><?php echo h($provider['Provider']['provider_code']); ?>&nbsp;</td>
                                            <td class="center"><?php echo h($provider['Provider']['party_id']); ?>&nbsp;</td>
                                            <td class="center"><?php echo h($provider['Provider']['party_name']); ?>&nbsp;</td>
                                            <td class="center">
                                                    <?php echo $this->Html->link(__('<i class="icon-zoom-in icon-white"></i>  View'), array('action' => 'view', $provider['Provider']['id']),array('class'=>"btn btn-success",'escape'=>false)); ?>
                                                    <?php echo $this->Html->link(__('<i class="icon-edit icon-white"></i>  Edit'), array('action' => 'edit', $provider['Provider']['id']),array('class'=>"btn btn-info",'escape'=>false)); ?>
                                                    <?php echo $this->Form->postLink(__('<i class="icon-trash icon-white"></i> Delete'), array('action' => 'delete', $provider['Provider']['id']), array('class'=>"btn btn-danger",'escape'=>false), __('Are you sure you want to delete # %s?', $provider['Provider']['id'])); ?>
                                            </td>
                                    </tr>
                                <?php endforeach; ?>
                          </tbody>
                  </table>            
                </div>
        </div><!--/span-->
			
</div><!--/row-->

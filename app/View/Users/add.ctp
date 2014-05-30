<div class="row-fluid sortable">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                     <?php echo $this->Html->tag('h2',__('<i class="icon-user"></i> Add User'),array('escape'=>false));
                           echo $this->element('box_icons'); ?>
                </div>
                <div class="box-content">
                            <?php echo $this->Form->create('User',array('inputDefaults'=>array('div'=>false,'label'=>false),'class'=>'form-horizontal')); ?>
                                <fieldset>
                                  <div class="control-group">
                                        <label class="control-label" for="focusedInput">First Name</label>
                                        <div class="controls">
                                            <?php echo $this->Form->input('first_name',array('class'=>"input-xlarge focused")); ?>
                                        </div>
                                  </div>
                                  <div class="control-group">
                                        <label class="control-label">Middle Name</label>
                                        <div class="controls">
                                          <?php echo $this->Form->input('middle_name',array('class'=>"input-xlarge focused")); ?>
                                        </div>
                                  </div>
                                   <div class="control-group">
                                        <label class="control-label">Last Name</label>
                                        <div class="controls">
                                          <?php echo $this->Form->input('last_name',array('class'=>"input-xlarge focused")); ?>
                                        </div>
                                  </div>
                                  <div class="control-group">
                                        <label class="control-label">Username</label>
                                        <div class="controls">
                                          <?php echo $this->Form->input('username',array('class'=>"input-xlarge focused")); ?>
                                        </div>
                                  </div>
                                    <div class="control-group">
                                        <label class="control-label">Email</label>
                                        <div class="controls">
                                          <?php echo $this->Form->input('email',array('class'=>"input-xlarge focused")); ?>
                                        </div>
                                  </div>
                                    <div class="control-group">
                                        <label class="control-label">Password</label>
                                        <div class="controls">
                                          <?php echo $this->Form->input('password',array('class'=>"input-xlarge focused")); ?>
                                        </div>
                                  </div>

                                  <div class="form-actions">
                                      <?php 
                                      echo $this->Form->button('Add User',array('class'=>'btn btn-primary'));
                                      echo $this->Html->link('Cancel',array('controller'=>'users','action'=>'index'),array('class'=>'btn'));
                                      ?>
                                  </div>
                                </fieldset>
                            <?php echo $this->Form->end(); ?>
                </div>
        </div><!--/span-->

</div><!--/row-->

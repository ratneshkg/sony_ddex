<div class="row-fluid sortable">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i> Add User </h2>
                        <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                        </div>
                </div>
                <div class="box-content">
<!--                        <form class="form-horizontal">-->
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
                          <!--</form>-->
                </div>
        </div><!--/span-->

</div><!--/row-->

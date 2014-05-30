<div class="row-fluid sortable">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                    <?php echo $this->Html->tag('h2',__('<i class="icon-user"></i> Profile'),array('escape'=>false));
                           echo $this->element('box_icons'); ?>
                </div>
                <div class="box-content">
                                  <div class="control-group clearfix">
                                        <label class="span2" for="focusedInput">First Name </label>
                                        <div class="span4 clearfix">
                                          <span>: <?php  echo $user['User']['first_name']; ?> </span>
                                        </div>
                                  </div>
                                  <div class="control-group clearfix">
                                        <label class="span2">Middle Name </label>
                                        <div class="span4 clearfix">
                                          <span>: <?php echo $user['User']['middle_name']; ?> </span>
                                        </div>
                                  </div>
                                   <div class="control-group clearfix">
                                        <label class="span2">Last Name :</label>
                                        <div class="span4 clearfix">
                                          <span>: <?php echo $user['User']['last_name']; ?></span>
                                        </div>
                                  </div>
                                  <div class="control-group clearfix">
                                        <label class="span2">Username</label>
                                        <div class="span4 clearfix">
                                          <span>: <?php echo $user['User']['username']; ?></span>
                                        </div>
                                  </div>
                                  <div class="control-group clearfix">
                                        <label class="span2">Email</label>
                                        <div class="span4 clearfix">
                                          <span>: <?php echo $user['User']['email']; ?> </span>
                                        </div>
                                  </div>

                                  <div class="form-actions clearfix">
                                      <?php 
                                      echo $this->Html->link('Edit',array('controller'=>'users','action'=>'edit',$user['User']['id']),array('class'=>'btn btn-primary'));
                                      ?>
                                  </div>
                </div>
        </div><!--/span-->

</div><!--/row-->

<div class="row-fluid sortable">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i>  Profile</h2>
                        <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                        </div>
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

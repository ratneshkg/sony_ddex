<div class="box-header well" data-original-title>
    <?php echo $this->Html->tag('h2',__('<i class="icon-user"></i> Profile'),array('escape'=>false)); ?>
</div>
<div class="box-content">
                  <div class="control-group clearfix">
                        <label class="span2" for="focusedInput"> Name </label>
                        <div class="span4 clearfix">
                          <span>: <?php  echo $user['User']['first_name'].' '.$user['User']['middle_name'].' '.$user['User']['last_name']; ?> </span>
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
                  <div class="control-group clearfix">
                        <label class="span2">Created</label>
                        <div class="span4 clearfix">
                          <span>: <?php echo $user['User']['created']; ?> </span>
                        </div>
                  </div>
                  <div class="control-group clearfix">
                        <label class="span2">Modified</label>
                        <div class="span4 clearfix">
                          <span>: <?php echo $user['User']['modified']; ?> </span>
                        </div>
                  </div>

                  <div class="form-actions clearfix">
                      <?php 
                      echo $this->Html->link('Edit',array('controller'=>'users','action'=>'edit',$user['User']['id']),array('class'=>'btn btn-primary'));
                      echo $this->Html->link('Cancel',array('controller'=>'users','action'=>'index'),array('class'=>'btn cancelBtn'));
                      ?>
                  </div>
</div>
                <div class="box-header well" data-original-title>
                    <?php echo $this->Html->tag('h2',__('<i class="icon-user"></i> Provider'),array('escape'=>false)); ?>
                </div>
                <div class="box-content">
                                  <div class="control-group clearfix">
                                        <label class="span2" for="focusedInput">Provider Name </label>
                                        <div class="span4 clearfix">
                                          <span>: <?php  echo $provider['Provider']['provider_name']; ?> </span>
                                        </div>
                                  </div>
                                  <div class="control-group clearfix">
                                        <label class="span2">Provider Code </label>
                                        <div class="span4 clearfix">
                                          <span>: <?php echo $provider['Provider']['provider_code']; ?> </span>
                                        </div>
                                  </div>
                                   <div class="control-group clearfix">
                                        <label class="span2">Party Id :</label>
                                        <div class="span4 clearfix">
                                          <span>: <?php echo $provider['Provider']['party_id']; ?></span>
                                        </div>
                                  </div>
                                  <div class="control-group clearfix">
                                        <label class="span2">Party Name</label>
                                        <div class="span4 clearfix">
                                          <span>: <?php echo $provider['Provider']['party_name']; ?></span>
                                        </div>
                                  </div>
                                  <div class="control-group clearfix">
                                        <label class="span2">Created</label>
                                        <div class="span4 clearfix">
                                          <span>: <?php echo $provider['Provider']['created']; ?></span>
                                        </div>
                                  </div>
                                  <div class="control-group clearfix">
                                        <label class="span2">Modified</label>
                                        <div class="span4 clearfix">
                                          <span>: <?php echo $provider['Provider']['modified']; ?></span>
                                        </div>
                                  </div>
                                  <div class="form-actions clearfix">
                                      <?php 
                                      echo $this->Html->link('Edit',array('controller'=>'providers','action'=>'edit',$provider['Provider']['id']),array('class'=>'btn btn-primary'));
                                      echo $this->Html->link('Cancel',array('controller'=>'providers','action'=>'index'),array('class'=>'btn cancelBtn'));
                                      ?>
                                  </div>
                </div>
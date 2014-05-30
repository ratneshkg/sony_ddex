<div class="row-fluid sortable">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                     <?php echo $this->Html->tag('h2',__('<i class="icon-user"></i> Add Provider'),array('escape'=>false));
                           echo $this->element('box_icons'); ?>
                </div>
                <div class="box-content">
                            <?php echo $this->Form->create('Provider',array('inputDefaults'=>array('div'=>false,'label'=>false),'class'=>'form-horizontal')); ?>
                                <fieldset>
                                  <div class="control-group">
                                        <label class="control-label" for="focusedInput">Provider Name</label>
                                        <div class="controls">
                                            <?php echo $this->Form->input('provider_name',array('class'=>"input-xlarge focused")); ?>
                                        </div>
                                  </div>
                                  <div class="control-group">
                                        <label class="control-label">Provider Code</label>
                                        <div class="controls">
                                          <?php echo $this->Form->input('provider_code',array('class'=>"input-xlarge focused")); ?>
                                        </div>
                                  </div>
                                   <div class="control-group">
                                        <label class="control-label">Party Id</label>
                                        <div class="controls">
                                          <?php echo $this->Form->input('party_id',array('type'=>'text','class'=>"input-xlarge focused")); ?>
                                        </div>
                                  </div>
                                  <div class="control-group">
                                        <label class="control-label">Party Name</label>
                                        <div class="controls">
                                          <?php echo $this->Form->input('party_name',array('class'=>"input-xlarge focused")); ?>
                                        </div>
                                  </div>
                                    
                </div>

                                  <div class="form-actions">
                                      <?php 
                                      echo $this->Form->button('Add Provider',array('class'=>'btn btn-primary'));
                                      echo $this->Html->link('Cancel',array('controller'=>'users','action'=>'index'),array('class'=>'btn'));
                                      ?>
                                  </div>
                                </fieldset>
                            <?php echo $this->Form->end(); ?>
                          <!--</form>-->
                </div>
        </div><!--/span-->

</div><!--/row-->

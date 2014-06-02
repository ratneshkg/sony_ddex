<div class="container-fluid">
        <div class="row-fluid">

                <div class="row-fluid">
                        <div class="span12 center login-header">
                                <?php echo $this->Html->tag('h2',__('Welcome to Library Ideas Admin Panel')); ?>
                        </div><!--/span-->
                </div><!--/row-->

                <div class="row-fluid">
                        <div class="well span5 center login-box">
                            <div class="alert alert-info">
                                <?php 
                                if($this->Session->check('Message.auth')) {
                                    echo $this->Session->flash('auth');
                                }
                                else {
                                    echo "Please login with your Username and Password.";
                                }
                                ?>
                            </div>
                            <?php  
                            echo $this->Form->create('User',array('class'=>'form-horizontal')); ?>
                            <div class="input-prepend" title="Username" data-rel="tooltip">
                                <?php
                                echo $this->Html->tag('span','<i class="icon-user"></i>',array('class'=>'add-on','escape'=>false));
                                echo $this->Form->input('username',array('class'=> "input-large span10",'id'=>'username','div'=>false,'label'=>false)); 
                                ?>
                            </div>
                             <?php echo $this->Html->tag('div','',array('class'=>'clearfix'))?>
                            <div class="input-prepend" title="Password" data-rel="tooltip">
                                <?php 
                                echo $this->Html->tag('span','<i class="icon-lock"></i>',array('class'=>'add-on','escape'=>false));
                                echo $this->Form->input('password',array('class'=>'input-large span10','id'=>"password",'div'=>false,'label'=>false)); 
                                ?>
                            </div>
                            <?php echo $this->Html->tag('div','',array('class'=>'clearfix'))?>
                            <div class="input-prepend">
                                <label class="remember" for="remember">
                                    <input type="checkbox" id="remember" />Remember me</label>
                            </div>
                            <?php echo $this->Html->tag('div','',array('class'=>'clearfix'))?>

                            <p class="center span5">
                                <?php echo $this->Form->button('Login',array('class'=>"btn btn-primary")); ?>

                            </p>
                            <?php echo $this->Form->end();
                            ?>

                        </div><!--/span-->
                </div><!--/row-->
        </div><!--/fluid-row-->
		
</div><!--/.fluid-container-->
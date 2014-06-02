<div class="navbar">
        <div class="navbar-inner">
                <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </a>
                        <?php echo $this->Html->link('<img alt="Library Ideas" src="/img/logo20.png" /> <span>Library Ideas</span>','/',array('class'=>'brand','escape'=>false));
                        if(!empty($loggedInUser)) { ?>
                            <div class="btn-group pull-right" >
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="icon-user"></i><span class="hidden-phone"> <?php echo ucfirst($loggedInUser['first_name']); ?></span>
                                        <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                        <li>
                                            <?php echo $this->Html->link(__('Profile'),array('controller'=>'users','action'=>'edit',$loggedInUser['id']))?>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout'));?>
                                        </li>
                                </ul>
                            </div>
                        <?php } ?>
                </div>
        </div>
</div>
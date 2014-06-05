<div class="span2 main-menu-span">
        <div class="well nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Main</li>
                        <li>
                            <?php echo $this->Html->link('<i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span>',array('controller'=>'users','action'=>'adminDashboard'),array('class'=>'ajax-link','escape'=>false));?>
                        </li>

                        <li>
                            <?php echo $this->Html->link('<i class="icon-eye-open"></i><span class="hidden-tablet"> Reports </span>',array('controller'=>'reports','action'=>'index'),array('class'=>'ajax-link','escape' =>false));?>
                            <!--<a class="ajax-link" href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> Reports </span></a>-->
                        </li>

                        <li><a class="ajax-link" href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Process</span></a></li>

                        <li><a class="ajax-link" href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Sanity Test</span></a></li>
                        <li class="nav-header hidden-tablet">Management Section</li>
                        <li><a class="ajax-link" href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Configuration Settings</span></a></li>
                        <li>
                            <?php echo $this->Html->link("<i class='icon-user'></i><span class='hidden-tablet'> Users </span>",array('controller'=>'users','action'=>'index'),array('escape'=>false));?>
                        </li>
                        <li><a class="ajax-link" href="calendar.html"><i class="icon-folder-close"></i><span class="hidden-tablet"> Batches </span></a></li>
                        <li>
                            <?php echo $this->Html->link('<i class="icon-file"></i><span class="hidden-tablet"> Providers </span>',array('controller'=>'providers','action'=>'index'),array('class'=>'ajax-link','escape'=>false));?>
                        </li>

                </ul>					
        </div><!--/.well -->
</div><!--/span-->
<?php
/**
 * Admin Layout.
 */
?>
<!DOCTYPE html>
<html>
    <head>
            <?php echo $this->Html->charset(); ?>
            <title>
                    <?php echo $title_for_layout; ?>
            </title>
            <?php
                    echo $this->Html->meta('icon'); ?>

                    <?php 
                    echo $this->Html->css(array('bootstrap-cerulean','custom','bootstrap-responsive','charisma-app','jquery-ui-1.8.21.custom','fullcalendar','fullcalendar.print',
                                                  'chosen','uniform.default','colorbox','jquery.cleditor','jquery.noty','noty_theme_default','elfinder.min',
                                                  'elfinder.theme','jquery.iphone.toggle','opa-icons','uploadify','admin'));

                    echo $this->fetch('meta');
                    echo $this->fetch('css');
                    echo $this->fetch('script');
            ?>
    </head>
    <body>
                    
                    <!-- topbar starts -->
                    <?php echo $this->element('header'); ?>
                    <!-- topbar ends -->  
                    <div class="container-fluid">
                         <div class="row-fluid">
                             <?php echo $this->element('admin_sidebar');?>

                                 <noscript>
                                            <div class="alert alert-block span10">
                                                <h4 class="alert-heading">Warning!</h4>
                                                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                                            </div>
                                </noscript>	
                                <div id="content" class="span10">
                                    <div class="row-fluid sortable">
                                      <div class="box span12">
                                    <?php
                                    echo $this->Session->flash(); 
                                    echo $this->fetch('content');  ?>
                                       </div>
                                     </div>   
                                </div>
                                
                         </div>
                        <?php echo $this->element('footer'); ?>
                     </div>
            <?php echo $this->element('sql_dump'); ?>
            <?php echo $this->Html->script(array('jquery-1.7.2.min','jquery-ui-1.8.21.custom.min','bootstrap-transition','bootstrap-alert','bootstrap-modal','bootstrap-dropdown',
                                                   'bootstrap-scrollspy','bootstrap-tab','bootstrap-tooltip','bootstrap-popover',
                                                   'bootstrap-button','bootstrap-collapse','bootstrap-carousel', 'bootstrap-typeahead','bootstrap-tour',
                                                   'jquery.cookie','fullcalendar.min','bootstrap-toggle','jquery.dataTables.min','excanvas',
                                                   'jquery.flot.min','jquery.flot.pie.min','jquery.flot.stack','jquery.flot.resize.min',
                                                  'jquery.chosen.min','jquery.uniform.min','jquery.colorbox.min','jquery.autogrow-textarea','jquery.cleditor.min',
                                                   'jquery.noty','jquery.elfinder.min', 'jquery.raty.min','jquery.iphone.toggle','jquery.uploadify-3.1.min','jquery.history',
                                                  'charisma'));?>
    </body>
</html>

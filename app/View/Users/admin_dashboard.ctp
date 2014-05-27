    <div class="row-fluid">
				
	<!-- left menu starts -->
	<?php echo $this->element('admin_sidebar');?>
	<!-- left menu ends -->		
			
	<noscript>
            <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
	</noscript>		
			
        <div id="content" class="span10">
        <!-- content starts -->


            <div>
                    <ul class="breadcrumb">
                            <li>
                                <?php echo $this->Html->link(__('Home'),'#');
                                      echo $this->Html->tag('span',__(' /'),array('class'=>'divider'));
                                ?>
                            </li>
                            <li>
                                 <?php echo $this->Html->link(__('Dashboard'),'#');?>
                            </li>
                    </ul>
            </div>


            <div class="row-fluid sortable">	
                    <div class="box span6">
                            <div class="box-header well" data-original-title>
                                    <h2>SONY LOG STATUS</h2>
                                    <div class="box-icon">
                                            <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                            <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                                    </div>
                            </div>
                            <div class="box-content">
                                    <table class="table table-bordered">
                                             <thead>
                                                      <tr>
                                                              <th>Release ID</th>
                                                              <th>Ingestion Date</th>
                                                              <th>Ingestion Batch</th>
                                                              <th>Sony Log Status </th>                                          
                                                      </tr>
                                              </thead>  
                                              <tbody>
                                                    <tr>
                                                            <td>A10301A0001972514H</td>
                                                            <td class="center">2014-05-15</td>
                                                            <td class="center">G010001972514H</td>
                                                            <td class="center">
                                                                    <span class="label label-success">SENDING</span>
                                                            </td>                                        
                                                    </tr>
                                                    <tr>
                                                            <td>A10301A0451972514H</td>
                                                            <td class="center">2014-05-15</td>
                                                            <td class="center">G010211972514H</td>
                                                            <td class="center">
                                                                    <span class="label label-warning">SEND</span>
                                                            </td>                                    
                                                    </tr>
                                                    <tr>
                                                            <td>A19501A0001972514H</td>
                                                            <td class="center">2014-05-15</td>
                                                            <td class="center">G014561972514H</td>
                                                            <td class="center">
                                                                    <span class="label label-success">SENDING</span>
                                                            </td>                                        
                                                    </tr>
                                                    <tr>
                                                            <td>A10301A0451972515K</td>
                                                            <td class="center">2014-05-15</td>
                                                            <td class="center">G710211972514H</td>
                                                            <td class="center">
                                                                    <span class="label label-warning">SEND</span>
                                                            </td>                                    
                                                    </tr>                      
                                              </tbody>
                                     </table>  
                                     <div class="pagination pagination-centered">
                                        <ul>
                                            <li><a href="#">Prev</a></li>
                                            <li class="active">
                                              <a href="#">1</a>
                                            </li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">Next</a></li>
                                        </ul>
                                    </div>     
                            </div>
                    </div><!--/span-->

                    <div class="box span6">
                            <div class="box-header well" data-original-title>
                                    <h2>PARSER CURRENT PROCESS</h2>
                                    <div class="box-icon">
                                            <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                            <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                                    </div>
                            </div>
                            <div class="box-content">
                                    <table class="table table-condensed">
                                              <thead>
                                                      <tr>
                                                              <th>Release ID</th>
                                                              <th>Ingestion Start Date</th>
                                                              <th>Current Process</th>
                                                              <th>Status</th>                                          
                                                      </tr>
                                              </thead>   
                                              <tbody>
                                                    <tr>
                                                            <td>A10301A0001972514H</td>
                                                            <td class="center">2014-05-15</td>
                                                            <td class="center">Freegal DB Ingestion</td>
                                                            <td class="center">
                                                                    <span class="label label-success">Active</span>
                                                            </td>                                       
                                                    </tr>
                                                    <tr>
                                                            <td>A10301B0501972514H</td>
                                                            <td class="center">2014-05-15</td>
                                                            <td class="center">Sony DB Ingestion</td>
                                                            <td class="center">
                                                                    <span class="label label-success">Active</span>
                                                            </td>                                   
                                                    </tr>
                                                    <tr>
                                                            <td>A12301A0001972514H</td>
                                                            <td class="center">2014-05-15</td>
                                                            <td class="center">CDN Uplocaing</td>
                                                            <td class="center">
                                                                    <span class="label label-important">Completed</span>
                                                            </td>                                     
                                                    </tr>
                                                    <tr>
                                                            <td>A12301A0001973564H</td>
                                                            <td class="center">2014-05-15</td>
                                                            <td class="center">Generating Log</td>
                                                            <td class="center">
                                                                    <span class="label label-success">Active</span>
                                                            </td>                                       
                                                    </tr>								                            
                                              </tbody>
                                     </table>  
                                     <div class="pagination pagination-centered">
                                      <ul>
                                            <li><a href="#">Prev</a></li>
                                            <li class="active">
                                              <a href="#">1</a>
                                            </li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">Next</a></li>
                                      </ul>
                                    </div>     
                            </div>
                    </div><!--/span-->

            </div><!--/row-->


                        <!-- content ends -->
        </div><!--/#content.span10-->
    </div><!--/fluid-row-->
				
    <hr>

    <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
            </div>
            <div class="modal-body">
                    <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                    <a href="#" class="btn" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Save changes</a>
            </div>
    </div>		     
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


            <div class="row-fluid sortable ui-sortable">
                    <div class="box span12">
                            <div data-original-title="" class="box-header well">
                                    <h2>Provider Information </h2>

                            </div>
                            <div class="box-content">
                                    <table class="table table-bordered">
                                             <thead>
                                                      <tr>
                                                              <th>Provider </th>
                                                              <th> Albums </th>
                                                              <th> Songs </th>
                                                              <th> Resources </th>                                          
                                                      </tr>
                                              </thead>  
                                              <tbody>
                                                    <tr>
                                                            <td>SONY</td>
                                                            <td class="center">15,483</td>
                                                            <td class="center">1,254,568</td>
                                                            <td class="center">2,254,568</td>                                        
                                                    </tr>
                                                    <tr>
                                                            <td>IODA</td>
                                                            <td class="center">298,576</td>
                                                            <td class="center">2,536,489</td>
                                                            <td class="center">45,012,565</td>                                         
                                                    </tr>

                                              </tbody>
                                     </table>  

                            </div>
                    </div><!--/span-->
		</div>
            <div class="row-fluid sortable">	
                    <div class="box span6">
                            <div class="box-header well" data-original-title>
                                    <h2>BATCH LIST </h2>

                            </div>

                            <div class="box-content">
                                    <table class="table table-bordered">
                                             <thead>
                                                      <tr>
                                                              <th>Batch Number</th>
                                                              <th>Ingestion Start Date</th>
                                                              <th>Ingestion End Date</th>
                                                              <th>Ingestion Status </th>                                          
                                                      </tr>
                                              </thead>  
                                              <tbody>
                                                    <tr>
                                                            <td>201403100130322000</td>
                                                            <td class="center">2014-05-15</td>
                                                            <td class="center">2014-05-15</td>
                                                            <td class="center">
                                                                    <span class="label label-success">In Progress</span>
                                                            </td>                                        
                                                    </tr>
                                                    <tr>
                                                            <td>201402280130322000</td>
                                                            <td class="center">2014-05-14</td>
                                                            <td class="center">2014-05-14</td>
                                                            <td class="center">
                                                                    <span class="label label-warning">Completed</span>
                                                            </td>                                    
                                                    </tr>
                                                    <tr>
                                                            <td>201402270130322010</td>
                                                            <td class="center">2014-05-13</td>
                                                            <td class="center">2014-05-13</td>
                                                            <td class="center">
                                                                    <span class="label label-warning">Completed</span>
                                                            </td>                                        
                                                    </tr>
                                                    <tr>
                                                            <td>201402260130322009</td>
                                                            <td class="center">2014-05-12</td>
                                                            <td class="center">2014-05-12</td>
                                                            <td class="center">
                                                                    <span class="label label-warning">Completed</span>
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
                    </div>


                    <div class="box span6">
                            <div class="box-header well" data-original-title>
                                    <h2>PROCESS STATUS</h2>

                            </div>

                            <div class="box-content">
                                    <table class="table table-bordered">
                                             <thead>
                                                      <tr>
                                                              <th>Script Name</th>
                                                              <th>Current Status</th>									                                          
                                                      </tr>
                                              </thead>  
                                              <tbody>
                                                    <tr>
                                                            <td>Ingestion Orchestrator</td>
                                                            <td class="center">Running</td>
                                                    </tr>
                                                    <tr>
                                                            <td>Resume Script</td>
                                                            <td class="center">Stopped</td>
                                                    </tr>
                                                    <tr>
                                                            <td>Parser 1</td>
                                                            <td class="center">Running</td>
                                                    </tr>
                                                    <tr>
                                                            <td>Parser 2</td>
                                                            <td class="center">Running</td>
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
                    </div>
	    </div>
<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
	<!--MSK-000136-->
	<div class="modal msk-fade" id="modalINV1" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog"><!--modal-dialog -->  
			<div class="container col-lg-12 "><!--modal-content --> 
      			<div class="row">
          			<div class="panel panel-info"><!--panel -->
                    	<div class="msk-heading">
                    	<button type="button" onClick="scrollDown()" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>	
                        <br>
                        </div>
            			<div class="panel-body"><!--panel-body -->
                        	<div class="row " id="EP12345">
                            	<div class="col-xs-2">
                                	<div class="div-logo">
                                    	<img class="logo" src="../uploads/logo2.png">
                                    </div>
                                </div>
                                <div class="col-xs-5 class-name">
                                	<h2>NOBLE COLLEGE 
                                    ACADEMIC RECORD</h2>
                                	<div class="class-address">
                                    	Bukuru,Leo, Gyel<br>
									    Jos, Nigeria
                                    </div>
                                </div>
                                <div class="col-xs-4 class-email text-right ">
                                    	Email: showntychocho@gmail.com<br>
                                        Phone: 080-3827-6132 <br> 
                                </div>
                        	</div>
                            <div class="row ">
                                <div class="col-xs-5">
                                   <h4>INVOICE TO:</h4>
                                    <div class="student-address">
<?php
include_once("../controller/config.php");
//$my_index= $_SESSION["index_number"];
//$desc=$_GET['desc'];
//$session=$_GET['paid'];
//$year=$_GET['year'];
//$s_class=$_GET['s_class'];
//$date=$_GET['date'];

$sql="select * from student where index_number=1010";
$result=mysqli_query($conn,$sql);
$count = 0;
$current_date_number=date("d");

if(mysqli_num_rows($result) > 0) {
	while($row=mysqli_fetch_assoc($result)){
		$count++;
		$sr_id=$row['id'];
                                                               
}
}
                            ?>
                                  <span class="Student Name"><?php echo $row['full_name']; ?></span><br>
                                    	Jos, Nigeria<br>
									    Rayfield, Jos
                                    </div>
                                </div>
                                <div class="col-xs-5 col-xs-offset-2 text-right msk-t">
                                	<br>
                                    Photo: <?php echo $row['image_name']; ?>
                                	<h3>Reg. No.<?php echo $row['index_number']; ?></h3>
                                    <div class="text-right">
                                    	Class: <?php echo $row['s_class']; ?><br>
                                        Term: <?php echo "FIRST TERM RESULT"; ?><br>
                                    	Subject: <?php echo $row['subject']; ?>
                                    </div>                                
                                </div>
      						</div> <!-- / end client details section -->
                             	<!-- MSK-00093-->
                		<table id="example1" class="table table-bordered table-striped">
                            
                               
                               
                                
                                <th class="col-md-4">Subject</th>
                                <th class="col-md-1">1st Ass</th>
                                <th class="col-md-1">2nd Ass</th>
                                <th class="col-md-1">1st Ass</th>
                                <th class="col-md-1">2nd Ass</th>
                                <th class="col-md-1">Exam</th>
                                <th class="col-md-1">Total</th>`
                                <th class="col-md-1">Grade</th>
                                <th class="col-md-1">Remark</th>
                               
                           
                        	<tbody>
                            

<?php
include_once('../controller/config.php');
$sql="select * from first_result where reg_no=1010";
$result=mysqli_query($conn,$sql);
$count = 0;
$current_date_number=date("d");

if(mysqli_num_rows($result) > 0) {
	while($row=mysqli_fetch_assoc($result)){
		$count++;
		$sr_id=$row['id'];
?>                                                               
                                <tr>
               
           
               
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['subject']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['a1']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['a2']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['t1']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['t2']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['exam']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['total']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['grade']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['remark']; ?></td>
                                    
                                    
                                    

                               		</td>
                            	</tr>
<?php } } ?>
                        	</tbody>
                    	</table>
                	</div><!-- ./box-body -->
            	</div><!-- ./box -->
        	</div> 
    	</div><!-- ./row -->
	</section> <!-- End of table section --> 
                                	<span class="std-name"><?php echo $row['full_name']; ?></span><br>
                                    	Jos, Nigeria<br>
									    Rayfield, Jos
                                    </div>
                                </div>
                                <div class="col-xs-5 col-xs-offset-2 text-right msk-t">
                                	<br>
                                    
                                	<h3>INVOICE - #<?php echo $row['subject']; ?></h3>
                                    <div class="text-right">
                                    	Year: <?php echo $row['subject']; ?><br>
                                        Month: <?php echo $row['subject']; ?><br>
                                    	Date: <?php echo $row['subject']; ?>
                                    </div>                                
                                </div>
      						</div> <!-- / end client details section -->
                             <table class="table table-bordered">
                                <thead>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-1">Description</th>
                                    <th class="col-md-1">Amount(N)</th>
                                    <th class="col-md-1">Month</th>
                                    <th class="col-md-1">Date</th>
                                </thead>
								<tbody>
                                	<tr id="tr_adm_fee">
                                    	<td>1</td>
                                       	<td>Admission Fee</td>
                                        <td>N<?php echo $row['subject']; ?></td>
                                        <td><?php echo $row['subject']; ?></td>
                                        <td><?php echo $row['subject']; ?></td>
                                    </tr>
                                    <tr>
                                    	<td id="td_monthly_fee_count"> 1</td>
                                       	<td id="td_monthly_fee_desc"><?php echo $row['subject']; ?></td>
                                        <td>N<?php echo $row['subject']; ?></td>
                                        <td><?php echo $row['subject']; ?></td>
                                        <td><?php echo $row['subject']; ?></td>
                                    </tr>
                 				</tbody>
                          	</table> 
                             <div class="row">
                                <div class="col-xs-1 text-right pdetail1">
                                      <strong>
                                        <span id="spanaFee"><?php echo $row['subject']; ?>N</span> 
                                        <span id="spanmFee"><?php echo $row['subject']; ?>N</span> <br>
										<span id="spanTotal"><?php echo $row['subject']; ?>N</span> <br>
                                        <span id="spanPaid"><?php echo $row['subject']; ?>N</span> <br>
                                      </strong>
  								</div>
                                <div class="col-xs-3 text-right pdetail2">
    								<p>
                                      <strong>
                                        <span id="spanaFee1">Admission Fee :</span>
                                        Monthly Fee :<br>
										Total :<br>
                                        Paid :<br>
                                      </strong>
                                    </p>
  								</div>
							</div>
                            <div class="col-xs-6 col-xs-offset-2 text-right">
                            	<h1 id="h1">Thank You!</h1>
                            </div>
                  		</div><!--/.panel-body -->
                        <div class="panel-footer inv-footer text-right" id="msk123456">
                        	<button type="button" class="btn btn-success btn-md"  id="" onClick="window.print()">
                            	<span class="glyphicon glyphicon-print"></span> Print<!--MSK-000137--> 
                            </button>
             			</div>
                	</div><!--/. panel--> 
                </div><!--/.row --> 
            </div><!--/.modal-content -->
        </div><!--/.modal-dialog -->
    </div><!--/.modal -->
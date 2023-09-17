<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>    
	<div class="row" id="table1">
	<div class="col-md-13">
    	<div class="box">
        	<div class="box-header">
            
                 <h3 class="box-title">All User</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                	   	<!-- MSK-00093-->

                		<table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th class="col-md-1">ID</th>
                                <th class="col-md-1">Email</th>
                                <th class="col-md-1">Password</th>
                                <th class="col-md-4">Type</th>
                                <th class="col-md-2">Action</th>
                            </thead>
                        	<tbody>
<?php
include_once('../controller/config.php');
//$sql="select subject_routing.id as sr_id,subject_routing.fee as s_fee,grade.name as g_name,subject.name as s_name,teacher.i_name as t_name
//	  from subject_routing
    //  inner join grade
     // on subject_routing.grade_id=grade.id 
     // inner join subject
     // on subject_routing.subject_id=subject.id 
     // inner join teacher
      //on subject_routing.teacher_id=teacher.id";
  $sql="select * from user";
$result=mysqli_query($conn,$sql);
$count = 0;
$current_date_number=date("d");

if(mysqli_num_rows($result) > 0) {
	while($row=mysqli_fetch_assoc($result)){
		$count++;
		$sr_id=$row['id'];
?>                                                               
                                <tr>
                                    <td><?php echo $count; ?></td>
               <!--MSK-000115-td1--><td id="td1_<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
               <!--MSK-000115-td2--><td id="td2_<?php echo $row['id']; ?>"><?php echo $row['password']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['type']; ?></td>
                                    <td id="action_<?php echo $count; ?>"> 
                                    
<?php
$sql1="SELECT * FROM user WHERE id='$sr_id'";

$result1=mysqli_query($conn,$sql1);

if(mysqli_num_rows($result1) > 0) {
	
//	echo '<a href="#" id="edit1_sfee_'.$count.'" onClick="editSubjectFee(this)" class="btn btn-warning btn-xs cant-edit" data-id="'.$sr_id.','.$count.','.$row["full_name"].'" >Edit Fee</a>';
echo '<a href="#modalUpdateform" id="edit_sfee_'.$count.'" onClick="showModal(this)" class="btn btn-info btn-xs" data-id="'.$sr_id.','.$count.'" data-toggle="modal">Edit Result</a>';  
	echo ' <a href="#" class="confirm-delete btn btn-danger btn-xs" id="delete_sfee_'.$count.'" data-id="'.$sr_id.'">Delete</a>'; 
    
}else{
	
	echo '<a href="#modalUpdateform" id="edit_sfee_'.$count.'" onClick="showModal(this)" class="btn btn-info btn-xs" data-id="'.$sr_id.','.$count.'" data-toggle="modal">Edit</a>';  
	echo ' <a href="#" class="confirm-delete btn btn-danger btn-xs" id="delete_sfee_'.$count.'" data-id="'.$sr_id.'">Delete</a>'; 
                                            	
}

if($current_date_number > 5){
	//disabled
	echo "<script>$('.cant-edit').addClass('disabled');</script>";
}

?>                                    

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
    
    
 <!-- //MSK-00095 Modal- modalInsertform -->  
  
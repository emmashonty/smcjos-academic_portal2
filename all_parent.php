<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<style>

.modal-content1 {
   position: absolute;
   left: 125px; 
}
@media only screen and (max-width: 500px) {

	.modal-content1 {
   		
		position:static;
   
	}
}

.form-control-feedback {
  
   pointer-events: auto;
  
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}

.msk-fade{  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s

}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	Student
            <small>All Parent</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">All Parent</a></li>
        </ol>
	</section>

<!-- table for view all records -->
       
	<!-- Main content -->
	<section class="content" > <!-- Start of table section -->
    	<div class="row" id="table1"><!--MSK-000132-1-->
        	<div class="col-md-15">
            	<div class="box">
                	<div class="box-header">
                 		
                  		<h3 class="box-title">All Parent</h3>
                	</div><!-- /.box-header -->
                	<div class="box-body table-responsive">
                    	<!-- MSK-00093-->
                		<table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th class="col-md-0">ID</th>
                                <th class="col-md-4">Full Name</th>
                                <th class="col-md-1">Name with Initial</th>
                                <th class="col-md-1">Gender</th>
                                <th class="col-md-2">Phone Number</th>
                                <th class="col-md-1">D.O.B.</th>
                                <th class="col-md-1">Email</th>
                                <th class="col-md-2">Action</th>
                            </thead>
                        	<tbody>
<?php
include_once('../controller/config.php');
//$sql="select subject_routing.id as sr_id,subject_routing.fee as s_fee,grade.name as g_name,subject.name as s_name,teacher.i_name as t_name
//	  from subject_routing
    //  inner join grade
      //on subject_routing.grade_id=grade.id 
      //inner join subject
      //on subject_routing.subject_id=subject.id 
      //inner join teacher
      //on subject_routing.teacher_id=teacher.id";

$sql="select * from parents";
  
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
               <!--MSK-000115-td1--><td id="td1_<?php echo $row['id']; ?>"><?php echo $row['full_name']; ?></td>
               <!--MSK-000115-td2--><td id="td2_<?php echo $row['id']; ?>"><?php echo $row['i_name']; ?></td>
               <!--MSK-000115-td2--><td id="td2_<?php echo $row['id']; ?>"><?php echo $row['address']; ?></td>
               <!--MSK-000115-td3--><td id="td3_<?php echo $row['id']; ?>"><?php echo $row['phone']; ?></td>
               <!--MSK-000115-td4--><td id="td4_<?php echo $count; ?>"><?php echo $row['b_date']; ?></td>
               <!--MSK-000115-td2--><td id="td2_<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
                                    <td id="action_<?php echo $count; ?>"> 
                                    
<?php
$sql1="SELECT * FROM parents WHERE index_number='$sr_id'";

$result1=mysqli_query($conn,$sql1);

if(mysqli_num_rows($result1) > 0) {
	
	//echo '<a href="#" id="edit1_sfee_'.$count.'" onClick="editSubjectFee(this)" class="btn btn-warning btn-xs cant-edit" data-id="'.$sr_id.','.$count.','.$row["full_name"].'" >Edit Name</a>';
        
echo ' <a href="#" class="confirm-delete btn btn-danger btn-xs" id="delete_sfee_'.$count.'" data-id="'.$sr_id.'">Delete</a>';
}else{
	
//	echo '<a href="#modalUpdateform" id="edit_sfee_'.$count.'" onClick="showModal(this)" class="btn btn-info btn-xs" data-id="'.$sr_id.','.$count.'" data-toggle="modal">Edit</a>';  
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
  
  
                                
                                   
									
   
 <script> 


</script>

 <!-- //MSK-000124 Modal-Delete Confirm Popup -->
	<div class="modal msk-fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
				<div class="modal-header bg-primary">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="frm_title">Delete</h4>
      			</div>

				<div class="modal-body bgColorWhite">
        			<strong style="color:red;">Are you sure?</strong>  Do you want to Delete this Record
        		</div>
      			<div class="modal-footer">
					<a href="#" style='margin-left:10px;' id="btnYes" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a><!-- MSK-000125 -->
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>
                
<script>

$('body').on('click', '.confirm-delete', function (e){
//MSK-000122		
    e.preventDefault();
    var id = $(this).data('id');
	$('#deleteConfirm').data('id1', id).modal('show');//MSK-000123
 
});

$('#btnYes').click(function() {
//MSK-000126
     		
    var id = $('#deleteConfirm').data('id1');	
	var do1 = "delete_record";	
	var table_name1= "student";//give data table name
		
	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);
	
	var xhttp = new XMLHttpRequest();//MSK-000127-Ajax Start  
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {
				//MSK-000129
				var myArray = eval( xhttp.responseText );
					
				if(myArray[0]==1){//MSK-000130
				
					$("#deleteConfirm").modal('hide');	        		
					var page = myArray[1];
				
					var xhttp1 = new XMLHttpRequest();//MSK-000131-Start Ajax  
						xhttp1.onreadystatechange = function() {		
				
							if (this.readyState == 4 && this.status == 200) {
										
								document.getElementById('table1').innerHTML = this.responseText;//MSK-000132
								cTablePage(page);//MSK-000133	
								Delete_alert(myArray[0]);//MSK-000134
							}
								
						};
						xhttp1.open("GET", "show_all_parent_table.php" , true);												
  						xhttp1.send();//MSK-000131-End Ajax
				
				}
		
				if(myArray[0]==2){//MSK-000137
			
					$("#deleteConfirm").modal('hide');
					Delete_alert(myArray[0]);//MSK-000138
				
				}


    	}
			
  	};	
	
   xhttp.open("GET", "../model/delete_parents.php?id=" + id + "&do="+do1 + "&table_name="+table_name1 + "&page="+currentPage , true);												
  	xhttp.send();//MSK-000127-Ajax End
	 			   		
});

function cTablePage(page){
//MSK-000135	
	var currentPage1 = (page-1)*10;
	
	$(function(){
		$("#example1").DataTable({
			"displayStart": currentPage1,    
			"bDestroy": true       
   		});
						
	});
					  
	window.scrollTo(0,document.body.scrollHeight);
	
};	

function Delete_alert(msg){
//MSK-000136	
	if(msg==1){
		
    	var myModal = $('#delete_Success');
		myModal.modal('show');
		
		clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
			
    	}, 3000));
			
	}
	
	if(msg==2){
		
    	var myModal = $('#connection_Problem');
		myModal.modal('show');
		
    	clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
    	}, 3000));
				
	}

};	
//xhttp1.open("GET", "all_student.php" , true);												
//xhttp1.send();//MSK-000131-End Ajax
	
</script>  

<!--redirect your own url when clicking browser back button -->
<script>
(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../index.php");//path to when click back button
    },0);
  }
}, false);
}(window, location));
</script>

  	 	
</div><!-- /.content-wrapper -->  
               

               
<?php include_once('footer.php');?>
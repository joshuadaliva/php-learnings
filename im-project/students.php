<?php require("config.php");?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
	<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  </head>
  <body>



  	<!-- edit -->
  	<div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="updateStudent">
	      <div class="modal-body">
	      	<div class="alert alert-warning d-none"  id="errorMessageUpdate">
	      		
	      	</div>
	      	<div class="mb-3">
	      		<label for="Name">Student ID: </label>
	      		<input type="hidden" name="student_id" id="student_id" class="form-control" />
	      	</div>
	      	<div class="mb-3">
	      		<label for="Name">Name: </label>
	      		<input type="text" name="name" id="name" class="form-control" />
	      	</div>
	      	<div class="mb-3">
	      		<label for="Email">Email: </label>
	      		<input type="text" name="email" id="email" class="form-control" />
	      	</div>
	      	<div class="mb-3">
	      		<label for="Phone">Phone: </label>
	      		<input type="text" name="phone" id="phone" class="form-control" />
	      	</div>
	      	<div class="mb-3">
	      		<label for="Name">course: </label>
	      		<input type="text" name="course" id="course" class="form-control" />
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Update student</button>
	      </div>
      </form>
      
    </div>
  </div>
</div>

  	<!-- modal for add student -->
  	<div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="saveStudent">
	      <div class="modal-body">
	      	<div class="alert alert-warning d-none"  id="errorMessage">
	      		
	      	</div>
	      	<div class="mb-3">
	      		<label for="Name">Name: </label>
	      		<input type="text" name="name" class="form-control" />
	      	</div>
	      	<div class="mb-3">
	      		<label for="Email">Email: </label>
	      		<input type="text" name="email" class="form-control" />
	      	</div>
	      	<div class="mb-3">
	      		<label for="Phone">Phone: </label>
	      		<input type="text" name="phone" class="form-control" />
	      	</div>
	      	<div class="mb-3">
	      		<label for="Name">course: </label>
	      		<input type="text" name="course" class="form-control" />
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save student</button>
	      </div>
      </form>
      
    </div>
  </div>
</div>

    
	<!-- main page -->
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<div class="card">
  					<div class="card-header">
  						<h4>PHP AJAX without page reload</h4>
  						<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentAddModal">
  						Add A student </button>
  					</div>



  					<div class="card-body ">
  						<table id="table" class="table table-bordered table-striped overflow-auto">
  							<thead>
  								<tr>
  									<th>ID</th>
  									<th>Name</th>
  									<th>Email</th>
  									<th>phone</th>
  									<th>couse</th>
  									<th>action</th>

  								</tr>
  							</thead>
  							<tbody class="overflow-auto">
  								<?php
  									$query = "SELECT * FROM students";
  									$result = $conn -> query($query);
  									if($result -> num_rows > 0){
  										foreach($result as $student){
  											?>
  											<tr>	
  												<td><?= $student['id'] ?></td>
  												<td><?= $student['name'] ?></td>
  												<td><?= $student['email'] ?></td>
  												<td><?= $student['phone'] ?></td>
  												<td><?= $student['course'] ?></td>
  												<td>
  													<a href="" class="btn btn-info">View</a>
  													<button type="button" value="<?= $student['id']; ?>" class="editStudentBtn btn btn-success">Edit</button>
  													<a href="" class="btn btn-danger">Delete</a>
  												</td>
  											</tr>

  											<?php

  										}
  									}
  								 ?>
  								<tr>
  									<td></td>
  								</tr>
  							</tbody>
  						</table>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>



  	<!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>

    	// add student
    	$(document).on("submit", "#saveStudent", function(e){
    		e.preventDefault()
    		const formData = new FormData(this)
    		formData.append("save_student", true) 

    		$.ajax({
    			type:"POST",
    			url:"code.php",
    			data:formData,
    			processData : false,
    			contentType:false,
    			success: function(response){
    				// you can use $ or jQuery
    				const res = $.parseJSON(response);

    				if(res.status == 422){
    					$("#errorMessage").removeClass("d-none");
    					$("#errorMessage").text(res.message); 
    				}
    				else if(res.status == 500){
    					$("#errorMessage").removeClass("d-none");
    					$("#errorMessage").text(res.message); 
    				}
    				else if(res.status == 200){
    					$("#errorMessage").addClass("d-none");
    					$("#studentAddModal").modal("hide");
    					$("#saveStudent")[0].reset();

    					// automatically refreshed table
    					$("table").load(location.href + " #table")
    				}

    			}	
    		})
    	})


    	// show the details to the modal
    	$(document).on('click', '.editStudentBtn', function() {

    		const student_id = $(this).val();
    		
    		$.ajax({
    			type: "GET",
    			url:"editStudent.php?student_id=" + student_id,
    			success:function (response){
    				const res = jQuery.parseJSON(response);
    				if(res.status == 422){
    					$("#errorMessage").removeClass("d-none");
    					$("#errorMessage").text(res.message); 
    				}
    				else if(res.status == 200){
    					$('#student_id').val(res.data.id);
    					$('#name').val(res.data.name);
    					$('#email').val(res.data.email);
    					$('#phone').val(res.data.phone);
    					$('#course').val(res.data.course);
    					$("#studentEditModal").modal("show");
 
    					// automatically refreshed table
    					$("table").load(location.href + " #table")
    				}
    			}
    		})

    	})


    	// update
    	$(document).on("submit", "#updateStudent", function(e){
    		e.preventDefault()
    		const formData = new FormData(this)
    		formData.append("update_student", true) 

    		$.ajax({
    			type:"POST",
    			url:"updateStudent.php",
    			data:formData,
    			processData : false,
    			contentType:false,
    			success: function(response){
    				// you can use $ or jQuery
    				const res = $.parseJSON(response);

    				if(res.status == 422){
    					$("#errorMessageUpdate").removeClass("d-none");
    					$("#errorMessageUpdate").text(res.message); 
    				}
    				else if(res.status == 200){
    					$("#errorMessage").addClass("d-none");
    					$("#studentEditModal").modal("hide");
    					$("#saveStudent")[0].reset();

    					// automatically refreshed table
    					$("table").load(location.href + " #table")
    					Toastify({
						    text: "Student updated successfully!",
						    duration: 3000,
						    gravity: "top", // top or bottom
						    position: 'right', // left, center or right
						    backgroundColor: "#fffff", // a pleasing green color
						    textColor: "#4CAF50", // white text for contrast
						    className: "custom-toast", // add a custom class for additional styling
						    close: true, // show close button
						}).showToast();
    				}
    			}	
    		})
    	})

    </script>

  </body>
</html>
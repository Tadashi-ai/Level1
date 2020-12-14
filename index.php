<?php

require_once ("../Tailoring/crud/php/component.php");
require_once ("../Tailoring/crud/php/operation.php");



?>



<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<!--custom stylesheet-->
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     
     <!--font-->
	<script src="https://kit.fontawesome.com/d9de1bc9ce.js" crossorigin="anonymous"></script>

</head>
<body>
     <main>
     	<div class="container text-center" >
     		<h1 class="py-2 5 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>Tailoring Online Class Details</h1>

     		<div class="d-flex justify-content-center">
     			<form action="" method="post" class="w-50">
     				<div class="py-2">
     				    <div class="input-group mb-2">
     					    <div class="input-group-prepend">
     						  <div class="input-group-text bg-warning"><i class="fas fa-id-badge"></i></div>
     					    </div>
     					    <input name="student_id" type="text" autocomplete="off" placeholder="ID" class="form-control" id="inlineFormInputGroup" placeholder="Username">
     				    </div>
     				</div>
     				<div class="pt-2">

                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text bg-warning"><i class="far fa-id-card"></i></div>
                            </div>
                            <input name="student_name" type="text" autocomplete="off" placeholder="Name" class="form-control" id="inlineFormInputGroup" placeholder="Username ">
                        </div>
     					
     						
     				</div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text bg-warning"><i class="fas fa-book-open"></i></i></div>
                                </div>
                                <input name="student_course" type="text" autocomplete="off" placeholder="Course" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                            <div class="col">
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                   <div class="input-group-text bg-warning"><i class="fas fa-phone-square-alt"></i></i></i></div>
                                  </div>
                                  <input name="student_phone" type="text" autocomplete="off" placeholder="Phone" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                </div>

                            
                            </div>
                             <div class="col">
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                   <div class="input-group-text bg-warning"><i class="fas fa-male"></i></div>
                                  </div>
                                  <input name="student_gender" type="text" autocomplete="off" placeholder="Gender" class="form-control" id="inlineFormInputGroup" placeholder="Username" attr="">
                                </div>

                            
                            </div>
                        

                            
                        </div>
                        
                    </div>
                    <div class="d-flex justify-content-center">
                      <button class="btn bg-success text-light" name="create" styleclass="btn btn-success" id="btn-create" attr="data-toggle='tooltip' data-placement='bottom' title='Create'"><i class='fas fa-plus'></i>Create
                      </button>

                       <button class="btn bg-primary text-light" name="read" styleclass="btn btn-primary" id="btn-read" attr="data-toggle='tooltip' data-placement='bottom' title='read'"><i class='fas fa-sync'></i>Read
                      </button>

                      <button class="btn bg-dark text-light" name="update" styleclass="btn btn-light border" id="btn-update" attr="data-toggle='tooltip' data-placement='bottom' title='update'"><i class='fas fa-pen-alt'></i>Update
                      </button>

                      <button class="btn bg-danger text-light" name="delete" styleclass="btn btn-danger" id="btn-delete" attr="data-toggle='tooltip' data-placement='bottom' title='delete'"><i class='fas fa-trash-alt'></i>Delete
                      </button>
                    </div>
     			</form>

     		</div>
            
            <!--bootstrap table-->
            <div class="d-flex table-data">
                <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Edit</th>
                        </tr>
                    
                    </thead>
                    <tbody id="tbody">

                    <?php
                    if (isset($_POST['read'])) {
                       $result=getData();

                       if($result){
                           while($row=mysqli_fetch_assoc($result)){
                               ?>
                    <tr>
                        <td ><?php echo $row['id'];?></td>
                        <td ><?php echo $row['student_name'];?></td>
                        <td ><?php echo $row['student_course'];?></td>
                        <td ><?php echo $row['student_phone'];?></td>
                        <td ><?php echo $row['student_gender'];?></td>
                        <td ><i class="fas fa-edit btnedit"></i></td>
                    </tr>

                    <?php
                           }
                       }
                    }


                    ?>

                        
                        
                    </tbody>
                </table>
                
            </div>



     	</div>
     </main>

       <!--bootstrap-script-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

     <script src="../Tailoring/crud/php/main.js"></script>

</body>
</html>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8" />
	<!--IE Meta-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!--first mobil Meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel='stylesheet' href='css/bootstrap.css' />
	<link rel='stylesheet' href='css/style.css' />
      <link rel="stylesheet" href="dist/css/AdminLTE.min.css">


	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
		<![endif]-->
</head>
<body>
    <!--<img src="images/1494757130.png"/>-->
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>EELU</span></a>
			</div>
			<!--start our nav bar -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="ournavbar">
				<ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
					<li class="active"><a href="add.php">Add Exam</a></li>
					
					<li><a href="courses.php">All Courses</a></li>
                     <li><a href="user.php">Users</a></li>
					
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<!--end our nav bar -->
   
    <!--Start our Carousal -->
	<div id="myslide" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myslide" data-slide-to="0" class="active"></li>
			<li data-target="#myslide" data-slide-to="1"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/business.jpg" alt="business adimnastration">
            </div>
            <div class="item">
				<img src="images/IT.jpg" alt="Information tecnology">
            </div>
        </div> 
			<a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myslide" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
    </div>
        <!--End our Carousal -->
       
            <h1>EELU Department</h1>
    <!-- Main content -->
    <section class="content" style="">
            <div class="row">
        <!-- left column -->
        <div class="col-md-12">
			<div class="alert-danger" id="message" style="width: 100%;font-size:15px;text-align:center;color:white;padding-top:20px;padding-bottom:20px;margin-bottom:20px;display:none;">
					</div>
										
					<div class="alert-success" id="success" style="width: 100%;font-size:15px;text-align:center;color:white;padding-top:20px;padding-bottom:20px;margin-bottom:20px;display:none;">
					</div>
          <!-- general form elements -->
          <div class="box box-primary">
         
			          <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Section <span style="color:red">*</span></label>
                <select id="exam_section" class="form-control select2" style="width: 100%;">
                  <option>Information Technology</option>
                  <option>Business Administeration</option>
               
                
                </select>
              </div>
          
              </div>
           
              <div class="col-md-6">
              <div class="form-group">
                <label>level <span style="color:red">*</span></label>
                <select id="exam_level" class="form-control select2" style="width: 100%;">
                  <option>first year</option>
                    <option>Second year</option> 
                    <option>Third year</option> 
                    <option>Fourth year</option>
                 
               
                
                </select>
              </div>
          
              </div>    
              <div class="col-md-6">
              <div class="form-group">
                <label>Term <span style="color:red">*</span></label>
                <select id="exam_term" class="form-control select2" style="width: 100%;">
                  <option>first Term</option>
                    <option>Second Term</option> 
                  
                </select>
              </div>
          
              </div>
       
            <div class="col-md-6">
              <div class="form-group">
          <div class="form-group">
                  <label >Course Name  <span style="color:red">*</span></label>
                  <input type="text" class="form-control" id="exam_course_name" placeholder="Enter Course Name">
                </div>
              <!-- /.form-group -->
         
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>      
              <div class="col-md-6">
       <div class="form-group">
                  <label for="exam_file">File input <span style="color:red">*</span></label>
                  <input type="file" id="exam_file">

                 
                </div>
            <!-- /.col -->
          </div>  
                 <div class="col-md-6">
              <div class="form-group">
                <label>Type <span style="color:red">*</span></label>
                <select id="exam_type" class="form-control select2" style="width: 100%;">
                  <option>Quiz1</option>
                    <option>Quiz2</option> 
                    <option>Makeup</option>
                    <option>Midterm</option>   
                    <option>Midterm</option>   
                    <option>Final Term</option>
                    <option>Medterm Summer Course</option> 
                    <option>Final Term Summer Course</option> 
                  
                </select>
              </div>
          
              </div>
       
              <div class="col-md-6">
              <div class="form-group">
          <div class="form-group">
                  <label >From Year  <span style="color:red">*</span></label>
                  <input type="text" class="form-control" id="exam_from" placeholder="Enter Year">
                </div>
              <!-- /.form-group -->
         
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>    
              <div class="col-md-6">
              <div class="form-group">
          <div class="form-group">
                  <label >To Year  <span style="color:red">*</span></label>
                  <input type="text" class="form-control" id="exam_to" placeholder="Enter Year">
                </div>
              <!-- /.form-group -->
         
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>      
              <div class="col-md-6">
              <div class="form-group">
          <div class="form-group">
                  <label >ِDoctor Name  <span style="color:red">*</span></label>
                  <input type="text" class="form-control" id="exam_doctor_name" placeholder=" Enter Doctor Name" >
                </div>
              <!-- /.form-group -->
         
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>  
              <div class="col-md-12">
              <div class="form-group">
          <div class="form-group">
                  <label for="exam_notes">Notes</label>
              <textarea type="note" class="form-control" id="exam_notes" placeholder="Enter Your Note"></textarea>
                </div>
              <!-- /.form-group -->
         
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
                          </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer" style="text-align: right">
               <button type="new" class="btn btn-success" style="    width: 10%;"><i class="fa fa-plus-circle"></i>New</button>
                  <button type="save" onclick="return validation();" class="btn btn-primary" style="    width: 10%;"><i class="fa fa-save"></i>Save</button>                
              </div>
          </div>
     
   
        <!--/.col (right) -->
      </div>
        </div>
      <!-- /.row -->
    </section>
           <section class="con" style="    padding: 0px 120px;">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-header">
              <h1 class="box-title">Exams</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                 <tr>
                  <th>Section</th>
                  <th>Level</th> 
                     <th>Term</th> 
                     <th>Course</th>
                  <th>File</th>
                     <th>Type</th>
                  <th>From Date</th>
                     <th>To Date</th>
                  <th>Doctor Name</th>
                     <th>Note</th>
               
                </tr>
                </thead>
                <tbody style="color: #000;">
            
               
           <?php
								// هذة الصفحة تستخدم لإضافة حساب
								include('config.php');
								$result = mysqli_query($con, 'select * from exams');
								$myObj=array();
								if (mysqli_num_rows($result) > 0) 
								{
									while($row = mysqli_fetch_assoc($result)) 
									{
										?>
										<tr>
											<td><?=$row["exam_section"]?></td>
											<td><?=$row["exam_level"]?></td>
											<td><?=$row["exam_term"]?></td>
											<td><?=$row["exam_course_name"]?></td>
											<td><a href="<?=$row["exam_file_path"]?>" target="_blank"><?=$row["exam_file_name"]?></a></td>
											<td><?=$row["exam_type"]?></td>
											<td><?=$row["exam_from"]?></td>
											<td><?=$row["exam_to"]?></td>
											<td><?=$row["exam_doctor_name"]?></td>
											<td><?=$row["exam_notes"]?></td>
										</tr>
										<?php
									}
								} 
								mysqli_close($con);
								?>
                  </tbody>
                  
                </table>
              </div>
            </div>
            
    <!-- /.content -->
  </div>
           </div>
                  
          
      </section>
      
    
    <footer>
	<div>Copy Right &copy; 2018 For Egyptian E_Learning Universty All Rights Reserved &reg; </div>
	</footer>
    
    <script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
	  function validation() {
			var formData = new FormData();
			formData.append('exam_section', $("#exam_section").val().trim());
			formData.append('exam_level', $("#exam_level").val().trim());
			formData.append('exam_term', $("#exam_term").val().trim());
			formData.append('exam_course_name', $("#exam_course_name").val().trim());
			formData.append('exam_type', $("#exam_type").val().trim());
			formData.append('exam_from', $("#exam_from").val().trim());
			formData.append('exam_to', $("#exam_to").val().trim());
			formData.append('exam_doctor_name', $("#exam_doctor_name").val().trim());
			formData.append('exam_notes', $("#exam_notes").val().trim());
			formData.append('exam_file', $('#exam_file')[0].files[0]);
			$.ajax({
				type: "POST",
				url: "addorupdateexam.php",
				cache: false,
				data: formData,
				dataType: "json",
				processData: false,  // tell jQuery not to process the data
				contentType: false,
				success: function(result) {
					document.getElementById("message").style.display = "none";
					document.getElementById("success").style.display = "block";
					$("#success").show().html(result['message']);
					setTimeout("location.href ='add.php';",900);						
				}
			});
		}
		</script>
</body>
</html>

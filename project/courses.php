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
					<li><a href="add.php">Add Exam</a></li>
					
					<li class="active"><a href="courses.php">All Courses</a></li>
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
           <section class="con" style="padding: 0px 161px">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-header">
              <h1 class="box-title">Your Exams</h1>
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

                  <th>View</th>
               
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
											<td><a href="<?=$row["exam_file_path"]?>" target="_blank"><button type="edit" class="btn btn-warning">View</button></a></td>
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
	
</body>
</html>

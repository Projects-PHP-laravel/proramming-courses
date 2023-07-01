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
					
					<li><a href="courses.php">All Courses</a></li>
                    <li class="active"><a href="user.php">Users</a></li>
					
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
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Users</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <form role="form">
      
			          <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              
                       <div class="form-group">
                <label>Center <span style="color:red">*</span></label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Assiut Center </option>
                  <option>Tanta Center</option>
               
                
                </select>
              </div>
              </div>
            
                   <div class="col-md-6">
              <div class="form-group">
                <label>Section <span style="color:red">*</span></label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Information Technology</option>
                  <option>Business Administeration</option>
               
                
                </select>
                       </div>
                  </div>
              
           
              <div class="col-md-6">
              <div class="form-group">
                <label>Name <span style="color:red">*</span></label>
                 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter  Name">
              </div>
          
              </div>  
              <div class="col-md-6">
              <div class="form-group">
                <label>Username <span style="color:red">*</span></label>
                 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Username">
              </div>
          
              </div>    
              <div class="col-md-6">
              <div class="form-group">
                <label>Password <span style="color:red">*</span></label>
                <input type="Pasword" class="form-control" id="exampleInputEmail1" placeholder="Enter  Password">
              </div>
          
              </div>     <div class="col-md-6">
              <div class="form-group">
                <label>Confirm Password <span style="color:red">*</span></label>
                <input type="Pasword" class="form-control" id="exampleInputEmail1" placeholder="Enter  Password again">
              </div>
          
              </div> <div class="col-md-6">
              <div class="form-group">
                <label>Type<span style="color:red">*</span></label>
                   <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Student</option>
                    <option selected="selected">Doctor</option> 
                    <option selected="selected">Assistant</option>
                  
                  
                </select>
              </div>
          
              </div>
       
            <div class="col-md-6">
              <div class="form-group">
          <div class="form-group">
                  <label >Course Name  <span style="color:red">*</span></label>
                        <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                  <option>Math1</option>
                  <option>Math2</option>
                
                </select>
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
               <button type="new" class="btn btn-success" style="width: 10%"><i class="fa fa-plus-circle"></i>New</button>
                  <button type="save" class="btn btn-primary" style="width: 10%"><i class="fa fa-save"></i>Save</button>                
              </div>
            </form>
          </div>
     
   
        <!--/.col (right) -->
      </div>
        </div>
      <!-- /.row -->
    </section>
           <section class="con" style="padding: 0px 161px">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-header">
              <h1 class="box-title">Users</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                   <tr>
                  <th>Center</th>
                  <th>Section</th> 
                     <th>Name</th> 
                     <th>Username</th>
                  <th>Type</th>
                  
                    
                  <th>Edit</th>
                  <th>Delete</th>
               
                </tr>
                </thead>
                <tbody>
            
           <tr>
                  <td>Assiut Center</td>
                  <td>It</td>
               <td>Farouk</td> <td>Fnashat</td> <td>Student</td> 
                  <td><button type="edit" class="btn btn-warning">Edit</button></td> <td><button type="edit" class="btn btn-danger">Delete</button></td>
                  
                </tr>
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

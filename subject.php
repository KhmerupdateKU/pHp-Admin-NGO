<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit User</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <?php
		include "connection.php";
		$sql = "SELECT * FROM subject";
		$sql1 = "SELECT * FROM year";
		$con->query("SET NAMES 'utf8'");
		$result = $con->query($sql);
		$result1 = $con->query($sql1);
	?> 
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i>Question & Answer</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Subjects</a>
                    </li>
						   <li  >
                        <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Years</a>
                    </li>	
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> User</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
		 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Subject & Year</h2>   
                        <h5>Welcome</h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Subject & year
                        </div>
                        <div class="panel-body">
						<form role="form">
                            <div class="row">
                                <div class="col-md-6">                                  
                                    <div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example">
											<thead>
											<tr>
												<th>Id</th>
												<th>Subject</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
											</thead>
											<tbody>
											<?php
												if ($result->num_rows > 0) {
												// output data of each row
													while($row = $result->fetch_assoc()) {
														echo 	"<tr>
														<td>" . $row['id'] . "</td>
														<td>" . $row['name'] . "</td>
														<td class='center'><a class='btn btn-primary' href='subjectedit.php?id=" . $row['id'] . "'>Edit</a></td>
														<td class='center'><a class='btn btn-danger' href='subjectdelete.php?id=" . $row['id'] . "'>Delete</a></td>
														</tr>";
													}
												} else {
													echo "0 results";
												}                       
											?>				
											</tbody>
										</table>
									</div>
									<a href="insertsubject.php" class='btn btn-success'>Insert</a>	
								</div>
								<div class="col-md-6">                                  
                                      <div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example">
											<thead>
											<tr>
												<th>Id</th>
												<th>Year</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
											</thead>
											<tbody>
											<?php
												if ($result1->num_rows > 0) {
												// output data of each row
													while($row1 = $result1->fetch_assoc()) {
														echo 	"<tr>
														<td>" . $row1['id'] . "</td>
														<td>" . $row1['year'] . "</td>
														<td class='center'><a class='btn btn-primary' href='yearedit.php?id=" . $row1['id'] . "'>Edit</a></td>
														<td class='center'><a class='btn btn-danger' href='yeardelete.php?id=" . $row1['id'] . "'>Delete</a></td>
														</tr>";
													}
												} else {
													echo "0 results";
												}                       
											?>				
											</tbody>
										</table>
										<a href="insertyear.php" class='btn btn-success'>Insert</a>	
									</div>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>		
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
</body>
</html>

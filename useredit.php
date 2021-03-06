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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script>
		$(document).ready(function(){
			$("#hide").hide();
			$("#button").hide();
			$("#edit").click(function(){
				$("#hide").show();
			});
			$("#re").keyup(function(){
				if($("#new").val() == $("#re").val()){
					$("#button").show();
				}
				else{
					$("#button").hide();
				}
			});
		});
	</script>
	<?php
		include "connection.php";
		$sql = "SELECT * FROM user where id='" . $_GET['id'] . "';";
		$result = $con->query($sql);
		$row = $result->fetch_assoc();
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
                     <h2>User Form</h2>   
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
                            User Form
                        </div>
                        <div class="panel-body">
						<form role="form" action="edit.php" method="post">
                            <div class="row">
                                <div class="col-md-11">                                  
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input name="username" class="form-control" value="<?php echo $row['username'];?>" />
                                        </div>
								</div>
							</div>
							<div class="row">
                                <div class="col-md-11">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" readonly value="<?php echo str_repeat ('*', strlen ($row['password'])); ?>" />
                                        </div>                                   
								</div>
								<div class="col-md-1">
									<div class="row">
                                        <div class="col-md-1">
										&nbsp;
                                        </div>       
									</div>	
									<div class="row">
                                        <div class="col-md-1">
                                            <a id="edit">Edit</a>
                                        </div>       
									</div>	
								</div>
							</div>
							<div id="hide">
							<div class="row">
                                <div class="col-md-11">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" id="new" name="password" class="form-control" />
                                        </div>                                   
								</div>
							</div>
							<div class="row">
                                <div class="col-md-11">
                                        <div class="form-group">
                                            <label>Retype New Password</label>
                                            <input type="password" id="re" class="form-control" />
                                        </div>                                   
								</div>
							</div>
							</div>
							 <input type="hidden" name="id" value="<?php echo $row['id'];?>"> 
							<div class="row">
                                <div id="button" class="col-md-11">
                                    <input class="btn btn-success" type="submit" value="Change"/>                                 
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

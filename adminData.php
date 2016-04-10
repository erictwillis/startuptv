<!DOCTYPE html>
<?php 
include_once("db_connect.php");

$selStartupData=mysql_fetch_array(mysql_query("select * from startuptv where id=1"));
$btnSel=$selStartupData['btnText'];
$currentHost=$selStartupData['currentHost'];
$bio=$selStartupData['bio'];
$topic=$selStartupData['topic'];
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Startup TV | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 
  <!-- Left side column. contains the logo and sidebar -->
 <?php 
 include('activeVariables.php');
$section1="active";
 include('menu.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Section 1        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
 <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Section 1</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="frm1" method="post">
              <div class="box-body">
			  <div class="form-group">
			  <label for="txtsign">Sign Up Button Text</label>
                    <textarea id="compose-textarea" name="compose-textarea" class="form-control" style="height: 300px" >
                      <?php echo $btnSel; ?>
                    </textarea>
              </div>
                <div class="form-group">
                  <label for="currentHost">Current Host:</label>
                  <input type="text" class="form-control" id="currentHost" name="currentHost" title="Enter Current Host Here...." value="<?php echo $currentHost; ?>" placeholder="Enter Current Host Here...." required>
                </div>
				<div class="form-group">
                  <label for="bio">Bio:</label>
                  <input type="text" class="form-control" id="bio"  name="bio" value="<?php echo $bio; ?>" title="Enter BIO Here...." placeholder="Enter BIO Here...." required>
                </div>
				<div class="form-group">
                  <label for="Topics">Topic:</label>
                  <input type="text" class="form-control" id="Topics" name="Topics" value="<?php echo $topic; ?>" title="Enter Topic Here...." placeholder="Enter Topic Here...." required >
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit" id="btnsubmit">
              </div>
            </form>
          </div>
	  </div>
	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Startup TV</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script>
$('#frm1').submit(function(event)
	{
		
		var btnText=$("#compose-textarea").val();
		var currentHost=$("#currentHost").val();
		var bio=$("#bio").val();
		var topics=$("#Topics").val();
		$.post('insertsectionDetails.php', {'btntext':btnText,'currentHost':currentHost,'bio':bio,'topics':topics}, function(data)
			{
				
				if(data=="Success"){
					alert("Data Successfully Updated");
					window.location='adminData.php';
					
				}
			});
		event.preventDefault();
		return;
	});
</script>

</body>
</html>

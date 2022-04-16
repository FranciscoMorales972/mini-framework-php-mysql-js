<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo assets();?>assets/images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | <?php echo $data["page_name"];?></title>

    <!-- Bootstrap -->
    <link href="<?php echo assets();?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome
    <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- NProgress -->
    <link href="<?php echo assets();?>css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo assets();?>css/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo assets();?>css/bootstrap-progressbar.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo assets();?>css/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo assets();?>css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo assets();?>css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <h1 class="error-number">404</h1>
              <h2>Sorry but we couldn't find this page</h2>
              <p>This page you are looking for does not exist <a href="<?php echo BASE_URL();?>Home/index">Go Back</a>
              </p>
              <div class="mid_center">
                <h3>Search</h3>
                <form>
                  <div class="  form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                              <button class="btn btn-secondary" type="button">Go!</button>
                          </span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>

   
  </body>
</html>

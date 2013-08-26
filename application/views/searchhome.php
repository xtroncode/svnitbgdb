<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Donor Finder</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="/ci/less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="/ci/less/responsive.less" type="text/css" /-->
	<!--script src="/ci/js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="/ci/css/bootstrap.min.css" rel="stylesheet">
	<link href="/ci/css/bootstrap-responsive.min.css" rel="stylesheet">
	

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="/ci/js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="/ci/js/jquery.min.js"></script>
	<script type="text/javascript" src="/ci/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/ci/js/scripts.js"></script>
<style type="text/css">
body{
  /*background: #2DAEBF;
  color: white;*/
}
.center {
   margin: 0 auto !important;
   float: none !important;
}
input[type=text],select,textarea,.add-on {border:2px solid #2980b9;-webkit-appearance: none; height: 38px}
.header{border-bottom:2px solid #2980b9;}
</style>
</head>

<body>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12 text-center header">
      <a href="http://svnit.ac.in" target="_blank" style="letter-spacing:10px">SARDAR VALLABHBHAI NATIONAL INSTITUTE OF TECHNOLOGY,  SURAT</a>
  <h1 style="padding:10px">BLOOD GROUP DATABASE</h1>
  </div>
</div>
	<div class="row-fluid">

		<div class="span3 center">
      <?php echo validation_errors(); ?>
      <?php echo form_open('search'); ?>
     <form>
  <div class="input-append span3">    
      <input style="border:5px solid #2980b9;" id="appendedInputButtons" type="hidden" name="page" value="0"><select style="font-size:22px ;letter-spacing:2.5px" name="bg">
  <option>O +ve</option>
  <option>O -ve</option>
  <option>B +ve</option>
  <option>B -ve</option>
  <option>A +ve</option>
  <option>A -ve</option>
  <option>AB +ve</option>
  <option>AB -ve</option>
</select>
<button style="height: 38px; background: #2980B9;
border: 1px #2980B9 solid;
color: white;" type="submit" class="btn ">Find Donor</button>
   <!--<a href="/ci/"  style="height: 30px; background: #2980B9;
border: 1px #2980B9 solid;
color: white;" >Home</a>-->
</div>
</form>
	</div>	
<div class="row-fluid"  id="searchResult" >
  
    <div class="span12">
      <ul class="pager">
  <li class="previous">
    <a href="/ci/index.php/search/pagin/<?php echo $prev;?>">&larr; Previous</a>
  </li>
  <li class="next">
    <a href="/ci/index.php/search/pagin/<?php echo $next;?>">Newer &rarr;</a>
  </li> 
</ul>
      <table class="table table-condensed">
        <thead>
          <tr>
            
            <th>
              Name
            </th>
            <th>
              Blood Group
            </th>

            <th>
              Email
            </th><th>
              Roll No.
            </th><th>
              Branch
            </th><th>
             Hostel
            </th>
            <th>
             Address/Room No.
            </th>            
          </tr>
        </thead>
        <tbody>
          <?php echo $result; ?>
        </tbody>
      </table>
    </div>
  </div>
  <hr>
<footer class="span11 text-center">
  <center>Powered by - <a href="https://www.facebook.com/webdevlabs" alt="webdevlabs"
          target="_blank" title="Find us on Facebook"><img src="/ci/img/wd150.png"  width="70" align="center"></a>
</footer>
</div>
</body>
</html>

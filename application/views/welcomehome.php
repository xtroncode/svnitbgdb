<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Donor Finder</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
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
<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'clean'
 };
 </script>
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
  <!-- <a href="/ci/" class="btn btn-primary ">Home</a> -->
</div>
</form>
		</div>
	</div> </div>
    
	<div class="row-fluid">
		
		<div class="span6 center" id="addform">
			<?php echo $txt; ?>
			
			<?php echo form_open('addnew'); ?>
			<form>	<fieldset>
         <legend>Register Yourself as Donor</legend>




<div class="row-fluid">
<div class="span6">       
					 <div class="controls">
            <?php echo form_error('name'); ?>
					 	<input class="span11" type="text" id="Name" name="name" value="<?php echo set_value('name'); ?>" placeholder="Full Name" required>
   </div>
   <div class="controls">
    <?php echo form_error('email'); ?>
      <input style="border:2px solid #2980b9;" class="span11" type="text" id="inputEmail" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email" required>
  </div>

  <div class="controls">
            <?php echo form_error('rollno'); ?>
            <input class="span11" type="text" id="rollno" name="rollno" maxlength="10" value="<?php echo set_value('rollno'); ?>" placeholder="Admission Number" required>
   </div>


<div class="controls">
        
        <label><span class="label">Branch</span></label>
        <?php echo form_error('branch'); ?>
      <select class="span11" name="branch">
  
  <option <?php echo set_select('branch','Applied Chemistry');?>>Applied Chemistry</option>
  <option <?php echo set_select('branch','Applied Mathematics');?>>Applied Mathematics</option>
  <option <?php echo set_select('branch','Applied Physics');?>>Applied Physics</option>
  <option <?php echo set_select('branch','Civil Engineering');?>>Civil Engineering</option>
  <option <?php echo set_select('branch','Chemical Engineering');?>>Chemical Engineering</option>
  <option <?php echo set_select('branch','Computer Engineering');?>>Computer Engineering</option>
  <option <?php echo set_select('branch','Electrical Engineering');?>>Electrical Engineering</option>
  <option <?php echo set_select('branch','Electronics Engineering');?>>Electronics Engineering</option>
  <option <?php echo set_select('branch','Mechanical Engineering');?>>Mechanical Engineering</option>
  <option <?php echo set_select('branch','M.Tech');?>>M.Tech</option>
  <option <?php echo set_select('branch','Ph.D');?>>Ph.D</option>

</select></div>
      <div class="controls">
        
      	<label><span class="label">Blood Group<span></label>
        <?php echo form_error('bg'); ?>
      <select class="span11" name="bg">
  <option <?php echo set_select('bg','O +ve');?>>O +ve</option>
  <option <?php echo set_select('bg','O -ve');?>>O -ve</option>
  <option <?php echo set_select('bg','B +ve');?>>B +ve</option>
  <option <?php echo set_select('bg','B -ve');?>>B -ve</option>
  <option <?php echo set_select('bg','A +ve');?>>A +ve</option>
  <option <?php echo set_select('bg','A -ve');?>>A -ve</option>
  <option <?php echo set_select('bg','AB +ve');?>>AB +ve</option>
  <option <?php echo set_select('bg','AB -ve');?>>AB -ve</option>
</select>

</div>
</div>

<div class="span6">
<div class="controls">
  <?php echo form_error('contact'); ?>
<div class="input-prepend ">
  <span class="add-on" style="border:2px solid #2980b9;height:26px">+91</span>
  <input class="span11" name="contact" id="contact" type="text" value="<?php echo set_value("contact"); ?>" maxlength="10" placeholder="Contact" required>
</div>
</div>



<div class="controls">
        
        <label><span class="label">Hostel Name</span></label>
        <?php echo form_error('hostel'); ?>
      <select class="span11" name="hostel">
  <option <?php echo set_select('hostel','Bhabha Bhavan'); ?>>Bhabha Bhavan</option>
  <option <?php echo set_select('hostel','Gajjar Bhavan'); ?>>Gajjar Bhavan</option>
  <option <?php echo set_select('hostel','Tagore Bhavan'); ?>>Tagore Bhavan</option>
  <option <?php echo set_select('hostel','Nehru Bhavan'); ?>>Nehru Bhavan</option>
  <option <?php echo set_select('hostel','Sarabhai Bhavan'); ?>>Sarabhai Bhavan</option>
  <option <?php echo set_select('hostel','Raman Bhavan'); ?>>Raman Bhavan</option>
  <option <?php echo set_select('hostel','Swami Vivekanand Bhavan'); ?>>Swami Vivekanand Bhavan</option>
  <option <?php echo set_select('hostel','Mother Teresa Bhavan'); ?>>Mother Teresa Bhavan</option>
  <option <?php echo set_select('hostel','Localite'); ?>>Localite</option>
</select>

</div>
   <div class="controls">
    <?php echo form_error('age'); ?>
					 	<input class="span11" type="text" maxlength="2" id="age" name="age" value="<?php echo set_value('age'); ?>" placeholder="Age" required>
   </div>

   <div class="controls">
    <?php echo form_error('address'); ?>
      <textarea style="height:113px" class="span11" type="text"  name="address"  maxlength="100"  placeholder="Address/Room No." required><?php echo set_value('address'); ?></textarea>

  </div>

  </div></div> <hr>
  <div class="span12 center">
    <?php echo $recaptcha_html; ?>
      		 <button style="margin-top:10px; background:#3498db;border:2px solid white;outline:2px solid #3498db;color:white;font-weight:200;font-size:32px"  type="submit" class="btn btn-large btn-block">SUBMIT</button>

    </div>



				</fieldset>
			</form>
		</div><hr>
<footer class="span11 text-center">
  <center>Powered by - <a href="https://www.facebook.com/webdevlabs" alt="webdevlabs"
          target="_blank" title="Find us on Facebook"><img src="/ci/img/wd150.png"  width="70" align="center"></a>
          
</footer>

</div>
</body>
</html>

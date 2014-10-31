<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Geekulcha Intern</title>

    <!-- Bootstrap Core CSS -->
	<link href="img/favico.ico" rel="shortcut icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.center {
    margin-left: auto;
    margin-right: auto;
    width: 70%;
    background-color: ;
}
</style>
</head>

<body>

    <div class="brand">Apply</div>
    

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="index.php">About</a>
                    </li>
                    <li>
                        <a href="Apply.php">Apply</a>
                    </li>
                    <li>
                        <a href="DevStuff.php">Dev Stuff</a>
                    </li>
					<li >
                        <a href="index.php">GK Internship</a>
                    </li>
					
					<li>
                        <a href="">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Apply</strong>
                    </h2>
                    <hr>
                </div>
            
                <div class="center" >

				<script type="text/javascript"> 
function security (form){

re = /^[A-Za-z]+$/;
    if(!re.test(form.f_name.value)) {
      alert("Error: Username must contain only letters, not  numerics and symbol characters!");
      form.username.focus();
      return false;
    }
	re = /^[A-Za-z]+$/;
    if(!re.test(form.l_name.value)) {
      alert("Error: Username must contain only letters, not  numerics and symbol characters!");
      form.username.focus();
      return false;
   }
var x = document.forms["form"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	
}
</script>

<?php
if(!empty($_POST['submit']) && isset($_POST)) {

$fname = mysql_real_escape_string($_POST['f_name']);
$lname = mysql_real_escape_string($_POST['l_name']);
$age = mysql_real_escape_string($_POST['age']);
$tech = mysql_real_escape_string($_POST['tech']);
$uni = mysql_real_escape_string($_POST['univ']);
$univ = mysql_real_escape_string($_POST['unive']);
$phone = mysql_real_escape_string($_POST['phone']);
$email = mysql_real_escape_string($_POST['email']);

$ref = 'GK14-'.rand(1000, 9999).rand(0, 9);

$messageApplicant = 'Hi '.$fname.' '.$lname.', <br><br>We have received your application for internship. Your reference number is '.$ref.'. Keep this number safe and we will contact you for more details.';
$messageGeekulcha = 'New Applicant <br><br>Here is the info about the applicant<br><br> Name : '.$fname.'<br><br>Last Name: '.$lname.'<br><br>Age: '.$age.'<br><br>The University/institution :  '.$uni.$univ.'<br><br>The contact number of applicant:  '.$phone.'<br><br>Email address: '.$email.'<br><br>The ref no: '.$ref ;

$headers = "From: " . strip_tags('intern@geekulcha.com') . "\r\n";
                                 $headers .= "Reply-To: ". strip_tags('intern@geekulcha.com') . "\r\n";
                                 $headers .= "MIME-Version: 1.0\r\n";
                                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";                                  

				mail('intern@geekulcha.com', 'New Application', $messageGeekulcha, $headers); 
				mail($email, 'Geekulcha Intership', $messageApplicant, $headers);

}
else {

?>
				
                    <form name="form"  action="" onsubmit="return security(this);" method="post" enctype="text/plain">
					<input type="text" placeholder="First Name" name="f_name" class="form-control input-hg" required /><br />
					<input type="text" placeholder="Last Name" name="l_name" class="form-control" required /><br />
				    <input type="text" placeholder="Age" name="age"  class="form-control" required /><br />
					<input type="text" placeholder="Tech Interests" name="tech" class="form-control" required /><br />
					
					<select class="form-control" name="univ">
					<option> University/Institution</option>
					<option>University of Cape Town</option>
					<option>Central University of Technology</option>
					<option>University of Johannesburg</option>
					<option>University of Pretoria</option>
					<option>University of the Witwatersrand</option>
					<option>Stellenbosch University</option>
					<option>North-West University</option>
					<option>University of KwaZulu-Natal</option>
					<option>Tshwane University of Technology</option>
					<option>Unisa</option>
					<option>University of the Free State</option>
					<option>Nelson Mandela Metropolitan University</option>
					<option>University of Limpopo</option>
					<option>University of  Venda</option>
					<option>Walter Sisulu University</option>
					<option>Vaal University of Technology</option>
					<option>University of Western Cape</option>
					<option>Others</option>
					
					</select><br />
					<input type="text" placeholder="Specify Institution here if not listed above" name="unive" class="form-control" /><br />
					<input type="text" placeholder="Phone Number" name="phone" class="form-control" required /><br />
                     <input type="text" placeholder="Email Address" name="email" class="form-control" required /><br />
					 <h3>Tech Interests<h3>
					 <select>
					 <option>Web : Which of this languages can you use</option>
					 <option>HTML5</option>
					 <option>CSS3</option>
					 <option>PhP</option>
					 <option>Front End </option>
					 <option> Back End </option>
					 </select>
						
						<input type="submit" name="submit" class="btn btn-danger" value="Submit" >
				  
				    <td>
				  
				  </form>
				  
				
	<?php } ?>			  
				  
				  
                </div>
            </span>
                <div class="clearfix"></div>
            </div>
        </div>

        

    </div>
    <!-- /.container -->

<footer>
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p style="color:#7B7B7B;font-weight: 100;
font-size: 14px;padding-bottom: 10px;
padding-top: 10px;">Copyright &copy; Geekulcha 2014</p>
                </div>
            </div>
            <address>
                U8 Enterprise Building <br>
                The Innovation Hub <br>
                Presquor <br>
                0087 <br>
                Phone: 074 373 0639 <br>
                E-mail: <a href="mailto:info@geekulcha.com">info@geekulcha.com</a> <br>
            </address>
        </div>
    </div>
</footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
 <script src="Jscript/Jintern.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
	
		//user => password
	$users = array('admin' => 'mypass', 'guest' => 'guest', 'jessie' => 'pwd');
	
	
	if (!isset($_SERVER['PHP_AUTH_USER'])) {
		header('WWW-Authenticate: Basic realm="My Realm"');
		header('HTTP/1.0 401 Unauthorized');
		echo 'Text to send if user hits Cancel button';
		exit;
	} else {
		$userName = $_SERVER['PHP_AUTH_USER']; 
		$passWord = $_SERVER['PHP_AUTH_PW']; 
		
		if (strcmp($users[$userName], $passWord) == 0)
		{
			echo "<p>Hello {$userName}.</p>";
			echo "<p>You entered {$passWord} as your password.</p>";
		}
		else
		{
			echo 'wrong pwd';
			die('Wrong Credentials!');
		}
	}
	
	
	
	?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="default.css" />

<!--jquery UI files-->
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/separate_file.js"></script>

<title>Reimbursement INFO</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>









<!--
<table class="outter" width="100%" align="center"> 
<tr><td class="banner" colspan="3" align="center"><a href="../">
<img src="http://www.tizag.com/pics/tizagSugar.jpg" alt="IMP Logo" /></a>
</td></tr>
</table>
-->
<h1>IMP Reimbursements</h1>
<table class="outter" width="779" align="center"> 
<tr valign="top">
<td class="menu">
<table class="menu"><tr><td>
<div id="menu">

<!--
<a href="http://www.tizag.com/" >Home</a>
<hr/>
<a href="http://www.tizag.com/htmlT/" >HTML Tutorial</a>
<a href="http://www.tizag.com/cssT/" >CSS Tutorial</a>
<br /><b>Scripting</b>
<a href="http://www.tizag.com/javascriptT/" >Javascript Tutorial</a>
<a href="http://www.tizag.com/phpT/" >PHP Tutorial</a>
<a href="http://www.tizag.com/perlT/" >PERL Tutorial</a>
<a href="http://www.tizag.com/ajaxTutorial/" >Ajax Tutorial</a>
<a href="http://www.tizag.com/aspTutorial/" >ASP Tutorial</a>
<a href="http://www.tizag.com/vbscriptTutorial/" >VBScript Tutorial</a>

<br /><b>Databases</b>
<a href="http://www.tizag.com/sqlTutorial/" >SQL Tutorial</a>
<a href="http://www.tizag.com/mysqlTutorial/" >MySQL Tutorial</a>
<br /><b>Miscellaneous</b>
<a href="http://www.tizag.com/xmlTutorial/" >XML Tutorial</a>
<a href="http://www.tizag.com/webhost/" >Web Host Guide</a>
<a href="http://www.tizag.com/flashTutorial/" >Flash Tutorial</a>
<hr />
<b>PHP - HTML Form Example</b>
<a href="http://www.tizag.com/phpT/examples/formex.php" >Form Building</a>
<a href="http://www.tizag.com/phpT/examples/formvar.php" >HTML Variables</a>
<a href="http://www.tizag.com/phpT/examples/formfinale.php" >Form Display</a>
<hr />
<a href="http://www.tizag.com/about/contact.php" >Contact Us</a> 
-->
</div>
</td></tr></table>
</td>

<td width="529">
<table class="main" cellpadding="8">

<tr><td class="mainIn"><html> 


* Required<br/><br/>
<form method="post" action="enter.php"> 
What is your name?*:<br />
(first and last)<br/>
<input type="text" size="12" maxlength="12" name="Fname"><br /><br />

What house or committee are you seeking a reimbursement for?*:<br />
<select name="house">
<option value="aile">Aile</option>
<option value="gajok">Gajok</option>
<option value="gesin">Gesin</option>
<option value="iyali">Iyali</option>
<option value="jiating">Jia Ting</option>
<option value="kazoku">Kazoku</option>
<option value="khandaan">Khandaan</option>
<option value="ohana">Ohana</option>
<option value="oikogeneia">Oikogeneia</option>
<option value="pamilya">Pamilya</option>
<option value="parivar">Parivar</option>
<option value="perhe">Perhe</option>
<option value="perodica">Perodica</option>
<option value="rodzina">Rodzina</option>
<option value="semja">Semja</option>
<option value="semejstvo">Semejstvo</option>
<option value="academic">Committee--Academic Affairs</option>
<option value="college">Committee--College Prep</option>
<option value="community">Committee--Community Service</option>
<option value="events">Committee--Events</option>
</select><br /><br />

Date of Event*:<br />
<input id="datepicker" type="text" name="date"><br /><br />

Name of Vendor*:<br />
e.g., restaurant name<br/>
<input type="text" size="12" maxlength="12" name="vendor"><br /><br />

Total Amount Spent*:<br />
Please just write the numeric amount<br/>
<input type="text" size="12" maxlength="12" name="amount"><br /><br />

Amount Spent per Student:<br/>
Divide the total by the number of students present (if applicable)<br/>
<input type="text" size="12" maxlength="12" name="amountps"><br /><br />

What was the purpose of the expense? * <br/>
<textarea rows="5" cols="20" name="purpose" wrap="physical">quick description</textarea><br /><br />

Number of mentors present, if it was a family event*:<br />
Please just write the numeric amount<br/>
<input type="text" size="12" maxlength="12" name="number"><br /><br />

Which student(s) were with you?:<br />
Check all that apply<br/>
<input type="checkbox" value="Dante13" name="student[]">Dante '13<br />
<input type="checkbox" value="Dariz13" name="student[]">Dariz '13<br />
<input type="checkbox" value="Diamond13" name="student[]">Diamond '13<br />
<input type="checkbox" value="Erica13" name="student[]">Erica '13<br />
<input type="checkbox" value="Kayla13" name="student[]">Kayla '13<br />
<input type="checkbox" value="Keith13" name="student[]">Keith '13<br />
<input type="checkbox" value="Leroy13" name="student[]">Leroy '13<br />
<input type="checkbox" value="Mark13" name="student[]">Mark '13<br />
<input type="checkbox" value="Miguel13" name="student[]">Miguel '13<br />
<input type="checkbox" value="Myron13" name="student[]">Myron '13<br />
<input type="checkbox" value="Rashad13" name="student[]">Rashad '13<br />
<input type="checkbox" value="Reggie13" name="student[]">Reggie '13<br />
<input type="checkbox" value="Rodney13" name="student[]">Rodney '13<br />
<input type="checkbox" value="Tolu13" name="student[]">Tolu '13<br />
<input type="checkbox" value="Tyesha13" name="student[]">Tyesha '13<br />
<input type="checkbox" value="Tyler13" name="student[]">Tyler '13<br />
<input type="checkbox" value="Albert10" name="student[]">Albert '10<br />
<input type="checkbox" value="Angel10" name="student[]">Angel '10<br />
<input type="checkbox" value="Brian10" name="student[]">Brian '10<br />
<input type="checkbox" value="Christina10" name="student[]">Christina '10<br />
<input type="checkbox" value="Clarence10" name="student[]">Clarence '10<br />
<input type="checkbox" value="Derrell10" name="student[]">Derrell '10<br />
<input type="checkbox" value="Devin10" name="student[]">Devin '10<br />
<input type="checkbox" value="Donte10" name="student[]">Donte '10<br />
<input type="checkbox" value="Eddie10" name="student[]">Eddie '10<br />
<input type="checkbox" value="Eric10" name="student[]">Eric '10<br />
<input type="checkbox" value="Janel10" name="student[]">Janel '10<br />
<input type="checkbox" value="Kayla10" name="student[]">Kayla '10<br />
<input type="checkbox" value="Kierra10" name="student[]">Kierra '10<br />
<input type="checkbox" value="Shawanda10" name="student[]">Shawanda '10<br />
<input type="checkbox" value="Shawn10" name="student[]">Shawn '10<br />
<input type="checkbox" value="Tracee10" name="student[]">Tracee '10<br />
<input type="checkbox" value="Brittany07" name="student[]">Brittany '07<br />
<input type="checkbox" value="Dalonte07" name="student[]">Dalonte '07<br />
<input type="checkbox" value="Derick07" name="student[]">Derick '07<br />
<input type="checkbox" value="Devin07" name="student[]">Devin '07<br />
<input type="checkbox" value="Dhaujee07" name="student[]">Dhaujee '07<br />
<input type="checkbox" value="Donnise07" name="student[]">Donnise '07<br />
<input type="checkbox" value="Eric07" name="student[]">Eric '07<br />
<input type="checkbox" value="Greg07" name="student[]">Greg '07<br />
<input type="checkbox" value="Judy07" name="student[]">Judy '07<br />
<input type="checkbox" value="Kendall07" name="student[]">Kendall '07<br />
<input type="checkbox" value="Maurice07" name="student[]">Maurice '07<br />
<input type="checkbox" value="Shardae07" name="student[]">Shardae '07<br />
<input type="checkbox" value="Tavon07" name="student[]">Tavon '07<br />
<input type="checkbox" value="Terrance07" name="student[]">Terrance '07<br />
<input type="checkbox" value="Tynecia07" name="student[]">Tynecia '07<br />
<input type="checkbox" value="Dashia14" name="student[]">Dashia '14<br />
<input type="checkbox" value="Devin14" name="student[]">Devin '14<br />
<input type="checkbox" value="Dominic14" name="student[]">Dominic '14<br />
<input type="checkbox" value="Emmanuel14" name="student[]">Emmanuel '14<br />
<input type="checkbox" value="Gerald14" name="student[]">Gerald '14<br />
<input type="checkbox" value="Jamal14" name="student[]">Jamal '14<br />
<input type="checkbox" value="Jayvon14" name="student[]">Jayvon '14<br />
<input type="checkbox" value="KenShawna14" name="student[]">Ken'Shawna '14<br />
<input type="checkbox" value="Kori14" name="student[]">Kori '14<br />
<input type="checkbox" value="Lazai14" name="student[]">Lazai '14<br />
<input type="checkbox" value="Linaya14" name="student[]">Linaya '14<br />
<input type="checkbox" value="Nelson14" name="student[]">Nelson '14<br />
<input type="checkbox" value="Quante14" name="student[]">Quante '14<br />
<input type="checkbox" value="SaeQwon14" name="student[]">Sae-Qwon '14<br />
<input type="checkbox" value="Tre14" name="student[]">Tre '14<br />
<input type="checkbox" value="Tyia14" name="student[]">Tyia '14<br />
<input type="checkbox" value="General" name="student[]">General Expense-Not for Student<br /><br />

<input type="submit" value="submit" name="submit">
</form>

<br /><br /><br />
</td></tr>
</table>
</td>
<td width="100">
<!--
<table class="rightCol">
<tr><td>
<div id="rightMenu">

<b>Web Reference</b><br />
<a class="menu"href="http://www.tizag.com/htmlT/reference/htmlreference.php">HTML Reference</a>
<a class="menu"href="http://www.tizag.com/cssT/reference.php">CSS Reference</a>
<a class="menu"href="http://www.tizag.com/cssT/liveExampleCss/">CSS Examples</a>
<hr />
<b>Support Tizag</b><br />
<a class="menu"href="http://www.tizag.com/about/linkus.php">Link to Tizag</a>
<hr />
<a href="http://www.google.com" target="_blank">Google</a>	

</div>
</td></tr>
</table>
<hr/>
-->
<table class="rightCol">
<tr><td>


</td></tr>
</table>
<table class="rightCol">
<tr><td>


</td></tr>
</table>

</td>
</tr>
<tr>
<td colspan="3">
<p align="Center">Copyright 2011 Incentive Mentoring Program</p>
</td></tr>

</table>
</body>




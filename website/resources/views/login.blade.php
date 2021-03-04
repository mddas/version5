<html>
<head>
<link href="/css/index.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<div id="header_wrapper">
 <div id="header">
 <li id="sitename"><a href="http://localhost/thekurakani/">Jello</a></li>
 <form action="loginsubmit" method="post">
 @csrf
 <li>Email or Phone<br><input type="text" name="email"></li>
 <li>Password<br><input type="password" name="password"><br><a href="">Forgotten account?</a></li>
 <li><input type="submit" name="login" value="Log In"></li>
 </form>
 </div>
</div>

<div id="wrapper">

<div id="div1">
<center>
<p>Jello is for Nepal <br></p>
<img src="images/facebook.png">
</center>
</div>

<div id="div2">
	 <form action="signupsubmit" method="post">
	 @csrf
<li><input type="text" placeholder="First Name" id="firstname" name="first_name"><input type="text" placeholder="Surname" id="surname" name="last_name"></li>
<li><input type="text" placeholder="Mobile number or email address" name="email"></li>
<li><input type="password" placeholder="New password" name="password"></li>
<li><input type="text" placeholder="District" id="district"><input type="number" placeholder="state" min="1" max="7" id="name"></li>

<select name="dropdown">
	<option value="Day">Day</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	<option value="32">32</option>
</select>
<select name="dropdown">
	<option>Month</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
</select>
<select>
	<option>Year</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>
	<option>1998</option>
	<option>1999</option>
	<option>2000</option>
	<option>2001</option>
	<option>2002</option>
	<option>2003</option>
	<option>2004</option>
	<option>2005</option>
	<option>2006</option>
	<option>2007</option>
	<option>2008</option>
	<option>2009</option>
	<option>2010</option>
	<option>2011</option>
	<option>2012</option>
	<option>2013</option>
	<option>2014</option>
	<option>2015</option>
	<option>2016</option>
	<option>2017</option>
	<option>2018</option>
	<option>2019</option>
</select>
</li>
<li><input type="radio">Female <input type="radio">Male</li>
<li><input type="submit" value="Create an account"></li>
</form>
</div>

</div>

<div id="footer_wrapper">

<div id="footer1">
English (UK) <a href="">nepali</a><a href="">hindi</a><a href=""> اردو</a><a href="">தமிழ்</a><a href="">বাংলা</a><a href="">मराठी</a><a href="">తెలుగు</a><a href="">ગુજરાતી</a><a href="">ಕನ್ನಡ</a><a href="">മലയാളം</a>
</div>
<div id="footer2">
<a href="">Sign Up</a><a href="">Log In</a><a href="">Messenger</a><a href="">Jello</a><a href="">Mobile</a><a href="">Find Friends</a><a href="">Badges</a><a href="">People</a><a href="">Pages</a><a href="">Places</a><a href="">Games</a><a href="">Locations</a><a href="">Celebrities</a><a href="">Groups</a><a href="">Moments</a><a href="">About</a><a href="">Create Advert</a><a href="">Create Page</a><a href="">Developers</a><a href="">Careers</a><a href="">Privacy</a><a href="">Cookies</a><a href="">Ads</a><a href="">Terms</a><a href="">Help</a>
<p>Design By Jello.com</a>
</div>

</div>
</body>
</html>

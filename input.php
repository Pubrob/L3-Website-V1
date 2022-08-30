<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="bg-dark navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="input.php">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gaming.html">Gaming</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="health.html">Health</a>
      </li>     
    </ul>
  </div>  
</nav>

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="jquery.backstretch.min.js"></script>
<script src="backstretch.js"></script>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Got any questions feel free to contact us below!</p>
  </div>
  <div class="row">
    <div class="column">
      <label>Contact us directly!</label>
      <p style="background-color: white;">
      Our email:<br>stu20245@ashs.school.nz<br><br><br>
      Our phone number:<br>0226760424<br><br><br>
      Our address:<br>536 Albany Highway, Albany, Auckland 0632</p>
      <img src="images/logo.png" width="100%" height="50%">
    </div>
    <div class="column">
      <form method ="POST" action="insertDB.php" class="cf">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstName" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastName" placeholder="Your last name..">
        <label for="email">Email</label>
		<input type="text" id="email" name="email" placeholder="Your email...">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</div>

</body>
</html>
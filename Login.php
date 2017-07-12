<!DOCTYPE html>
<html>
<title>SYSINTG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Login:</h2>
        <div class="w3-container">
		<form method="post" action="verify.php">
          <h6><span class="w3-tag w3-teal w3-round">Username : </span></h6>
		  <input required type="text" name="username">
		  <h6><span class="w3-tag w3-teal w3-round">Password : </span></h6>
		  <input required type="password" name="password"></br>
		  </br>
		  <input type="submit" name="submit">
		  </form>
          <hr>
          <hr>
        </div> 
      </div>


    <!-- End Right Column -->
    </div>
	</div>
	</div>
	
</body>
</html>
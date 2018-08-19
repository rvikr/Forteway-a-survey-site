
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php include 'header.php'; ?>
<nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="#">About</a></li>
        
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a><span class="glyphicon glyphicon-log-in"></span> <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></a></li>
          <li><a href="logout.php" class="btn btn-danger">Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron text-center" id="jumb">
  <h1>Forteway</h1> 
  <p>Get rewards on each survey</p> 
  
</div>
<!-- content here -->

<div id="pricing" class="container-fluid">
  
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeeNhTlP8DjnMJdZ6m_BKDz3-PfngJpB5f0wGQuMPAzkV3xPw/viewform?embedded=true" width="430" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
      </div>      
    </div>     
    <div id="pricing" class="container-fluid">
  
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeeNhTlP8DjnMJdZ6m_BKDz3-PfngJpB5f0wGQuMPAzkV3xPw/viewform?embedded=true" width="430" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
      </div>      
    </div> <div id="pricing" class="container-fluid">
  
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeeNhTlP8DjnMJdZ6m_BKDz3-PfngJpB5f0wGQuMPAzkV3xPw/viewform?embedded=true" width="430" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
      </div>      
    </div>
            

<footer class="container-fluid text-center">
  <p> &copy; Designed and maintained by Ravi Kumar</p>
</footer>

</body>
</html>

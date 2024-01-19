<?php include "header.php"?>

  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>

      <div class="col-sm-6">
        <div class="logo">
          <img src="assets\img\logo.jpg" class="img-responsive">
        </div>
        

        <div class="form-body">
        <h5 class="heading">Login Form</h5>    
        <form>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd">
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me</label>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <a href="dashboard.php"><button type="button" class="btn btn-warning" style="width:100%">login</button></a>
            
            </div>  
            <div class="col-sm-6"></div>
            <div class="col-sm-3">
               <a href="signup.php"><button type="button" class="btn btn-info" style="width:100%">Signup</button></a>     
            </div>
          </div>
          
        </form>
  
        </div>
        </div>
      </div>
    
    </div>

<?php include "footer.php"?>

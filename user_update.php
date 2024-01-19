<?php include "header.php"; ?>
 <?php 

  $userId = $_GET['id'];

  $query = "SELECT * FROM users where id = ".$userId."";
  $result = $conn->query($query);

  $row=$result->fetch_assoc();

 ?>
<div class="container">
 <div class="row">
  <div class="col-sm-6 col-xs-6">
    <h1>Update User Form</h1>
  </div>
  <div class="col-sm-6 col-xs-6 text-right">

<?php
  $userId = $_GET['id'];
  $query = "SELECT * FROM users where id = ".$userId."";
?>

    <a href="dashboard.php" >
      <button type="button" class="btn btn-success addNewBtn" style="margin-right: 5px;">Home</button>
    </a>

    <a href="viewuser.php?id=<?php echo $row["id"]; ?>">
      <button type="button" class="btn btn-success addNewBtn">View</button>
    </a>

  </div> 
 </div>


 <?php 

 if(isset($_POST['submit_form'])){

      // print_r($_POST);
  $firstName = (!empty($_POST['fname'])) ? $_POST['fname'] : '';
  $lastName = (!empty($_POST['lname'])) ? $_POST['lname'] : '';
  $email = (!empty($_POST['email'])) ? $_POST['email'] : '';
  $Contact = (!empty($_POST['Contact'])) ? $_POST['Contact'] : '';
  $dateofbirth = (!empty($_POST['dateofbirth'])) ? $_POST['dateofbirth'] : '';
  $city = (!empty($_POST['city'])) ? $_POST['city'] : '';
  $active  = (!empty($_POST['active'])) ? $_POST['active'] : '';

    $update = "UPDATE users SET first_name='".$firstName."', last_name='".$lastName."', email='".$email."', contact_number='".$Contact."', dob='".$dateofbirth."', city='".$city."', active='".$active."' WHERE id ='".$userId."'";

    if(mysqli_query($conn, $update)){  
        $msg = "Data stored Successfully";

        header("Location:userlis.php");
    exit();

      }

 }

 ?>

 <!-- New user Form  -->
 <div class="formBody">
 <form action='#' method="POST"> 
 <div class="row">
  <div class="col-sm-3">
      <div class="form-group">
          <label for="Firstname">Firstname</label>
          <input type="text" class="form-control" id="Firstname" placeholder="Enter firstname" name="fname" value="<?php echo $row["first_name"];?>" required>
       </div>
    </div>
    <div class="col-sm-3">
       <div class="form-group">
          <label for="Lastname">Lastname</label>
          <input type="text" class="form-control" id="Lastname" placeholder="Enter lastname" name="lname" value="<?php echo $row["last_name"];?>" required>
        </div>
    </div>
    <div class="col-sm-3">
       <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $row["email"];?>" aria-describedby="emailHelp" placeholder="Enter email" require>
       </div>
    </div>
    <div class="col-sm-3">
      <div class="form-group">
          <label for="Contact">Contact</label>
          <input type="number" class="form-control" id="Contact" placeholder="Enter contact" name="Contact" value="<?php echo $row["contact_number"];?>" required>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-4">
      <div class="form-group">
          <label for="Dob">Date of Birth:</label>
          <input type="date" class="form-control" id="Date" placeholder="Enter DoB" name="dateofbirth" value="<?php echo $row["dob"];?>" required>
      </div>
    </div>

     <div class="col-sm-4">
      <div class="form-group">
        <label for="city">Choose a City:</label>
          <select name="city" id="city" class="form-control">
            <?php 
            $cityy = "SELECT * FROM locations WHERE active = 1";
            $resultCities = $conn->query($cityy);

            while ($cityrow = $resultCities->fetch_assoc()) {
            $selected = ($row["city"] == $cityrow['id']) ? 'selected' : '';
                    echo "<option value=\"{$cityrow['id']}\" $selected>{$cityrow['name']}</option>";
                      }
             ?>

      </select>
      </div>
    </div>
    <div class="col-sm-4">
      <?php 
        $checked = ($row["active"] == 1) ? 'checked' : '';  
        $unchecked = ($row["active"] != 1) ? 'checked' : '';

      ?>
      <label for="Active">Active</label><br>
      <label class="radio-inline">
        <input type="radio" name="active" value='1' <?php echo $checked;?>>Yes
      </label>
      <label class="radio-inline">
        <input type="radio" value='0' name="active" <?php echo $unchecked;?>>No
      </label>
  </div>
</div>


<hr>
 <div class="row">
  <div class="col-sm-12">
     <button type="submit" class="btn btn-success" name="submit_form">Submit</button>
  </div>
 </div>

 </form>
</div>
</div>




   
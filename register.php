<?php
session_start();
$_SESSION['TESTING'] = "Testing Session";
print_r($_SESSION);
?>

<?php include_once ("lib/header.php"); ?>

<p><strong>Welcome, Please register</strong></p>
<p>All Feilds are required</p>


<form action="processlogin.php" method="POST">

<p>
      <?php
            if(isset($_SESSION['error'])&& !empty($_SESSION['error'])) {
                  echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";
                  }
                  ?>
</p>

<p>
<label>First Name</label><br />
<input type="text" name="first_name" placeholder="First Name" />
</p>

<p>
<label>Last Name</label><br />
<input type="text" name="last_name" placeholder="Last Name" required/>
</p>

<p>
<label>E-mail</label><br />
<input type="text" name="email" placeholder="Email" required/>
</p>

<p>
<label>password</label><br />
<input type="password" name="password" placeholder="Password" required/>
</p>


<p>
<label>Gender</label><br />
<select name="gender" required>
<option value="">Select one</option>
<option>Male</option>
<option>Female</option>
</select>
</p>

<p>
<label>Designation</label><br />
<select name="designation" required>
<option value="">Select one</option>
<option>Medical Team (MT)</option>
<option>Patients</option>
</select>
</p>

<p>
<label>Department</label><br />
<select name="department">
<option value="">Select one</option>
<option>Emergency</option>
<option>Cardiology</option>
<option>Neurology</option>
<option>Intensive Care Unit</option>
</select>
</p>
<button type="submit">Register</button>
</form>
<?php include_once ("lib/footer.php"); ?>
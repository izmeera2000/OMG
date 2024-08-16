<?php
session_start();
$site_url = 'http://localhost/OMG/';


require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

// initializing variables
$username = "";
$email = "";
$errors = array();

// connect to the database
$db = mysqli_connect($_ENV['host'], $_ENV['user'], $_ENV['pass'], $_ENV['database']);



// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  // if (empty($username)) { array_push($errors, "Username is required"); }
  // if (empty($email)) { array_push($errors, "Email is required"); }
  // if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2) {
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password1);//encrypt the password before saving in the database

    $query = "INSERT INTO user (username, email, password,fullname,phone_number) 
                          VALUES('$username', '$email', '$password','$fullname','$phone')";
    mysqli_query($db, $query);

    $query = "SELECT * FROM user WHERE (username='$username' OR email='$username') AND password='$password'";
    $results = mysqli_query($db, $query);
    // $_SESSION['success'] = "You are now logged in";
    $user = mysqli_fetch_assoc($results);
    // debug_to_console("test2");
    $_SESSION['user_details'] = $user;
    // $_SESSION['username'] = $user["username"];

    // var_dump($_SESSION['username2']);

    // header('location: index.php');

    // $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now logged in";
    header('location:' . $site_url . '');
  }
}

if (isset($_POST['log_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // debug_to_console("test");

  // if (empty($username)) {
  //       array_push($errors, "Username is required");
  // }
  // if (empty($password)) {
  //       array_push($errors, "Password is required");
  // }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM user WHERE (username='$username' OR email='$username') AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      // $_SESSION['success'] = "You are now logged in";
      $user = mysqli_fetch_assoc($results);
      // debug_to_console("test2");
      $_SESSION['user_details'] = $user;
      // $_SESSION['username'] = $user["username"];

      // var_dump($_SESSION['username2']);

      header('location:' . $site_url . '');
    } else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

if (isset($_POST['edit_profile'])) {
  $username = $_SESSION['user_details']['username'];
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);

  $query = "UPDATE user SET fullname = '$fullname', email='$email',phone_number='$phone' WHERE username='$username' ";
  $results = mysqli_query($db, $query);
  // debug_to_console($fullname);
}

if (isset($_POST['edit_address_book'])) {
  // debug_to_console("assa");
  $user_id = $_SESSION['user_details']['id'];
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $default_address = $_POST['default_address'];


  if ($default_address) {
    $query = "SELECT * FROM user_address WHERE user_id='$user_id' AND default_address='1'";
    $results = mysqli_query($db, $query);

    ($user_address2 = mysqli_fetch_assoc($results));

    $formerid = $user_address2['id'];
    $query = "UPDATE user_address SET default_address='0' WHERE id='$formerid'";

    $results = mysqli_query($db, $query);



  }

  $query = "UPDATE user_address 
  SET address = '$address',
   name='$name',
   state='$state',
   city='$city',
    phone='$phone',
    postcode='$postcode',
     default_address='$default_address'  WHERE user_id='$user_id' AND id='$id' ";
  $results = mysqli_query($db, $query);
  header('location:' . $site_url . 'addressbook');

}

if (isset($_POST['delete_address_book'])) {
  // debug_to_console("assa");
  $user_id = $_SESSION['user_details']['id'];
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $default_address = $_POST['default_address'];




  $query = "DELETE FROM user_address WHERE id='$id' ";
  $results = mysqli_query($db, $query);

  if ($default_address) {
    $query = "SELECT * FROM user_address WHERE user_id='$user_id' AND default_address='0' LIMIT 1";
    $results = mysqli_query($db, $query);

    ($user_address2 = mysqli_fetch_assoc($results));

    $formerid = $user_address2['id'];
    $query = "UPDATE user_address SET default_address='1' WHERE id='$formerid'";

    $results = mysqli_query($db, $query);



  }
  header('location:' . $site_url . 'addressbook');

}
if (isset($_POST['add_address_book'])) {
  // debug_to_console("assa");

  $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $default_address = isset($_POST['default_address']) ? 1 : 0;

  // $query = "INSERT INTO user_address 
  // SET address = '$address',
  //  name='$email',
  //  state='$state',
  //  city='$city',
  //   phone='$phone',
  //    default_address='$default_address'  WHERE user_id='$user_id' ";

  if ($default_address) {
    $query = "SELECT * FROM user_address WHERE user_id='$user_id' AND default_address='1'";
    $results = mysqli_query($db, $query);

    ($user_address2 = mysqli_fetch_assoc($results));

    $formerid = $user_address2['id'];
    $query = "UPDATE user_address SET default_address='0' WHERE id='$formerid'";

    $results = mysqli_query($db, $query);



  }

  $query = "INSERT INTO user_address(user_id,address,name,state,city,postcode,phone,default_address) 
VALUES ('$user_id','$address','$name','$state','$city','$phone','$postcode','$default_address')";


  $results = mysqli_query($db, $query);
  header('location:' . $site_url . 'addressbook');

}

function debug_to_console($data)
{
  $output = $data;
  if (is_array($output))
    $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}




if (isset($_POST['add_id'])) {
  // setcookie('address_id_edit', $_POST['add_id'], time() + (86400 * 30), "/"); // 86400 = 1 day

  // $id = $_COOKIE['address_id_edit'];
  // debug_to_console($id);

  // $user_id = $_SESSION['user_details']['id'];
  // if (isset($_COOKIE['address_id_edit'])){
  // $id = $_COOKIE['address_id_edit'];
  $id = $_POST['add_id'];


  $query = "SELECT * FROM user_address WHERE  id='$id'";
  // debug_to_console($id);
  $results = mysqli_query($db, $query);
  if (mysqli_num_rows($results) > 0) {
    // $_SESSION['success'] = "You are now logged in";
    //   $user = mysqli_fetch_assoc($results);

    while ($user_address = mysqli_fetch_assoc($results)) {
      ?>
      <input type="hidden" name="id" class="form-control" value="<?php
      echo $user_address['id'] ?>" >
      Address :
      <input type="text" name="address" class="form-control" value="<?php
      echo $user_address['address'] ?>" required>
      Name :
      <input type="text" name="name" class="form-control" value="<?php
      echo $user_address['name'] ?>" required>
      State :
      <input type="text" name="state" class="form-control" value="<?php
      echo $user_address['state'] ?>" required>
      City :
      <input type="text" name="city" class="form-control" value="<?php
      echo $user_address['city'] ?>" required>
      Post Code :
      <input type="text" name="postcode" class="form-control" value="<?php
      echo $user_address['postcode'] ?>" required>
      Phone Number :
      <input type="text" name="phone" class="form-control" value="<?php
      echo $user_address['phone'] ?>" required>
      <br>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" value="<?php echo ($user_address['default_address']) ?: "1" ?>"
          name="default_address" role="switch" id="flexSwitchCheckChecked" <?php echo ($user_address['default_address']) ? "checked" : "" ?>>
        <label class="form-check-label" for="flexSwitchCheckChecked">Set As Default Address</label>
      </div>
      <?php
    }

    //   header('location: index.php');
  }
  //    }

}

?>
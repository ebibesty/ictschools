<?php 
session_start();

//initialising variables

$username = "";
$email = "";

//connect to db

$db = mysql_connect('localhost', 'root', '', 'practise') or die ("could not connect to database");

//register users

if$username = mysql_real_escape_string($db $_POST ["username"]);
if$email = mysql_real_escape_string($db $_POST ["email"]);
if$password_1 = mysql_real_escape_string($db $_POST ["password_1"]);
if$password_2 = mysql_real_escape_string($db $_POST ["password_2"]);

// for validation

if(empty($username))(array_push($errors, "username is required")};
if(empty(if$email))(array_push($errors, "email is required")};
if(empty($password_1))(array_push($errors, "password is required")};
if($password_1 != $password_2)(array_push($errors, "passwords do not match")};

// check db for existing username

$user_check_query = " SELECT * FROM user WHERE username = '$username' or email ='$email'  LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
       if(user['username'] === $username{array_push($errors, "username already exists");}
       if(user['email'] === $email{array_push($errors, "This email id has a registered username");}
}

//Register the userif no error

If(count()$error) == 0){

       $password = md5($password_1); //this will encrypt the password
       $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

       mysqli_query($db, $query);
       $SESSION['username'] = $username;
       $SESSION['success'] = "You are now logged in";

       header('location: index.php');

}


//LOGIN USER

If(isset ($_POST['Login_user']))  {

       $username = mysql_real_escape_string($db, $_POST['username']);
       $password = mysql_real_escape_string($db, $_POST['password']);

       if(empty($username)){

       array_push(errors, "username is required")
       
}
 
       if(empty($password)){

       array_push(errors, "password is required")
 }
       if(count($errors) == 0 ) {
       
       $password = md5($password);

       $query = "SELECT * FROM user WHERE username='$username' AND password='$password':
       $results = mysqli_query($db, $query);

       if(mysqli_num_results:($results){
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "logged in successfully";
              header(location : index.php);
       }else{
              array_push($errors, "wrong username/password combination please try again");
       }           
    ]
}

>?




}


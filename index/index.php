<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Portfolio info</h1>

<form action="index.php" method="post">

  <h2>1. Name:</h2>
  
  <input type="text" id="name" name="name" required><br>

  <h2>2. Job Title:</h2>
  
  <input type="text" id="job_title" name="job_title" required><br>
  

  <h2>3. About Me:</h2>
  
  <textarea id="about_me" name="about_me" rows="4" cols="50" required></textarea><br>
  
  <textarea id="about_me" name="about_me_more" rows="4" cols="50" required></textarea><br>

  <h2>4. Skills :</h2>

  <div class="skill-container">
    <div class="skill-category">
      
      <label for="skill1"></label>
      <input type="text" id="skill1" name="skill_one" required><br>

      <label for="skill2"></label>
      <input type="text" id="skill2" name="skill_two" required><br>

      <label for="skill3"></label>
      <input type="text" id="skill3" name="skill_three" required><br>

      <label for="skill4"></label>
      <input type="text" id="skill4" name="skill_four" required><br>
      <label for="skill5"></label>
      <input type="text" id="skill5" name="skill_five" required><br>
    </div>


  </div>

  <h2>5. Phone Number :</h2>
  
  <input type="tel" id="phone" name="phone" required><br>

  <h2>6. Address :</h2>
  
  <input type="address" id="address" name="address" required></input><br>

  <h2>7. Email:</h2>
  
  <input type="email" id="email" name="email" required><br>

  <button type="submit">Submit</button>
</form>

</body>
</html>
<?php

require "../database.php";

  @$name = $_POST["name"];
  @$job = $_POST["job_title"];
  @$about = $_POST["about_me"];
  @$about_me = $_POST["about_me_more"];
  @$skill_one = $_POST["skill_one"];
  @$skill_two = $_POST["skill_two"];
  @$skill_three = $_POST["skill_three"];
  @$skill_four = $_POST["skill_four"];
  @$skill_five = $_POST["skill_five"];
  @$phone = $_POST["phone"];
  @$address = $_POST["address"];
  @$email = $_POST["email"];
  



  $user_data = 'INSERT INTO user_data (user_name, user_job, about_user, about_more, skill, phone_number, address , `email`)
  VALUES ("' . $name .'", "'. $job .'" ,"'.$about .'"  , "'.$about_me.'" , "'." $skill_one , $skill_two, $skill_three, $skill_four, $skill_five  ".'","'. $phone .'", "'.$address.'" ,  "'.$email.'" )';
  // echo $user_data . "</br>";


  try{
  mysqli_query($conn, $user_data);
    // echo "data is now registered". "</br>";
    $name=null;
    $job=null;
    $about=null;
    $about_me=null;
    $skill_one=null;
    $skill_two=null;
    $skill_three=null;
    $skill_four=null;
    $skill_five=null;
    $phone=null;
    $address=null;
    $email=null;

  }
  catch(mysqli_sql_exception){
    // echo "could not register data" . "</br>";
  }


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data (if needed)

    // Redirect to another port
    header('Location: https://heni-portifolio.netlify.app/');
    exit;
}



  mysqli_close($conn);
?>

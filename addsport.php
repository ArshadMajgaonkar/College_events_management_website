<?php

    require "./connect.php";

    session_start();

    if(empty($_SESSION['login_user']))
    {
        header('location:login.php');
    }

    if(isset($_POST['submit']) and $_SERVER["REQUEST_METHOD"] == "POST")
    {
        

        $name = $_POST['name'];
        $amt=$_POST['amt'];
        $loc=$_POST['loc'];
        $desc=$_POST['desc'];
        $date=$_POST['date'];

        $sql="INSERT INTO `sport`( `name`, `date`, `amt`, `loc`, `description`) VALUES ('$name','$date',$amt,'$loc','$desc')";

        $result=mysqli_query($connection,$sql);

        if(mysqli_affected_rows($connection))
        {
            echo "<script>
            alert('Data inserted successfully');
            window.location.href='./admindashboard.php';
            </script>";
        }
        else
        {
            echo "<script>
            alert('Failed to insert data');
            window.location.href='./admindashboard.php';
            </script>";
        }
    }
?>



<html>
<head>
<title>Add Sports</title>
<style>
:root {
  --color-white: #f3f3f3;
  --color-darkblue: #1b1b32;
  --color-darkblue-alpha: rgba(27, 27, 50, 0.8);
  --color-green: #37af65;
}



body {
  font-family: 'Poppins', sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.4;
  color: var(--color-white);
  margin: 0;
}

body::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: -1;
  background: var(--color-darkblue);
  background-image: linear-gradient(
      115deg,
      rgba(58, 58, 158, 0.8),
      rgba(136, 136, 206, 0.7)
    ),
    url('./img/img2.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

h1 {
  font-weight: 400;
  line-height: 1.2;
}

p {
  font-size: 1.125rem;
}

h1,
p {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

label {
  display: flex;
  align-items: center;
  font-size: 1.125rem;
  margin-bottom: 0.5rem;
}

input,
button,
select,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button {
  border: none;
}

.container {
  width: 100%;
  margin: 3.125rem auto 0 auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

.header {
  padding: 0 0.625rem;
  margin-bottom: 1.875rem;
}

.description {
  font-style: italic;
  font-weight: 200;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
}

.clue {
  margin-left: 0.25rem;
  font-size: 0.9rem;
  color: #e4e4e4;
}

.text-center {
  text-align: center;
}

/* form */

form {
  background: var(--color-darkblue-alpha);
  padding: 2.5rem 0.625rem;
  border-radius: 0.25rem;
}

@media (min-width: 480px) {
  form {
    padding: 2.5rem;
  }
}

.form-group {
  margin: 0 auto 1.25rem auto;
  padding: 0.25rem;
}

.form-control {
  display: block;
  width: 100%;
  height: 2.375rem;
  padding: 0.375rem 0.75rem;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}



.input-textarea {
  min-height: 120px;
  width: 100%;
  padding: 0.625rem;
  resize: vertical;
}

.submit-button {
  display: block;
  width: 100%;
  padding: 0.75rem;
  color: inherit;
  border-radius: 4px;
  cursor: pointer;
}

</style>
</head>
<body>
<div class="container">
  <header class="header">
    <h1 id="title" class="text-center">SAA Event Management</h1>
    <p id="description" class="description text-center">
      You can add a new Sport here
    </p>
  </header>
  <form id="addsport-form" action="addsport.php" method="POST">
    <div class="form-group">
    <!-- The name of the event will be entered here -->
      <label id="name-label" for="name">Name of the Sport</label>
      <input
        type="text"
        name="name"
        maxlength="50"
        id="name"
        class="form-control"
        placeholder="Enter the name of sport or event"
        required
      />
    </div>

    <div class="form-group">
    <!-- The Location of the event will be entered here -->
      <label id="Location-label" for="Location">Location of the Sport</label>
      <input
        type="text"
        name="loc"
        maxlength="255"
        id="Location"
        class="form-control"
        placeholder="Enter the Location of sport or event"
        required
      />
    </div>
    
    <div class="form-group">
    <!-- The Fees of the event will be entered here -->
      <label id="Fees-label" for="Fees">Fees for the Sport</label>
      <input
        type="number"
        max="5000"
        name="amt"
        id="Fees"
        class="form-control"
        placeholder="Enter the Fees for the sport or the event"
        required
      />
    </div>
    <div class="form-group">
    <!-- The date of the event will be selected here -->
      <label id="Fees-label" for="Fees">Date for the Sports Event</label>
      <input
        type="datetime-local"
        name="date"
        id="sport_date"
        class="form-control"
        required
      />
    </div>
    <div class="form-group">
    <!-- The description for the event will be entered here -->
      <label id="Description-label" for="Fees">Description of the Sport or the event</label>
      
      <textarea rows="6" cols="75"
        name="desc"
        id="Description-label"
        placeholder="Enter the description of the sport or the event"
        required
      ></textarea>
    </div>
    <!-- <center></center> -->
    <div class="submit-button">
    	<input type="submit" name="submit" value="submit">
    </div>
  </form>
    <!-- </center> -->
</body>
</html>
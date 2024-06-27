<?php
require_once 'view/header.php';

?>

<!--
<!DOCTYPE html>
<html>

<head>
  <title>
    Issue Log Site
  </title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="background-color: white; font-family: Roboto, Arial;">

  <nav class="navbar navbar-expand-sm navbar-light mb-4" style="background-color: gold;">
    <div class="container">
      <a class="navbar-brand" href="#">Issue Logging Site</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/issue_log2/staffassignments.php">Staff Assignments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
-->

<div class="wrapper">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="index-submit-form text-center">
        <h2 class="mt-3">Report Your Issue! </h2>
        <p>Having any issues, Report here!</p>
        <form action="includes/submit.inc.php" method="post">

          <label for="staff_id"><b>Staff ID: </b></label>
          <input type="number" id="staff_id" name="staff_id">
          <br><br>

          <label for="staff_name"><b>Staff Name: </b></label>
          <input type="text" id="staff_name" name="staff_name">
          <br><br>

          <label for="phone_no"><b>Phone Number: </b></label>
          <input type="tel" id="phone_no" name="phone_no">
          <br><br>

          <label for="email"><b>Email: </b></label>
          <input type="text" id="email" name="email">
          <br><br>

          <label for="department"><b>Department: </b></label>
          <input type="text" id="department" name="department">
          <br><br>

          <label for="issue_id"><b>Issue ID: </b></label>
          <input type="number" id="issue_id" name="issue_id">
          <br><br>

          <label for="issue_title"><b>Issue Title: </b></label>
          <input type="text" id="issue_title" name="issue_title">
          <br><br>

          <label for="issue_description"><b>Issue Description: </b></label>
          <br>
          <textarea id="issue_description" name="issue_description" rows="4" cols="50"></textarea>
          <br><br>

          <label for="potential_impact"><b>Potential Impact: </b></label>
          <br>
          <textarea id="potential_impact" name="issue_potential_impact" rows="4" cols="30"></textarea>
          <br><br>

          <label for="priority"><b>Priority: </b></label>
          <input type="text" id="priority" name="issue_priority">
          <br><br>

          <label for="status"><b>Status: </b></label>
          <input type="text" id="Status" name="issue_status">
          <br><br>

          <label for="notes"><b>Notes: </b></label>
          <br>
          <textarea id="notes" name="issue_notes" rows="4" cols="20"></textarea>
          <br><br>

          <button type="submit" id="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
          <br><br><br>


        </form>
      </div>

    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>


</html>
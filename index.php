<!DOCTYPE html>
<html lang="en">
<?php
    include "/assets/get_info.php";
?>
<head>
  <!--Imports-->
  <link rel="stylesheet" href="assets/style.css">
  <title>Programming Support API</title>
</head>
<body>
  <!--Header with links and title-->
  <header class="nav-header">
        
    <h1>Programming Support</h1>

    <!--Drop down-->
    <!--Update Content if changes?-->
    <form action="">
      <label for="Level">Programming Level:</label>
      <select name="Level" id="Level">
        <option value="Experienced">Experienced</option>
        <option value="Beginner">Beginner</option>
      </select>
    </form>

  </header>

  <!--Can only embed wiki and docs-->
  <!--Use website for only api requests?-->
  
  <!-- add search bar? -->
  <div id="Website">
    <iframe src="https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Class.html"></iframe>
  </div>

  <script src="assets/websiteChange.js"></script>
</body>
</html>
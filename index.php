<!DOCTYPE html>
<html lang="en">
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
      <select name="Level" id="Level" onchange="select_change()">
        <option value="Experienced">Experienced</option>
        <option value="Beginner">Beginner</option>
      </select>
    </form>

  </header>

  <!--Can only embed wiki and docs-->
  <!--Use website for only api requests?-->
  
  <!-- add search bar? -->
  <div class="Website_Container">
      <div class="content" id="query"></div>
  </div>

  <script src="assets/websiteChange.js"></script>
</body>
</html>
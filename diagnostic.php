<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Link to our diagnostic form CSS -->
  <link rel="stylesheet" href="diagnostic.css">
  <title>Diagnostic Test Form</title>
</head>
<body>
  <div class="container">
    <!-- Sidebar (same as previous) -->
    <nav class="sidebar">
      <header>
        <div class="image-text">
          <span class="image">
            <!-- Place Our Logo Here -->
          </span>
          <div class="text logo-text">
            <span class="name">Clinic System</span>
          </div>
        </div>
      </header>
      <div class="menu-bar">
        <div class="menu">
          <li class="search-box">
            <i class="material-icons icon">search</i>
            <input type="text" placeholder="Search...">
          </li>
          <ul class="menu-links">
            <li class="nav-link">
              <a href="#">
                <i class="material-icons icon">home</i>
                <span class="text nav-text">Homepage</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <i class="material-icons icon">local_hospital</i>
                <span class="text nav-text">Admit a Patient</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <i class="material-icons icon">people</i>
                <span class="text nav-text">Patient List</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="bottom-content">
          <li class="">
            <a href="login.php">
              <i class="material-icons icon">logout</i>
              <span class="text nav-text">Logout</span>
            </a>
          </li>
        </div>
      </div>
    </nav>

    <!-- Navbar (same as previous) -->
    <nav class="navbar">
      <ul class="navbar-links">
        <li><a href="#">About Us</a></li>
      </ul>
    </nav>

    <!-- Dashboard Content: Diagnostic Test Form -->
    <div class="dashboard-content">
      <div class="form-box">
        <h1>Diagnostic Test Form</h1>
        <p>Please fill out the diagnostic test results below.</p>
        <form action="#" method="post">
          <div class="form-grid">
            <!-- Lab Tests Section -->
            <h2 class="section-title">Lab Tests</h2>
            <div class="form-group">
              <label for="urinalysis">Urinalysis Results</label>
              <textarea id="urinalysis" name="urinalysis" placeholder="Enter urinalysis results"></textarea>
            </div>
            <div class="form-group">
              <label for="fecalysis">Fecalysis Results</label>
              <textarea id="fecalysis" name="fecalysis" placeholder="Enter fecalysis results"></textarea>
            </div>
            <div class="form-group">
              <label for="xray">X‑ray Results</label>
              <textarea id="xray" name="xray" placeholder="Enter X‑ray results"></textarea>
            </div>
            <div class="form-group">
              <label for="blood_analysis">Blood Analysis Results</label>
              <textarea id="blood_analysis" name="blood_analysis" placeholder="Enter blood analysis results"></textarea>
            </div>
            <!-- Submit Button (spans both columns) -->
            <div class="form-group full-width">
              <button type="submit">Submit Diagnostic Test</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

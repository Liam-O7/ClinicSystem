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
    <!-- Sidebar -->
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

    <!-- Navbar -->
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
                        <!-- Patient Information Section -->
                        <h2 class="section-title">Patient Information</h2>
            <div class="form-group">
              <label for="full_name">Full Name</label>
              <input type="text" id="full_name" name="full_name" placeholder="Enter full name" required>
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="number" id="age" name="age" placeholder="Enter age" required>
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <select id="gender" name="gender" required>
                <option value="">Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <!-- Urinalysis Section -->
            <h2 class="section-title">Urinalysis</h2>
            <div class="form-group">
              <label for="ur_color">Color</label>
              <input type="text" id="ur_color" name="ur_color" placeholder="Enter urine color" required>
            </div>
            <div class="form-group">
              <label for="ur_transparency">Transparency</label>
              <input type="text" id="ur_transparency" name="ur_transparency" placeholder="Enter transparency" required>
            </div>
            <div class="form-group">
              <label for="ur_hemoglobin">Hemoglobin</label>
              <input type="text" id="ur_hemoglobin" name="ur_hemoglobin" placeholder="Enter hemoglobin level" required>
            </div>
            <div class="form-group">
              <label for="ur_hematocrit">Hematocrit</label>
              <input type="text" id="ur_hematocrit" name="ur_hematocrit" placeholder="Enter hematocrit" required>
            </div>
            <div class="form-group">
              <label for="ur_wbc">WBC</label>
              <input type="text" id="ur_wbc" name="ur_wbc" placeholder="Enter WBC count" required>
            </div>
            <div class="form-group">
              <label for="ur_pus">Pus</label>
              <input type="text" id="ur_pus" name="ur_pus" placeholder="Enter pus cell count" required>
            </div>
            <div class="form-group">
              <label for="ur_rbc">Red Blood Cell</label>
              <input type="text" id="ur_rbc" name="ur_rbc" placeholder="Enter RBC count" required>
            </div>
            <div class="form-group">
              <label for="ur_platelet">Platelet Count</label>
              <input type="text" id="ur_platelet" name="ur_platelet" placeholder="Enter platelet count" required>
            </div>
            
            <!-- Fecalysis Section -->
            <h2 class="section-title">Fecalysis</h2>
            <div class="form-group">
              <label for="fec_color">Color</label>
              <input type="text" id="fec_color" name="fec_color" placeholder="Enter fecal color" required>
            </div>
            <div class="form-group">
              <label for="fec_consistency">Consistency</label>
              <input type="text" id="fec_consistency" name="fec_consistency" placeholder="Enter consistency" required>
            </div>
            <div class="form-group">
              <label for="fec_mucus">Mucus</label>
              <input type="text" id="fec_mucus" name="fec_mucus" placeholder="Enter mucus presence" required>
            </div>
            <div class="form-group">
              <label for="fec_blood">Blood</label>
              <input type="text" id="fec_blood" name="fec_blood" placeholder="Enter blood presence" required>
            </div>
            <div class="form-group">
              <label for="fec_parasites">Parasites</label>
              <input type="text" id="fec_parasites" name="fec_parasites" placeholder="Enter parasites" required>
            </div>
            <div class="form-group">
              <label for="fec_ova">Ova/Cysts</label>
              <input type="text" id="fec_ova" name="fec_ova" placeholder="Enter ova or cysts" required>
            </div>
            
            <!-- X‑ray Section -->
            <h2 class="section-title">X‑ray</h2>
            <div class="form-group">
              <label for="xray_region">Region Examined</label>
              <textarea id="xray_region" name="xray_region" placeholder="Enter region examined" required></textarea>
            </div>
            <div class="form-group">
              <label for="xray_findings">Findings</label>
              <textarea id="xray_findings" name="xray_findings" placeholder="Enter X‑ray findings" required></textarea>
            </div>
            <div class="form-group">
              <label for="xray_impression">Impression</label>
              <textarea id="xray_impression" name="xray_impression" placeholder="Enter impression" required></textarea>
            </div>
            <div class="form-group">
              <label for="xray_recommendation">Recommendations</label>
              <textarea id="xray_recommendation" name="xray_recommendation" placeholder="Enter recommendations" required></textarea>
            </div>
            
            <!-- Blood Analysis Section -->
            <h2 class="section-title">Blood Analysis</h2>
            <div class="form-group">
              <label for="blood_hemoglobin">Hemoglobin</label>
              <input type="text" id="blood_hemoglobin" name="blood_hemoglobin" placeholder="Enter hemoglobin level" required>
            </div>
            <div class="form-group">
              <label for="blood_hematocrit">Hematocrit</label>
              <input type="text" id="blood_hematocrit" name="blood_hematocrit" placeholder="Enter hematocrit" required>
            </div>
            <div class="form-group">
              <label for="blood_wbc">WBC Count</label>
              <input type="text" id="blood_wbc" name="blood_wbc" placeholder="Enter WBC count" required>
            </div>
            <div class="form-group">
              <label for="blood_rbc">RBC Count</label>
              <input type="text" id="blood_rbc" name="blood_rbc" placeholder="Enter RBC count" required>
            </div>
            <div class="form-group">
              <label for="blood_platelet">Platelet Count</label>
              <input type="text" id="blood_platelet" name="blood_platelet" placeholder="Enter platelet count" required>
            </div>
            <div class="form-group">
              <label for="blood_other">Other Findings</label>
              <input type="text" id="blood_other" name="blood_other" placeholder="Enter any additional findings" required>
            </div>
            
            <!-- Submit Button -->
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

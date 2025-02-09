<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Link to our physical form CSS -->
  <link rel="stylesheet" href="physical.css">
  <title>Physical Test Results Form</title>
</head>
<body>
  <div class="container">
    <!-- Sidebar (same as dashboard) -->
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

    <!-- Navbar (same as dashboard) -->
    <nav class="navbar">
      <ul class="navbar-links">
        <li><a href="#">About Us</a></li>
      </ul>
    </nav>

    <!-- Dashboard Content: Expanded Physical Test Results Form -->
    <div class="dashboard-content">
      <div class="form-box">
        <h1>Physical Test Results Form</h1>
        <p>Please fill out the details below.</p>
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

            <!-- Brief Medical History Section -->
            <h2 class="section-title">Brief Medical History</h2>
            <div class="form-group">
              <label for="past_medical_history">Past Medical History</label>
              <textarea id="past_medical_history" name="past_medical_history" placeholder="Previous illnesses, hospitalizations, surgeries"></textarea>
            </div>
            <div class="form-group">
              <label for="family_medical_history">Family Medical History</label>
              <textarea id="family_medical_history" name="family_medical_history" placeholder="Chronic conditions, hereditary diseases"></textarea>
            </div>
            <div class="form-group">
              <label for="allergies">Allergies</label>
              <textarea id="allergies" name="allergies" placeholder="Food, medication, environmental"></textarea>
            </div>
            <div class="form-group">
              <label for="current_medications">Current Medications</label>
              <textarea id="current_medications" name="current_medications" placeholder="Name, dosage, frequency"></textarea>
            </div>

            <!-- Vital Signs Section -->
            <h2 class="section-title">Vital Signs</h2>
            <div class="form-group">
              <label for="height">Height (m)</label>
              <input type="number" step="any" id="height" name="height" placeholder="Enter height in meters" required>
            </div>
            <div class="form-group">
              <label for="weight">Weight (kg)</label>
              <input type="number" step="any" id="weight" name="weight" placeholder="Enter weight in kg" required>
            </div>
            <div class="form-group">
              <label for="bmi">Body Mass Index (BMI)</label>
              <input type="number" step="any" id="bmi" name="bmi" placeholder="Weight/Height²" required>
            </div>
            <div class="form-group">
              <label for="blood_pressure">Blood Pressure</label>
              <input type="text" id="blood_pressure" name="blood_pressure" placeholder="e.g., 120/80" required>
            </div>
            <div class="form-group">
              <label for="heart_rate">Heart Rate (bpm)</label>
              <input type="number" id="heart_rate" name="heart_rate" placeholder="Enter heart rate" required>
            </div>
            <div class="form-group">
              <label for="temperature">Temperature (°C)</label>
              <input type="number" step="any" id="temperature" name="temperature" placeholder="Enter temperature" required>
            </div>

            <!-- Physical Examination Sections -->
            <h2 class="section-title">Physical Examination Sections</h2>
            <div class="form-group">
              <label for="general_appearance">General Appearance</label>
              <textarea id="general_appearance" name="general_appearance" placeholder="Describe general appearance"></textarea>
            </div>
            <div class="form-group">
              <label for="head_and_neck">Head and Neck</label>
              <textarea id="head_and_neck" name="head_and_neck" placeholder="Describe head and neck findings"></textarea>
            </div>
            <div class="form-group">
              <label for="eyes">Eyes</label>
              <textarea id="eyes" name="eyes" placeholder="Describe eye findings"></textarea>
            </div>
            <div class="form-group">
              <label for="ears">Ears</label>
              <textarea id="ears" name="ears" placeholder="Describe ear findings"></textarea>
            </div>
            <div class="form-group">
              <label for="nose_and_throat">Nose and Throat</label>
              <textarea id="nose_and_throat" name="nose_and_throat" placeholder="Describe nose and throat findings"></textarea>
            </div>
            <div class="form-group">
              <label for="chest_and_lungs">Chest and Lungs</label>
              <textarea id="chest_and_lungs" name="chest_and_lungs" placeholder="Describe chest and lung findings"></textarea>
            </div>
            <div class="form-group">
              <label for="heart">Heart</label>
              <textarea id="heart" name="heart" placeholder="Describe heart findings"></textarea>
            </div>
            <div class="form-group">
              <label for="abdomen">Abdomen</label>
              <textarea id="abdomen" name="abdomen" placeholder="Describe abdominal findings"></textarea>
            </div>

            <!-- Submit Button (spanning both columns) -->
            <div class="form-group full-width">
              <button type="submit">Submit Exam</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php include 'navigation.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Patient Registration Portal</title>
    <link rel="stylesheet" href="../css/add_bill.css">
  </head>
  <body>
    <div class="container">
      <form id="patient-registration-form" method="POST">
        <h1>Patient Registration</h1>
        
        <fieldset>
          <legend>Personal Information</legend>
          <div class="form-group">
            <label for="full-name">Full Name:</label>
            <input type="text" id="full-name" name="full-name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone-number">Phone Number:</label>
            <input type="tel" id="phone-number" name="phone-number" required>
          </div>
          <div class="form-group">
            <label for="date-of-birth">Date of Birth:</label>
            <input type="date" id="date-of-birth" name="date-of-birth" required>
          </div>
          <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
              <option value="">--Please select--</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
           <legend>Address Information</legend>
          <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="5" required></textarea>
          </div>
        </fieldset>

        <fieldset>
          <legend>Insurance Information</legend>
          <div class="form-group">
            <label for="full-name">Insurance Provider:</label>
            <input type="text" id="full-name" name="full-name" required>
          </div>
          <div class="form-group">
            <label for="email">EmInsurance informance:</label>
            <input type="text" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone-number">Policy No:</label>
            <input type="text" id="phone-number" name="phone-number" required>
          </div>
          <div class="form-group">
            <label for="date-of-birth">Subscriber</label>
            <input type="text" id="date-of-birth" name="date-of-birth" required>
          </div>
        </fieldset>


        <fieldset>
          <legend>Consult name</legend>
          <div class="form-group">
            <label for="full-name">Consultant name</label>
            <input type="text" id="full-name" name="full-name" required>
          </div>
          <div class="form-group">
            <label for="email">Consultant ID</label>
            <input type="text" id="email" name="email" required>
          </div>

        </fieldset>

        <a href="payment.html">next</a>

  </body>
</html>

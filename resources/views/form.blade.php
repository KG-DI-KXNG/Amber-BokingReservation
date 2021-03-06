<html lang="en">
<head>
    <title>Dolphin Cove Resort</title>
    <link rel="stylesheet" href="form.css" type="text/css">
    <link rel="stylesheet" href="form.js" type="text/js">
</head>
<body>

    <center><form id="regForm" action="">
      @csrf

        <h1>Dolphin Cove</h1>
        
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Full Name:
          <p><input placeholder="First Name" name="first_name"></p>
          <p><input placeholder="Last Name" name="last_name"></p>
        </div>
        
        <div class="tab">Contact Information:
          <p><input placeholder="Email Address" name="email" type=""></p>
          <p><input placeholder="Phone Number" name="contact" type="number" class="appearance-none"></p>
        </div>

        <div class="tab">Programs:
            <br><br><select name="program">
                <option value="NULL">Choose a Program</option>
                <option value="DEM">Dolphin Encounter Memories</option>
                <option value="DSAM">Dolphin Swim Adventure Memories</option>
                <option value="DRSM">Dolphin Swim Adventure</option>
                <option value="DSA">Shark Encounter</option>
                <option value="E">Encounter</option>
                <option value="AP">Admission Plus</option>
                <option value="DRS">Dolphin Royal Swim</option>
                <option value="YASD">Yaaman Adventures + Swim with Dolphins</option>
            </select>
        </div>

        <div class="tab">Booking For Adults & Children:
                <p><input type="text" name="adults" placeholder="number of adults"></p>
                <p><input type="text" name="children" placeholder="number of children"></p>
        </div>
        
        <div class="tab">Reservation Date:
          <p><input type="date" name="name" placeholder="dd/mm/yyy" required><br><br></p>
        </div>
        
        <!-- <div class="tab">Login Info:
          <p><input placeholder="Username"></p>
          <p><input placeholder="Password"></p>
        </div> -->
        
        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
        
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
        
        </form></center>
        

    <!-- <h1>Reservation Form</h1>
    
    <fileset><br><br>
      <form id="reForm" action="">
        <legend> Personal Information</legend><br>

        <label>Fisrt Name:</label><br>
        <input type="text" name="f_name" placeholder="Full Name" required><br>

        <label>Last Name:</label><br>
        <input type="text" name="f_name" placeholder="Last Name" required><br><br>

        <label>Program:</label><br>
        <select name="program">
          <option value="NULL">Choose a Program</option>
        <option value="DEM">Dolphin Encounter Memories</option>
        <option value="DSAM">Dolphin Swim Adventure Memories</option>
        <option value="DRSM">Dolphin Swim Adventure</option>
        <option value="DSA">Shark Encounter</option>
        <option value="E">Encounter</option>
        <option value="AP">Admission Plus</option>
        <option value="DRS">Dolphin Royal Swim</option>
        <option value="YASD">Yaaman Adventures + Swim with Dolphins</option>



      </select><br><br>

          <lable>Number of Adults:</label><br>
          <input type="text" name="adults"><br>

          <lable>Number of Children:</label><br>
            <input type="text" name="children"><br><br>

            <label>Booking Date:</label><br>
            <input type="date" name="name" placeholder="dd/mm/yyy" required><br><br>



      </form>

        
      </select><br><br>


      </fileset> -->

      <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("tab");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("tab");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }
        
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
        </script>

</body>
</html>
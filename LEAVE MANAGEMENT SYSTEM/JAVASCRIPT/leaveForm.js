  function calcDays() {
      var endDate = new Date(document.getElementById("enddate").value);
      var startDate = new Date(document.getElementById("startdate").value);
      return parseInt((endDate - startDate) / (24 * 3600 * 1000) + 1);
    }
  
  function getDays() {
    if (document.getElementById("enddate")) {
      document.getElementById("days").value = calcDays();
    }
  }
  
  function validateForm() {
      if (document.getElementById("name").value == "") {
        document.getElementById("name").style.background = "red";
        alert("Please Enter Your Full Name!");
        return false;
      } else {
        document.getElementById("name").style.background = "green";
      }

      if (document.getElementById("start").value == "") {
        document.getElementById("start").style.background = "red";
        alert("Please Enter Leave Starting Date!");
        return false;
      } else {
        document.getElementById("start").style.background = "green";
      }

      if (document.forms["leave_form"]["end_date"].value == "") {
        document.forms["leave_form"]["end_date"].style.background = "red";
        alert("Please Enter Leave Ending Date!");
        return false;
      } else {
        document.forms["leave_form"]["end_date"].style.background = "green";
      }

      if (document.forms["leave_form"]["reason"].value == "") {
        document.forms["leave_form"]["reason"].style.background = "red";
        alert("Please Enter Reason For Your Leave!");
        return false;
      } else {
        document.forms["leave_form"]["reason"].style.background = "green";
      }

  }
  
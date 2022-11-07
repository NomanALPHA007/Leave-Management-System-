<?php
session_start();
require("./DATABASE_FILES/config.php");
?>

<!DOCTYPE html>

    <head>
        <title>Leave Application</title>
        <link rel="stylesheet" href="./css/leave_fm.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <script src="./JAVASCRIPT/leaveForm.js"></script>
    </head>

    <body>
    <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
      <h3>Application <span>Page</span></h3>
    </div>
    <div class="right_area">

      <button class="main_btn" onclick="window.location.href='check_login.php';"><i class="fas fa-home"></i> Main Page</button>

    </div>
  </header>
  <!--sidebar start-->
  <div class="sidebar">
    <center>
      <img src="./css/images/profile.png" class="profile_image" alt="">
      <h4><?php echo $_SESSION["USER"] ?> </h4>
    </center>
    <a href="update_info_form.php"><i class="fas fa-user"></i><span>Edit Profile</span></a>
    <a href="leave_form.php"><i class="fa fa-th"></i><span>Leave Form</span></a>
    <a href="result.php"><i class="fas fa-eye"></i><span>View Result</span></a>
    <a href="view_search_staff.php"><i class="fas fa-copy"></i><span>Previous Leaves</span></a>
    <a href="#"><i class="fas fa-list"></i><span>Work List</span></a>
    <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    <a href="logout.php" class="icon-a"><i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp;Logout</a>
  </div>
  <!--sidebar end-->


  <div class="content"></div>


    <div class="leaveform">

        <form name="leave_form" action="add_application.php" method="post" onsubmit="return validateForm()">
        <h2>Leave Application Form</h2>

        <table>
            <tr>
            <td> Staff Username : </td>
            <td> <?php echo $_SESSION["USER"]?></td>
            </tr>

            <tr>
            <td> Staff ID : </td>
            <td> <?php echo $_SESSION["id"]?></td>
            </tr>

            <tr>
            <td> Full Name: </td>
            <td> <input type="text" id="name" name="name" size="30" value="" /> </td>
            </tr>


            <tr>
            <td> Start Date: </td>
            <td><input type="date" class="textbox" id="startdate" name="start_date" value="" onchange="getDays()" /></td>
            </tr>

            <tr>
            <td> End Date: </td>
            <td><input type="date" class="textbox" id="enddate" name="end_date" value="" onchange="getDays()" /></td>
            </tr>

            <tr>
            <td> Amount of days: </td>
            <td><input type="text" class="textbox" id="days" name="numdays" value="" /></td>
            </tr>

            <tr>
            <td> Reason: </td>
            <td> <textarea name="reason" rows="8" cols="50" value=""></textarea> </td>
            </tr>
            
            <tr>
            <td></td>
            <td align="center"><BR><input type="submit" class="apply" name="apply" value="Submit"></td>
            </tr>

        </table>
        </form>

    </div>
    <br><br>
	<button id="homepage" onclick="window.location.href='check_login.php';">Back to Home Page</button>
    </body>

</html>
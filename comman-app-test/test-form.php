<!-- this a prototype testing page for comman app form print functionality -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comman App Tets - Nurtureinc</title>
    <link rel="stylesheet" href="mainform.css">
    <link rel="stylesheet" href="comman-app.css">
    <style>
        
        .open-app-replica{
            display: none;
        }
    </style>
</head>
<body>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    // Retrieve the name from the form
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $dob = date("F d, Y", strtotime($dob));
    
    //hide the form
    echo "<style>.details_form{display:none;} .open-app-replica{display: block}</style>";
}
?>

<form method="post" class="details_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <div class="input_wrapper">
            <input type="text" name="fname" id="name" placeholder="First Name"  class="student_details_input">
        </div>
        <div class="input_wrapper">
            <input type="text" name="mname" id="name" placeholder="Middle Name" class="student_details_input">
        </div>
        <div class="input_wrapper">
            <input type="text" name="lname" id="name" placeholder="Last Name" class="student_details_input">
        </div>
        <div class="input_wrapper">
            <input type="text" name="email" id="email" placeholder="Email" class="student_details_input">
        </div>
        <div class="input_wrapper">
            <input type="text" name="phone" id="phone" placeholder="Phone" class="student_details_input">
        </div>
        <div class="input_wrapper">
            <input type="text" name="address" id="address" placeholder="Address" class="student_details_input">
        </div>
        <div class="input_wrapper">
            <input type="text" name="city" id="city" placeholder="City" class="student_details_input">
        </div>
        <div class="input_wrapper">
            <input type="text" name="state" id="state" placeholder="State" class="student_details_input">
        </div>
        <div class="input_wrapper">
            <input type="text" name="zip" id="zip" placeholder="Zip" class="student_details_input">
        </div>
        <div class="input_wrapper">
            <input type="text" name="country" id="country" placeholder="Country" class="student_details_input">
        </div>
       <Label>date of birth</Label>
        <div class="input_wrapper">
            <input type="date" name="dob" id="dob" placeholder="Date of Birth" class="student_details_input" value="01/02/2023">
        </div>
        <input type="submit" value="Submit" class="student_details_input">
    </div>
</form>


<form class="open-app-replica">
        <h2 class="section-heding">Personal Details</h2>
        <!-- name -->
        <label for="name">Legal First/Given name <span class="red_star">*</span></label>
        <div class="input_wrapper">
            <input type="text" name="fname" class="student_details_input" value="<?php echo $fname ?>">
        </div>
        <label for="">Middle Name</label>
        <div class="input_wrapper">
            <input type="text" name="mname" class="student_details_input" value="<?php echo $mname ?>">
        </div>

        <input type="text" name="name" class="student_details_input">
        <label for="name">Legal Last/Family name <span class="red_star">*</span></label>

        <div class="input_wrapper">
            <input type="text" name="lname" class="student_details_input" value="<?php echo $lname ?>">
        </div>

        <!--name  suffix -->
        <label for="name">Suffix</label>
        <div class="input_wrapper">

            <!-- dropdown -->
            <select name="suffix" id="suffix" class="dropdown">
                <option value="">None</option>
                <option value="Jr">Jr</option>
                <option value="Sr">Sr</option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
            </select>
        </div>

        <!-- date of birth -->
        <label for="name">Date of Birth <span class="red_star">*</span></label>
        <div class="input_wrapper">
            <input type="text" name="dob" id="dob" class="student_details_input" value="<?php echo $dob ?>">
        </div>
        
        <div class="print_button" onclick="window.print()">Print</div>
        
    </form>
</body>
</html>

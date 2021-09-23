<!DOCTYPE html>
<html>
    <head>
        <title>registrationpage</title>
        <link rel="stylesheet" href="newform.css"/>

    </head>
    <body>
<br>

            <div class="box10">
       <u><h1>WELCOME IN REGISTRATION PAGE</h1></u>
        </div>
        <form action="insert.php" method ="post">
            <div class="box11">
            First Name:<br>
            <input type="text" name="firstname" maxlength="40" placeholder="First Name" required>
            <br>
            <br>
            Last Name:<br>
            <input type="text" name="lastname" maxlength="40" placeholder="Last Name" required>
            <br>
            <br>
            Branch:<br>
            <input type="text" name="branch" maxlength="10" placeholder="Branch" required>
            <br>
            <br>
            Student Number:<br>
            <input type="number" name="studentnumber" maxlength="7" placeholder="Student Number" required>
            <br>
            <br>
            Mobile No.:<br>
            <input type="tell" name="mobileno" maxlength="10" placeholder="Mobile Number" required>
            <br>
            <br>
            Gender:<br>
                       <select name="gender">
                            <option selected hidden value=" ">Select Gender</option>       
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                    </select>
            <br>
            <br>
            Email:<br>
            <input type="email" name="email"  maxlength="50" placeholder="Email" required>           
            <br>
            <br>

            Create Password:<br>
            <input type="password" name="createpassword" maxlength="10" placeholder="......" required>
            <br> 
            <br>
            Cofirm Password:<br>
            <input type="password" name="confirmpassword" maxlength="10" placeholder="......" required>
            <br> 
          <br>
          <br>
          <br>
          </form>    
          <input type="submit" name="submit" value="Submit" class="sub">
        </div>
    </body>
    </html>



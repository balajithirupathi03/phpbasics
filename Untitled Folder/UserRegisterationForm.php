<html>

<head>
<link rel="stylesheet" href="newsfeed.css" type="text/css">
</head>

<body>
    <div class="body">
        <h1>Registration Form</h1>
        <form method="post" onsubmit="submiit();" action="UserRegisterationController.php" >
            <p> <label >Name :</label><input name="name" type="text" placeholder="Enter your Name" required></p>
            
            <p><label >Date Of Birth :</label><input name="dateofbirth" class="date_of_birth_field" type="date" placeholder="Enter your date of birth" required></p>
           
            <p><label>Genter :</label></p>
            <p><input type="radio" name="gender" value="male">Male</p>
            <p><input type="radio" name="gender" value="female">Female</p>
            <p><input type="radio" name="gender" value="other">Other</p>
            
            <p><label >Game :</label><input name="game" type="" placeholder="Select your game" required></p>
            
            <p><label >place :</label><input type="" name="place" placeholder="Select your place" required></p>
            
            <p><label >Mail id :</label><input type="email" name="mailid" placeholder="Enter your ail" required></p>
            
            <p><label >Phone Number :</label><input name="mobilenumber" type="text" placeholder="Enter Your phone number" required></p>
           
            <p><label >Password :</label><input name="password" type="password" required></p>
            <p><label >Re Enter Your Password :</label><input name="reenteredpassword" type="password" required></p>
            
            <input type="submit" name="submit" class="registerform_submit_button">
            <input type="reset" class="registerform_reset_button">
            
        </form>

    </div>
</body>

</html>

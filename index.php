
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST </title>
</head>
<body>
    
    <form class="register" action="process.php" method="post">
        <label for="name">name<input type="text" name="name" id="name" /></label>
        <label for="dob">date of birth<input type="date" name="dob" id="dob" /></label>
        <label for="city">city<input type="text" name="city" id="city"/></label>
        <label for="contactPref">Select prober contact</label>
        <label for="sms">SMS<input type="checkbox" name="contactPref[]" id="sms" value="sms"/></label>
        <label for="call">Call<input type="checkbox" name="contactPref[]" id="call" value="call"/></label>
        <label for="gender">Gender</label>
        <label for="male">Male<input type="radio" name="gender" id="gender" /></label>
        <label for="female">Female<input type="radio" name="gender" id="gender" /></label>
        <input type="submit" value="register" name="register">
    </form>
</body>
</html>
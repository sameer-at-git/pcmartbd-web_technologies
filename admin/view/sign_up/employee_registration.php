<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Employee</title>
    <link rel="stylesheet" href="../../css/emp.css">

</head>

<body>
    <h2>Add Employee</h2>
    <form action="../../control/employee_reg_control.php" method="post">
        <fieldset>
            <legend><b>Employee Personal Details</b></legend>
            <table>
                <tr>
                    <td>Full Name :</td>
                    <td><input type="text" name="fname" placeholder="Enter Your Full Name" ></td>
                </tr>
                
                <tr>
                    <td>Phone Number :</td>
                    <td><input type="number" name="number"></td>
                </tr>
                <tr>
                    <td>Date of Birth :</td>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td>Present Address :</td>
                    <td><textarea name="adress" id="" cols="30" rows="4"
                            placeholder="Enter Your Present Address"></textarea></td>
                </tr>
                <tr>
                    <td>Permanent Address :</td>
                    <td><textarea name="adresss" id="" cols="30" rows="4"
                            placeholder="Enter Your Permanent Address"></textarea></td>
                </tr>
                <tr>
                    <td>Gender :</td>
                    <td>
                        <label for="101">
                            <input type="radio" name="gender" value="Male" id="101">Male
                        </label>
                        <label for="102">
                            <input type="radio" name="gender" value="Female" id="102">Female
                        </label>
                        
                    </td>
                </tr>
                <tr>
                    <td>Marital Status :</td>
                    <td>
                        <select name="status" id="maritial">
                            <option value="married">Married</option>
                            <option value="single">Single</option>
                        </select>
                    </td>
                </tr>
            </table>
        </fieldset>
        <br>
        <fieldset>
            <legend><b>Joining Information</b></legend>
            <table>
                <tr>
                    <td>Picture of Your National ID :</td>
                    <td><input type="file" name="nidpic"></td>
                </tr>
                <tr>
                    <td>Picture of Yourself :</td>
                    <td><input type="file" name="pic"></td>
                </tr>
                <tr>
                    <td>Date of Joining :</td>
                    <td><input type="date" name="doj"></td>
                </tr>
                <tr>
                    <td>Employment :</td>
                    <td>
                        <label for="101">
                            <input type="radio" name="employment" value="full" id="101">Full Time
                        </label>
                        <label for="102">
                            <input type="radio" name="employment" value="part" id="102">Part Time
                        </label>
                        <label for="103">
                            <input type="radio" name="employment" value="intern" id="103">Internship
                        </label>
                    </td>
                </tr>
                
            </table>
        </fieldset>
        <br>
        <fieldset>
            <legend><b>Login Details</b></legend>
            <table>
                <tr>
                    <td>Email :</td>
                    <td><input type="email" name="emai" placeholder="abcd@gmail.com"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="pass" placeholder="Enter Your Password"></td>
                </tr>
                <tr>
                    <td>Confirm Password :</td>
                    <td><input type="password" name="confirmpass" placeholder="Re-Enter to Confirm"></td>
                </tr>
            </table>
        </fieldset>
        <br>
        <table>
            <tr>
            <td><a id="back-button" href="../functions/manage_admin.php">Back</a></td>
                <td><input type="submit" value="Confirm"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="reset" value="Clear"></td>
            </tr>
        </table>
    </form>
</body>

</html>
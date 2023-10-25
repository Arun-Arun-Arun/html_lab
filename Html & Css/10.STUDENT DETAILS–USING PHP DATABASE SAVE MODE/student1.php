<?php
ob_start();
session_start();
$conn=mysqli_connect('localhost','root','') or die("cannot connect mysqli");
mysqli_select_db($conn,"bca")or die("cannot select bca database");
if(isset($_REQUEST["mode"])=="save")
{
    mysqli_query($conn,"insert into tblstudent values('".$_POST["txt_regno"]."','".$_POST["txt_sname"]."','".$_REQUEST["cmb_dept"]."','".$_POST["cmb_year"]."','".$_POST["cmb_sem"]."')");
    if(mysqli_affected_rows($conn)){
        $_SESSION['msg']="Saved successfully";
    }
    header("location:student1.php");
    die();
}
    if(isset($_REQUEST["mode"])==""){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <form action="student1.php?mode=save" method="post" name="frm">
        <table border="0" cellpadding="0" cellspacing="0" width="400">
            <tr height="40">
                <td>Register No:</td>
                <td><input type="text" value="" name="txt_regno"></td>
            </tr>
            <tr height="40">
                <td>Student Name :</td>
                <td><input type="text" value="" name="txt_sname"></td>
            </tr>
            <tr height="40">
                <td>Department :</td>
                <td>&nbsp;<select name="cmb_dept">
                    <option value="I">---Select---</option>
                    <option value="Computer Applications">Computer Applications</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Computer Technologhy">Computer Technologhy</option>
                </select></td>
                <tr height="40">
                    <td>Year</td>
                    <td>&nbsp;<select name="cmb_year">
                        <option value="1">---Select---</option>
                        <option value="I">I year</option>
                        <option value="II">II year</option>
                        <option value="III">III year</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Semester:</td>
                    <td>&nbsp;<select name="cmb_sem">
                        <option value="1">---Select---</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                    </select></td>
                </tr>
                <tr height="60">
                    <td colspan="2" align="center">
                        <input type="submit" value="Save">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </tr>
        </table>
        <?php
        if(isset($_SESSION['msg'])){
            if($_SESSION['msg']!=="")
            echo $_SESSION['msg'];
            $_SESSION['msg']="";
        }
        ?>
    </form>
</body>
</html>
<?php
    }
?>

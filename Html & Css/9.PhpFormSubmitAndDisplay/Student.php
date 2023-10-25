<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students Details</title>
</head>
<body>
   <form name="stdfrm" method="post" action="sample.php">
    <table>
        <tr>
            <td><label>Name : </label></td>
            <td><input type="text" name="txt_name" value=" "></td>
        </tr>
        <tr>
            <td><label>Register Number : </label></td>
            <td><input type="text" name="txt_regno" value=" "></td>
        </tr>
        <tr>
            <td>Department </td>
            <td>
                <select name="cmdept">
                    <option value="1">--select--</option>
                    <option value="BCA">BCA</option>
                    <option value="CS">CS</option>
                    <option value="IT">IT</option>
                </select>
            </td>
        </tr>

        </tr>
            <tr>
                <td>Year : </td>
                <td>
                    <select name="year">
                        <option value="I">I Year</option>
                        <option value="II">II Year</option>
                        <option value="III">III Year</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Semester : </td>
                <td>
                    <select name="sem">
                        <option value="I">I </option>
                        <option value="II">II </option>
                        <option value="III">III </option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                    </select>
                </td>
            </tr>
        <tr>
            <td><input type="reset" name="txt_reset" value="Clear"></td>
            <td><input type="submit" name="txt_submit" value="Submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>

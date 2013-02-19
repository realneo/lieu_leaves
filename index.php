<html>
    <head>
        <title>IHTZ : LIEU LEAVES</title>
    </head>
    <body>
        <form name="leave_form" method="post" action="includes/lieu_leave_process.php">
            <table>
                <caption> LIEU LEAVES </caption>
                <tr>
                    <th>Employee Name</th>
                    <td>
                        <select name="employee">
                            <option value="Employee">Employee</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th> Department </th>
                    <td>
                        <select name="department">
                            <option value="Department">Department<option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th> Lieu Date </th>
                    <td> <input type="text" name="lieu_date" value ="" /> </td>
                </tr>
                <tr>
                    <th> Time</th>
                    <td>
                        <select name="time_in">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                        </select>
                        Hrs
                        &nbsp;
                        &nbsp;
                        to
                        &nbsp;
                        &nbsp;
                        <select name="time_out">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                        </select>
                        Hrs
                    </td>
                </tr>
                <tr>
                    <th>Details</th>
                    <td><textarea name="details"></textarea></td>
                </tr>
                <tr>
                    <th>Remarks</th>
                    <td><textarea name="remarks"></textarea></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="checkbox" name="agree" /> By Clicking this, that means you agree to all the above information.</td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" name="submit" value="Submit" /></td>
                </tr>
            </table>
            
            <inp
        </form>
    </body>
</html>
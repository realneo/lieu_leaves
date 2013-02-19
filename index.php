<html>
    <head>
        <title>IHTZ : LIEU LEAVES</tile>
    </head>
    <body>
        <form name="leave_form" method="post" action="includes/lieu_leave_process.php">
            <table>
                <tr>
                    <th>Date</th>
                    <td><input type="text" name="date" value="Enter Date" /></td>
                </tr>
                <tr>
                    <th>Employee Name</th>
                    <td>
                        <select name="employee">
                            <option value="Employee">Employee</option>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
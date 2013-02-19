<?php include 'includes/db_conn.php';?>
<html>
    <head>
        <title>IHTZ : LIEU LEAVES</title>
        <link type="text/css" rel="stylesheet" href="css/styles.css" />
        <link type="text/css" rel="stylesheet" href="css/jquery-ui-1.9.2.custom.min.css" />
        <script type='text/javascript' src='js/jquery-1.9.0.min.js'></script>
        <script type='text/javascript' src='js/jquery-ui-1.9.2.custom.min.js'></script>
        <script type='text/javascript' src='js/main.js'></script>
        <script>
            $(function() {
                var date = $('.datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
            });
        </script>
    </head>
    <body>
        <div id="lieu_leave">
            <h1 align="center">Islamic Help Tanzania Management Tool</h1>
        <form id='lieu_form' name="lieu_form" method="post" action="includes/add_lieu_process.php">
            <table>
                <caption> LIEU LEAVES </caption>
                <tr>
                    <th width="130px">Employee Name</th>
                    <td>
                        <select name="employee" id="employee">
                            <?php 
                                $q = mysql_query('SELECT * FROM `employees` ORDER BY `first_name` ASC');
                                while($row = mysql_fetch_array($q)){
                                    $emp_first_name = $row['first_name'];
                                    $emp_last_name = $row['last_name'];
                                    $emp_id = $row['id'];
                                    echo "<option value='{$emp_id}'>{$emp_first_name} {$emp_last_name}<option>";
                                };
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th> Lieu Date </th>
                    <td> <input type="text" name="lieu_date" value ="" id="lieu_date" class="datepicker" size="10"/> </td>
                </tr>
                <tr>
                    <th> Time</th>
                    <td>
                        <select name="time_in" id="time_in">
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
                        <select name="time_out" id="time_out">
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
                    <td><textarea name="details" id="details" cols="55" rows="5"></textarea></td>
                </tr>
                <tr>
                    <th>Remarks</th>
                    <td><textarea name="remarks" id="remarks" cols="55" rows="5"></textarea></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="checkbox" name="agree" id="agree"/> <span class='error'>By Clicking this, that means you agree to all the above information.</span></td>
                </tr>
                <tr>
                    <th></th>
                    <td><button name="submit" id="submit"> Submit </buttom></td>
                </tr>
            </table>
            <div id="feedback"></div><!-- feedback -->
        </form>
        </div><!-- leiu_leave -->
        <div id="footer">Design & Developed by Yoteyote.com</div>
    </body>
</html>
<?php include 'includes/db_conn.php';?>
<html>
    <head>
        <title>IHTZ : ADD EMPLOYEE</title>
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
        <div id="lieu_leaves">
            <h1 align="center">Islamic Help Tanzania Management Tool</h1>
            <?php
                $q = mysql_query("SELECT * FROM `lieu_leaves` ORDER BY `name` ASC");
                while($row = mysql_fetch_array($q)){
                    $employee_id = $row['employee_id'];
                    
                };
            ?>
            <div id="feedback"></div><!-- feedback -->
        </div><!-- leiu_leaves -->
        <div id="footer">Design & Developed by Yoteyote.com</div>
    </body>
</html>
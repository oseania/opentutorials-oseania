<html>
    <body>
        <?php
        $link = mysql_connect('localhost', 'root', 'qwer1234');
        mysql_select_db('javatest');
        $result = mysql_query('SELECT foo FROM testdata');
        echo mysql_result($result, 2);
        ?>
    </body>
</html>
<html>
    <head>
        <title> Add Syllabus </title>
    </head>
        <?php

            include_once("../dbConnection/mysqlconfig_connecton.php");
            
            if(isset($_POST['Submit'])){
                $code = $_POST['code'];
                $author = $_POST['author'];
                $subject = $_POST['subject'];

                if(empty($code) || empty($author)){
                    if(empty($code)){
                        echo "<font color='red'>Syllabus Code field is empty </font><br/>";
                    }
                    if(empty($author)){
                        echo "<font color = 'red'>Syllabus Author field is empty</font><br/>";
                    }
                    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                }
                else {
                    $result = mysqlli_query($dbc, "<<UPDATE SQL QUERY");
                    echo "<font color='green'>Data added successfully.</font>";
                    echo "<br/><a href='../index.php>View Result</a>'";
                }
            }

        ?>
        
</html>
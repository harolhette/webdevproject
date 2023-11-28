<?php
    //fetching data
    $query = "SELECT * FROM tblsubjects, tblsyllabus WHERE tblsubjects.subject_id = tblsyllabus.subject_id";
    $result = mysqli_query($dbc, $query); //using mysqli_query
?>
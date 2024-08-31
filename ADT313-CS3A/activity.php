<?php
//Rafael A. Ramos
//BSCS-3A
//ADT213
//August 31, 2024
echo "<h1>Hands On Activity</h1>";
$table = array(
    "header"=>array(
        "Student ID",
        "Lastname",
        "Middlename",
        "Firstname",
        "Course",
        "Section"
    ),
    "body"=>array(
        array( //0
            "lastname"=>"Lname",
            "middlename"=>"Mname",
            "firstname"=>"Fname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array( //1
            "lastname"=>"Lname",
            "middlename"=>"Mname",
            "firstname"=>"Fname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array( //2
            "lastname"=>"Lname",
            "middlename"=>"Mname",
            "firstname"=>"Fname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array( //3
            "lastname"=>"Lname",
            "middlename"=>"Mname",
            "firstname"=>"Fname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array( //4
            "lastname"=>"Lname",
            "middlename"=>"Mname",
            "firstname"=>"Fname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array( //5
            "lastname"=>"Lname",
            "middlename"=>"Mname",
            "firstname"=>"Fname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array( //6
            "lastname"=>"Lname",
            "middlename"=>"Mname",
            "firstname"=>"Fname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array( //7
            "lastname"=>"Lname",
            "middlename"=>"Mname",
            "firstname"=>"Fname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array( //8
            "lastname"=>"Lname",
            "middlename"=>"Mname",
            "firstname"=>"Fname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array( //9
            "lastname"=>"Lname",
            "middlename"=>"Mname",
            "firstname"=>"Fname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array( //10
            "lastname"=>"Lname",
            "middlename"=>"Mname",
            "firstname"=>"Fname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        )
    ) //body array
        ); // $table array

//table stuff
echo "<table border='2'>";
    echo "<tr>";
        foreach ($table["header"] as $head) { //header
            echo "<th>".$head."</th>";
        }
        echo "</tr>";

        foreach ($table['body'] as $i => $row) { //body
            echo "<tr>";
            echo "<td>".($i + 0)."</td>";
            foreach ($row as $cell) {
                echo "<td>".$cell."</td>";
            }
            echo "</tr>";
        }
echo "</table>";



?>
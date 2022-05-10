<?php
$s1 = "ABC";
$s2 = "pqr";
$s3 = "xyz";

$arr = array("abc", "pqr", "xyz");

$abc = array("PHP" => [20, 20]);
$pqr = array("Html" => [10, 20], "PHP" => [20, 20],"History"=>[15,20]);
$xyz = array("Html" => [10, 20], "PHP" => [20, 20], "css" => [15, 20]);

$marks = ["abc patil" => $abc, "pqr" => $pqr, "xyz" => $xyz];
?>
<html>
    <head>
        <style>
            .main{
                
                page-break-after: always;
            }
        </style>
    </head>
    <body>
        <?php
        foreach ($marks as $student_name => $subjects) {
            ?>
        <table border="1" width="500" class="main">
                <tr>
                    <th>logo</th>
                </tr>
                <tr>
                    <th><h1>info planet</h1></th>
                </tr>
                <tr>
                    <th>
                        Student Name: <?php echo ucwords($student_name); ?>
                    </th>
                </tr>
                <tr>
                    <td>
                        <table border="1" width="100%">
                            <tr>
                                <th>
                                    Sub. Name
                                </th>
                                <th>Ob. Marks</th>
                                <th>Out Of</th>
                                <th>Result</th>
                            </tr>

                            <?php
                            $total_ob_marks=0;
                            $total_out_of_marks=0;
                            foreach ($subjects as $subject_name => $marks) {
                                $total_ob_marks +=$marks[0];
                                $total_out_of_marks += $marks[1];
                                ?>
                                <tr>
                                    <td><?php echo $subject_name; ?></td>
                                    <td><?php echo $marks[0]; ?></td>
                                    <td><?php echo $marks[1]; ?></td>
                                    <td>
                                        <?php
                                        /* if($subjects['Html'][0] >= 7)
                                          {
                                          echo "Pass";
                                          }else{
                                          echo "Fail";
                                          } */
                                        echo $marks[0] >= 7 ? "Pass" : "Fail";
                                        ?>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>
                                <tr>
                                    <th>Total</th>
                                    <th><?php echo $total_ob_marks; ?></th>
                                    <th><?php echo $total_out_of_marks; ?></th>
                                    <th></th>
                                </tr>   
                                
                        </table>
                    </td>
                </tr>
            </table><br>
            <?php
        }
        ?>
            <input type="button" value="Print" onclick="window.print();">
    </body>
</html>











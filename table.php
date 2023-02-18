<?php 
// Include configuration file  
include ('db.php');
if (isset($_POST['Dno'])) {
    $Dno = $_POST['Dno'];


//Select query 
$select = "SELECT * FROM db_marks WHERE Dno='$Dno'";
$result = $conn->query($select);
$sel = "SELECT * FROM stu_details WHERE d_no='$Dno'";
$res =$conn->query($sel);
$tot= "SELECT ( M1 + M2 + M3 + M4 + M5) AS total FROM db_marks WHERE Dno='$Dno' ";
$re =$conn->query($tot);
}

?> 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="Style.css">
<html>
    <head>
        <title>table</title>
        <style>
            table, th, td {
            border: 1px solid black;
            border-color: #96D4D4;
            width: 800px;
            height: 60px;
        }
        .btn{
            background-color: rgb(5, 188, 5);
            width: 80px;
            height: 30px;
            border-radius: 4px;
            text-align: center;
        }
        footer {
            height: 100px;
        }
        </style>
    </head>
    <body>
        <div class="">
            <header>
                  <h1 class="head1">Student Results</h1>
              <hr>
              </header>
    </div>
            <br><br><br><br>
               <div class="container" >          
            <?php   
			// Loop the employee data
                echo '<center>';
				echo '<table>';
				while($row = $res->fetch_object()){
                    echo '<tr style="background-color: #FFC312;">'
                    .'<th colspan="2">'.'<center>'."  Name: ".'<label id="labname" name="labname">'.$row->f_name.'</center>'.'</label>'.'</th>'
                  .'</tr>';
                     echo '<tr style="background-color: #FFC312;">'
                  .'<th colspan="2">'.'<center>'."  D.No: ".'<label id="labdno" name="labdno">'.$row->d_no.'</center>'.'</label>'.'</th>'
                .'</tr>';
                }
                    while($row = $result->fetch_object()){
					echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."Subject-1".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->M1.'</center>'.'</td>'
						.'</tr>';
                        echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."Subject-2".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->M2.'</center>'.'</td>'
						.'</tr>';
                        echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."Subject-3".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->M3.'</center>'.'</td>'
						.'</tr>';
                        echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."Subject-4".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->M4.'</center>'.'</td>'
						.'</tr>';
                        echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."Subject-5".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->M5.'</center>'.'</td>'
						.'</tr>';
				}
                    while($row = $re->fetch_object()){
                        echo '<tr  style="background-color: #ff124198;">'
                        .'<td>'.'<center>'.'<b>'."Total".'</b>'.'</center>'.'</td>'
                        .'<td>'.'<center>'.$row->total.'</center>'.'</td>'
                        .'</tr>';
                    }
				echo '</table>';
                echo '</center>';
                        ?> 
			</tbody> 
        </table> 
        <br><br>
        <div>
        <center><a href="details.html"><button id="back" name="back" class="btn btn-success">Back</button></a></center>
        </div>
    </div>
    <footer></footer>
</body> 
</html> 
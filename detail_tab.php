<?php 
// Include configuration file  
include ('db.php');
if (isset($_POST['Dno'])) {
    $Dno = $_POST['Dno'];


//Select query 
$sel = "SELECT * FROM stu_details WHERE d_no='$Dno'";
$res =$conn->query($sel);
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
            <br><br><br><br>
    </div>
    <div class="container">
                         
            <?php   
			// Loop the employee data
                echo '<center>';
				echo '<table>';
				while($row = $res->fetch_object()){
                    echo '<tr style="background-color: #FFC312;">'
                    .'<th colspan="2">'.'<center>'."STUDENT DETAILS".'</th>'
                  .'</tr>';
                  echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."FIRST NAME".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->f_name.'</center>'.'</td>'
						.'</tr>';
                echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."LAST NAME".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->l_name.'</center>'.'</td>'
						.'</tr>';
                echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."D.NO".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->d_no.'</center>'.'</td>'
						.'</tr>';
                echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."GENDER".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->gender.'</center>'.'</td>'
						.'</tr>';
                echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."MOBILE NUMBER".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->m_no.'</center>'.'</td>'
						.'</tr>';
                echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."DATE OF BIRTH".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->dob.'</center>'.'</td>'
						.'</tr>';
                echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."EMAIL".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->email.'</center>'.'</td>'
						.'</tr>';
                echo '<tr>'
                        .'<td style="background-color: #12d0ff9d;">'.'<center>'."ADDRESS".'</center>'.'</td>'
						.'<td style="background-color: #85ff12c0;">'.'<center>'.$row->address.'</center>'.'</td>'
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
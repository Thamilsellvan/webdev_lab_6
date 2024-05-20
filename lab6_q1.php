<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 6 Q1</title>
 <style>
   table, th, td {
     border: 1px solid black;
     border-collapse: collapse;
     padding: 10px;
   }
 </style>
</head>
<body>
 <?php 
 $name = "THAMILSELLVAN A/L PAMANATHE";
 $matric_number = "DI220143";
 $course = "BIT";
 $year_of_study = "3rd Year";
 $address = "No 6, Jalan Mesra 5, Taman Mesra, Batu Tiga, 40150, Shah Alam";
 ?>
 <table>
 <tr>
 <td>Name</td>
 <td><?php echo $name; ?></td> 
 </tr>
 <tr>
 <td>Matric Number</td>
 <td><?php echo $matric_number; ?></td> 
 </tr>
 <tr>
 <td>Course</td>
 <td><?php echo $course; ?></td> 
 </tr>
 <tr>
 <td>Year of Study</td>
 <td><?php echo $year_of_study; ?></td> 
 </tr>
 <tr>
 <td>Address</td>
 <td><?php echo $address; ?></td> 
 </tr>
 </table>
</body>
</html>


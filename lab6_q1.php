<!DOCTYPE html>
<html lang="en">
<head>
        <title>Lab 6 Q1</title>

        <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    
</head>
<body>
     <?php
         $name = "Nur Ain binti Mohd Ariffin";
         $matric = "DI220169";
         $course = "Information Technology";
         $yearOfStudy = 2;
         $address = "Kampung Bukit Jering";
     ?>
 <table>
    <tr>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matric"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
        
    </tr>
 </table>

</body>
</html>
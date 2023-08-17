<li><a href="final.php">Home</a></li>
<?php

//All listed names are current users of the site
$jsonData = '[
    {
        "Name": "Jay Walker",
         "Blogtype": "conspiracy",
         "Age": 22
    
    },
     {
         "Name": "Mona Truths",
         "Blogtype": "business",
         "Age": 35
     },
      {
         "Name": "Bob McDan",
         "Blogtype": "Health",
         "Age": 45
     },
      {
         "Name": "Max Shane",
         "Blogtype": "conspiracy",
         "Age": 22
     },
      {
         "Name": "Jayden Cason",
         "Blogtype": "Media",
         "Age": 30
     },
       {
         "Name": "Andrew Nigel",
         "Blogtype": "Travel",
         "Age": 22
         
     }
     ]'; 
//using what was shown in class I am converting my data into an array 
$userData = json_decode($jsonData, true);

?>

<!DOCTYPE html>
<html> 
    <head>
        <title>Bloggers</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <h1>Site Users</h1>
        <?php
          //here I am beginning to make the table starting with my headers 
        echo "<table>
              <tr>
                <th>Name</th>
                <th>blogtype</th>
                <th>Age</th>
             </tr>";
             //here my data is displayed 
        foreach($userData as $user){
            echo "<tr>";
            echo "<td>". $user['Name'] . "</td>";
            echo "<td>". $user['Blogtype'] . "</td>";
            echo "<td>". $user['Age'] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
      
      ?>    
  </body>
</html>









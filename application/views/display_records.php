<html>
    <head>
        <title>Display Task</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    </head>

    <body>
        <table width='600' border ='0' cellspacing='5' cellpadding='5'>
            <tr style="background:#CCC;">
                <th>NO</th>
                <th>TASK</th>
                <th>STATUS</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>
            <?php 
            $i=1;
            foreach($data as $row){
                if($row->completed==0){
                    $status = "<a href='statusdata?id=".$row->id."'>Status</a></td>";
                }else{
                    $status = 'Complete';
                }
                echo '<tr>';
                echo '<td>'.$i.'</td>';
                echo '<td>'.$row->task.'</td>';
                echo '<td>'.$status.'</td>';
                echo "<td><a href='updateddata?id=".$row->id."'>Update</a></td>";
                echo "<td><a href='deleteddata?id=".$row->id."'>Delete</a></td>";
                echo '</tr>';
                $i++;
            }
            ?>
        </table>
    </body>
</html>
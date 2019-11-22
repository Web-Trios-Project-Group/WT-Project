<html>
    <style>
        table,td,tr,th{
            border:2px solid black;
            font-size:20px;
            font-style:italic;
            align:center;
        }
        body {
            background : url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQS8cZLsl9NsOGnDkbAT48xW8W5mP0wL3IR2S6t18zgPWarRhnn") no-repeat center fixed;
            /* background-repeat: repeat-y;  */
            background-position: center center;
            background-repeat:  no-repeat;
            background-attachment: fixed;
            background-size:  cover;
            background-color: #999;
        }

        span{
            font-family:'Cookie',cursive;
            font-size:24px;
            color:black;
            font-weight: bolder;
            text-shadow: 2px 2px 8px blue;
            position:relative;
            left:530px;
  }
    </style>
    <body>
    <?php
            $con = mysqli_connect('localhost','id11661843_eprakruthi','9876@1234');
            if(!$con)
            {
                echo "<span>Not Connected to server</span>";
            }
            if(!mysqli_select_db($con,'id11661843_multi_login'))
            {
                echo "<span>Database not selected<span>";
            }

            if(isset($_POST['search']))
            {
                $searchq = $_POST['search'];
                $sql = "SELECT * FROM 'data_table' WHERE topic = '$searchq'";
                $query=mysqli_query($con,$sql);

                if(!$query)
                {
                    echo "<span>Not Inserted......</span>";
                }
                else
                {
                    while($row=mysqli_fetch_array($query,MYSQLI_NUM))
                    {
                        $topic=$row[1];
                        $content=$row[2];
                        $cost=$row[3];
                    }
                    echo "<span>Successfully Done......</span><br><br>";
                }
            }
            mysqli_close($con);
        ?>
        <table align="center">
            <tr>
                <th>Topic</th>
                <th>Content</th>
                <th>Cost</th>
            </tr>
            <tr>
                <td><?php echo "$topic"?></td>
                <td><?php echo "$content"?></td>
                <td><?php echo "$cost"?></td>
            </tr>
        </table><br><br>
        <a href="find_out.php"><span>FIND OUT</span></a>
    </body>
</html>
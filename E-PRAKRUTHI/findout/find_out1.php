<html>
    <style>
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

            $topic=$_POST['topic'];
            $content=$_POST['content'];
            $cost=$_POST['cost'];

            $sql = "INSERT INTO data_table (Topic, Content ,Cost) VALUES ('$topic','$content','$cost')";

            if(!mysqli_query($con,$sql))
            {
                echo "<span>Not Inserted......</span>";
            }
            else
            {
                echo "<span>Successfully Done......</span>";
            }

            header("refresh:2; url=find_out.html");
        ?>
    </body>
</html>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('images/bg1.jpg');
            margin: 0;
            padding: 50px;
            text-align: center;
        }
        
        .feedback-form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 80%;
            margin: 50px auto;
            padding: 30px;
        }
        
        h1 {
            color: #0066CC;
            text-align: center;
            margin-top: 0;
        }
        
        input[type="text"],
        textarea {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            width: 300px;
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: 400;
            color: #333;
        }
        
        input[type="submit"] {
            background-color: #0066CC;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
        }
        
        input[type="submit"]:hover {
            background-color: #0052a3;
        }
        
        label {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }
        
        .feedback-list {
            margin-top: 50px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            padding: 30px;
        }
        
        .feedback-list h2 {
            color: #0066CC;
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .feedback-item {
            margin-bottom: 20px;
        }
        
        .feedback-item h3 {
            color: #333;
            font-size: 18px;
            font-weight: 600;
            margin-top: 0;
            margin-bottom: 10px;
        }
        
        .feedback-item p {
            font-size: 16px;
            font-weight: 400;
            color: #333;
            margin-top: 0;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <main>
        <div class="feedcontainer">
            <h1>FEEDBACK</h1>
            <form action="feedbackconn.php" method="post">
                <input type="text" name="name" placeholder="Enter your name"><br>
                <input class='feedback'type="text" name="feedback" placeholder="Enter feedback"><br>
                <input class='submit'type="submit" value="SUBMIT">
            </form>

            <div class="comments">
            <?php
$conn = mysqli_connect("localhost", "root", "", "feedback");

$result = mysqli_query($conn, "SELECT fname, feedback FROM feeds");

while ($row = mysqli_fetch_assoc($result)) {
    $feedname = $row['fname'];
    $comment = $row['feedback'];
     echo "<h2>$feedname</h2>";
     echo "<p>$comment</p>";
}

// Close the database connection
mysqli_close($conn);
?>


            </div>
        </div>
    </main>
</body>
</html>
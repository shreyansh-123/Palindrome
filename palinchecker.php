<html>
<head>
    <style>
    *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body
        {
            background-color: aqua;
             display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .box
        {
            height: 300px;
            width: 400px;
            background-color: white;
            border-radius: 12px 12px 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .submit
        {
            margin-top: 10px;
            padding: 10px 20px;
            border-radius: 5px;
            outline: none;
            border: none;
            background-color: #6c63ff;
            color: #fff;
            font-size: 0.9rem;
        }
                .input
        {
            margin-bottom: 10px;
            width: 250px;
            height: 40px;
            padding: 5px;
            outline: none;
            border-radius: 1px solid grey;
            border-radius: 5px;
        }
    </style>
    
    <body>
    <div class="box">
        <form method="post">
             <h1>Palindrome Checker</h3>
            <h3>
                    <?php
                if(isset($_POST['submit'])) {
                    $word = $_POST['palindrome'];
                    
                    $reverse = strrev($word);
                    
                    if($word == $reverse) {
                        echo "Yes, It is plaindrome";
                    }
                    else
                    {
                         echo "No, It is not plaindrome";
                    }
                }
                    ?>
            </h1>
        <input type="text" class="input" placeholder="Enter Word to check" name="palindrome" required>
            <input type="submit" class="submit" name="submit" value="submit">
        </form>
        </div>
    </body>
    </head>
</html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="Validate_err_msg.php" method="post">
            Name:<input type="text" name="name">
            <br><br>
            E-mail:<input type="text" name="email">
            <br><br>
            website:<input type="text" name="website">
            <br><br>
            Comment: <textarea name="Comment"rows="5"cols="40"></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <br><br>
            <button name="submit"> Submit </button>
            <button type="reset" name="reset">Cancel</button>
        </form>
    </body>
</html>
<!doctype html>
<html lang="en">
    <head>
        <title>Behat Selenium Chrome Test Form</title>
        <!--I'm not a front end developer, so apologies for the bootstrap...-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Behat Selenium Chrome Test Form</h1>
            <h4>Please fill in the form and press submit</h4>
            <form method="POST" action="result.php">
                <fieldset>
                    <label>Your Name:<label>
                    <input type="text" name="name" />
                </fieldset>
                <fieldset>
                    <input type="submit" name="submit" value="Submit" />
                </fieldset>
            </form>
        </div>
    </body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="index.css"/>
</head>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>
    <form action="display.php" method="post">
        <div id="data">
            <label> Invesment Amount:</label>
            <input type="text" name="amount" value="0"></br>

            <label> Yearly Interest Rate:</label>
            <input type="text" name="rate" value="0"></br>

            <label> Number of Years: </label>
            <input type="text" name="year" value="0"></br>
        </div>

        <div id="btn">
            <label>&nbsp; </label>
            <button type="submit" name="btn1" >Calculate</button>
        </div>
    </form>
</div>
</body>
</html>
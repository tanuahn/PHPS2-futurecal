<link type="text/css" rel="stylesheet" href="index.css"/>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstvalue = $_POST["amount"];
    $rate = $_POST["rate"];
    $year = $_POST["year"];
    $abc = $firstvalue;
    for ($x = 1; $x <= $year; $x++) {
        $profit = ($firstvalue + ($firstvalue * $rate * 0.01));
        $firstvalue = $profit;
    }
}
?>
<div id="content">
    <h1>Future Value Calculator</h1>
    <form action="display.php" method="post">
        <div id="data">
            <label> Invesment Amount:</label>
            <span><?php echo "$" . $abc ?></span></br>

            <label> Yearly Interest Rate:</label>
            <span><?php echo $rate . "%" ?></span></br>

            <label> Number of Years: </label>
            <span><?php echo $year ?></span></br>
            <label> Future Value: </label>
            <span><?php echo "$" . $firstvalue ?></span></br>

        </div>
        <!---->
        <!--        <div id="btn">-->
        <!--            <label>&nbsp; </label>-->
        <!--            <button type="submit" name="btn1" >Calculate</button>-->
        <!--        </div>-->

    </form>
</div>

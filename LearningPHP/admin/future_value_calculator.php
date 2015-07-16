<!DOCTYPE html>
<html>
    <head>
        <title>Future Value Calculator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/main.css">
    </head>
    <body>
        <div id="content">
            <h1>Future Value Calculator</h1>
            <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
            <?php } ?>
            <form action="display_result.php" method="post">
                
                <div id="data">
                    <label>Investment Amount:</label>
                    <input type="text" name="investment"/>
                    
                    <label>Yearly Interest Rate:</label>
                    <input type="text" name="interest_rate"/>
                    
                    <label>Number of Years:</label>
                    <input type="text" name="years"/>
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate"/><br/>
                </div>
            </form>
            </div>
    </body>
</html>

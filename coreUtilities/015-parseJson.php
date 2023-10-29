<?php
$book = array(
    "title" => "jQuery",
    "author" => "Poo cute"
);
$strJSON = json_encode($book);
echo "<br />" . $strJSON;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-1.12.4.min.js"></script>
    <title>jQuery-Core: Utilities</title>
    <script>
        jQuery(document).ready(function(e) {

            $('#process').click(function() {
                var obj = $.parseJSON('<?php echo $strJSON; ?>');
                console.log(obj)
            })

        });
    </script>
</head>

<body>
    <h2>jQuery core - Utility</h2>
    <h3>jQuery.parseJSON(json)</h3>

    <div id="boxA" class="boxA">
        <div class="item">1.HTML</div>
        <div class="item">2.CSS</div>
        <div class="item">3.PHP</div>
        <div class="item">4.LARAVEL</div>
    </div>

    <center>
        <input type="button" value="Process" name="process" id="process">
    </center>
</body>

</html>
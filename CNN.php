<?php
include("page.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CNN-Detecting Money</title>
    </head>
    <body>
        <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
        <p style="text-align: center; margin-top:100px; margin-bottom:50px"><label for="file" style="cursor: pointer;border-style:solid; border-color: black; font-size: 30px; width: 250px;">Upload Image</label></p>
        <p style="text-align: center;" ><img style="position:inherit;" id="output" width="600"/></p>
        <script>
            var loadFile = function(event) {
                var image = document.getElementById('output');
                image.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>
        <div>
            <?php
            $pyout = exec('python training.py');
            echo $pyout;
            ?>
        </div>

    </body>
</html>
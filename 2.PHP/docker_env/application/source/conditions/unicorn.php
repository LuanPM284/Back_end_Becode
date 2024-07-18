<?php
$species = $_GET["submit"];
$ansUni = '    
<html>
    <body>
<iframe src="https://giphy.com/embed/2A75RyXVzzSI2bx4Gj" width="480" height="480" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/hallmarkecards-cute-hallmark-shoebox-2A75RyXVzzSI2bx4Gj">via GIPHY</a></p>
    
    </body>
</html>
    ';
$ansHum = '
<html>
    <body>
<iframe src="https://giphy.com/embed/vvBsAcNyjKk6iOkVx3" width="480" height="398" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/theoffice-season-9-the-office-tv-vvBsAcNyjKk6iOkVx3">via GIPHY</a></p>
    </body>
</html>
';
$ansCat = '
<html>
    <body>
<iframe src="https://giphy.com/embed/MDJ9IbxxvDUQM" width="480" height="269" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cat-kisses-hugs-MDJ9IbxxvDUQM">via GIPHY</a></p>
    </body>
</html>
';

echo $species == "Unicorn" ?  $ansUni : Null;
echo $species == "Human" ?  $ansHum : Null;
echo $species == "Cat" ?  $ansCat : Null;

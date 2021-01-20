<?php
    $dir = 'items';
    $items = array_diff(scandir($dir), array('..', '.',));
    foreach ($items as $item) {
    $json = file_get_contents("items/$item/info.json");
    $data = json_decode($json, true);
    $git = $data['git'];
    $title = $data['title'];
    $minidesc = $data['minidesc']; 
    echo "<div class=\"card bg-dark\" style=\"width: 15rem;\">
        <a href=\"items/$item\"><img src=\"items/$item/thumbnail.png\" class=\"card-img-top\" alt=\"Thumbnail\"></a>
        <div class=\"card-body\">
        <h5 class=\"card-title\">$title</h5>
        <p class=\"card-text\">$minidesc</p>";
    if ($data['git']){
        echo "<div class=\"dlbtns\">
            <a href=\"$git\">
            <img src=\"../images/gitIcon.png\">
            </a>
            </div>";
                    }
                echo "</div></div>";
                }
?>  
<?php
    $json = file_get_contents("info.json");
    $data = json_decode($json, true);
    $title = $data['title'];
    $desc = $data['desc']; 
    $git = $data['git'];
    $filename = "/coding/items/$title/code.html";
    echo "<h1>$title";
    if ($git){
        echo "<a href=\"$git\"><img src=\"/images/dlIcon.png\" alt=\"GitHub\"></a>";
    }
    echo"</h1>
    <div class=\"desc\">$desc</div>
    <iframe src=\"code.html\"></iframe>";
?>

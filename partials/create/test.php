<?php

function checkRoom($int, $connect) {
    $sql = "SELECT id FROM stanze WHERE room_number = $int";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        var_dump('stanza già presente');
        $check = true;
    } else {
        var_dump('stanza non presente');
        $check = false;
    }
    return $check;
}

<?php

function GetColors(){
    return [
        "grey"=>"szary",
        "white"=>"biały",
        "yellow"=>"żółty",
        "black"=>"czarny",
        "green"=>"zielony",
        "purple"=>"fioletowy"
    ];
}
function ColorsToSelect(array $colors, $id="colors"){
    $html = "<select id='{$id}'>\n";
    foreach ($colors as $key => $value) {
        $html .= "<option value='{$key}'>{$value}</option>\n";
    }
    $html.= "</select>\n";
    return $html;
}


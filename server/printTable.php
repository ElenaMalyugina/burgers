<?php
function printTable($entity){
    echo "<table>";
    echo "<thead>";
    foreach($entity[0] as $key=>$val) {
        echo "<th>{$key}</th>";
    }
    echo "</thead>";
    foreach($entity as $item) {
        echo "<tr>";
        foreach($item as $value) {
            echo "<td>{$value}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
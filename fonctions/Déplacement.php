<?php
echo "<div class='container'>";

echo "<div class='item'></div>";

echo "<div class='item'>";
if (in_array('N', $directionarr)) {
    $i = array_search('N', $directionarr);
    echo "<a href='index.php?position={$possibilités[$i]}&key=$key'>N</a>";
}
echo "</div>";

echo "<div class='item'></div>";

echo "<div class='item'>";
if (in_array('O', $directionarr)) {
    $i = array_search('O', $directionarr);
    echo "<a href='index.php?position={$possibilités[$i]}&key=$key'>O</a>";
}
echo "</div>";

echo "<div class='item'></div>";

echo "<div class='item'>";
if (in_array('E', $directionarr)) {
    $i = array_search('E', $directionarr);
    echo "<a href='index.php?position={$possibilités[$i]}&key=$key'>E</a>";
}
echo "</div>";

echo "<div class='item'></div>";

echo "<div class='item'>";
if (in_array('S', $directionarr)) {
    $i = array_search('S', $directionarr);
    echo "<a href='index.php?position={$possibilités[$i]}&key=$key'>S</a>";
}
echo "</div>";

echo "<div class='item'></div>";

echo "</div>";
?>

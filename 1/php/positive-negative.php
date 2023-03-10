<?php
if (isset($_GET['n'])) {
    $n = $_GET['n'];
}
?>
<form>
    Enter Number:<input type="number" name="n" autofocus required value="<?php echo $n ?>">
    <button>Check Positive / Negative</button>
</form>
<?php
if (isset($_GET['n'])) {
    if ($n > 0) {
        echo "Positive Number";
    } else if ($n < 0) {
        echo "Negative Number";
    } else {
        echo "Zero";
    }
}
?>
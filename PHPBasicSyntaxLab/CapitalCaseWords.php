<?php
    $upper="";
    if (isset($_GET['text'])){
        $text=$_GET['text'];
        preg_match_all('/\w+/', $text, $words);
        $words=$words[0];
        $upperWords = array_filter($words, function($word){ return strtoupper($word) == $word;});
        $upper = implode(",", $upperWords);
    }
?>

<form>
    <textarea rows="20" name="text"><?= $upper ?></textarea><br/>
    <input type="Submit" value="Extract"/>
</form>
<?php
        $text = 'Lorem ipsum dolor';
        echo $text;
        echo '<br> length: ' .strlen($text);
        $varGet = $_GET['badwords'];
        $censorship = str_replace($varGet, '***', $text);
        echo '<br>' .$censorship;
        echo '<br> length: ' .strlen($censorship);

?>
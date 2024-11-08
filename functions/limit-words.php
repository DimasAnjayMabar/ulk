<?php
    // Function to limit text to a certain number of words
    function limitWords($text, $wordLimit) {
        $words = explode(' ', $text);
        if (count($words) > $wordLimit) {
            $words = array_slice($words, 0, $wordLimit);
            return implode(' ', $words) . '...';
        }
        return $text;
    }
?>

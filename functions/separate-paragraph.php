<?php
function splitParagraphs($content) {
    // Split content by sentences
    $sentences = preg_split('/(?<=[.!?])\s+/', $content);

    // Initialize variables
    $paragraphs = [];
    $currentParagraph = [];
    $count = 0;

    // Loop through sentences and group them into paragraphs of 7 sentences each
    foreach ($sentences as $sentence) {
        $currentParagraph[] = $sentence;
        $count++;

        // If we reach 7 sentences, push the paragraph and start a new one
        if ($count == 3) {
            $paragraphs[] = implode(' ', $currentParagraph);
            $currentParagraph = [];
            $count = 0;
        }
    }

    // Add any remaining sentences as the last paragraph
    if (!empty($currentParagraph)) {
        $paragraphs[] = implode(' ', $currentParagraph);
    }

    // Return the paragraphs as a string
    return '<p class="paragraph-separator">' . implode('</p><p class="paragraph-separator">', $paragraphs) . '</p>';
}
?>

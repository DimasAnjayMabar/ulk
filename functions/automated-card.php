<?php
// Include the database connection file
include 'includes/connection.php';
try {
    // Query to fetch articles from the database
    $query = "SELECT * FROM article"; // Change this to your actual table and column names
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // Fetch all articles
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($articles) {
        foreach ($articles as $article) {
            // Set the article's ID, title, content, and picture
            $articleId = $article['id'];
            $title = $article['title'];
            $content = $article['content'];
            $picture = $article['picture']; // Ensure the picture path is correct

            // Limit the content length using the limitWords function
            $contentPreview = limitWords($content, 12);  // Limit to 12 words

            // Generate HTML for the card
            echo "
                <div class='col-lg-4 col-md-6'>
                    <div class='service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center' data-id='{$articleId}'>
                        <div>
                            <img src='{$picture}' alt='Service Icon' class='rounded card-image' style='width: 150px; height: 130px;'>
                        </div>
                        <h4 class='mb-3 card-title' style='color: #522e38 !important; margin-top: 5%;'>{$title}</h4>
                        <p class='m-0 card-content' style='color: #522e38 !important; font-weight: bold;'>{$contentPreview}</p>
                        <a class='btn btn-lg btn-primary rounded-pill custom-button' href='detail-article.php?id={$articleId}'>
                            <i class='bi bi-arrow-right text' style='color: #522e38 !important;'></i>
                        </a>
                    </div>
                </div>
            ";
        }
    } else {
        echo "No articles found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

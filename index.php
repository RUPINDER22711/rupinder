<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Library</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Movie Library</h1>
        <form action="save_movie.php" method="post">
            <input type="text" name="movie" placeholder="Movie Title">
            <input type="text" name="genre" placeholder="Genre">
            <input type="text" name="director" placeholder="Director">
            <button type="submit">Add Movie</button>
        </form>
        <ul id="movie-list">
            <?php
            // Include the file to get movies
            include 'get_movies.php';
            ?>
        </ul>
    </div>
</body>
</html>

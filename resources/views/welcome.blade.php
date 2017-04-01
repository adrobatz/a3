
<!DOCTYPE html>
<html>

<head>
    <title>Scrabble Word Score Calculator</title>
    <meta charset="utf-8">
<!--     <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<body>
    <h1>Scrabble Word Score Calculator</h1>
    <form method="get" action="index.php">
        <label for="word">Your Word:</label>
        <input type="text" name="word" id="word">
        <ul>
            <li><input type="radio" name="none" value="none">None</li>
            <li><input type="radio" name="double" value="double">Double Word Score</li>
            <li><input type="radio" name="triple" value="triple">Triple Word Score</li>
        </ul>
        <input type="checkbox" name="bingo">
        <label>Include 50 point "bingo"? (word that uses all 7 tiles)</label>

        <input type="submit" name="button">


    </form>
</body>

</html>
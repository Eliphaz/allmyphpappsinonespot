<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="music/css/styles.css">
</head>
<body>
    <h1>Some Quality Listens</h1>

    <?php
    $albums = [
        ["name" => "2015 forest hills drive", "artist" => "J. Cole", "link" => "https://music.youtube.com/channel/UC0ajkOzj8xE3Gs3LHCE243A"],
        ["name" => "The Off-Season", "artist" => "J. Cole", "link" => "https://music.youtube.com/channel/UC0ajkOzj8xE3Gs3LHCE243A"],
        ["name" => "Born Sinner", "artist" => "J. Cole", "link" => "https://music.youtube.com/channel/UC0ajkOzj8xE3Gs3LHCE243A"],
        ["name" => "KOD", "artist" => "J. Cole", "link" => "https://music.youtube.com/channel/UC0ajkOzj8xE3Gs3LHCE243A"],
        ["name" => "4 Your Eyez Only", "artist" => "J. Cole", "link" => "https://music.youtube.com/channel/UC0ajkOzj8xE3Gs3LHCE243A"],
        ["name" => "Good kid, m.A.A.d city", "artist" => "Kendrick Lamar", "link" => "https://music.youtube.com/channel/UCprAFmT0C6O4X0ToEXpeFTQ"],
        ["name" => "To Pimp a Butterfly", "artist" => "Kendrick Lamar", "link" => "https://music.youtube.com/channel/UCprAFmT0C6O4X0ToEXpeFTQ"],
        ["name" => "DAMN.", "artist" => "Kendrick Lamar", "link" => "https://music.youtube.com/channel/UCprAFmT0C6O4X0ToEXpeFTQ"],
        ["name" => "Section.80", "artist" => "Kendrick Lamar", "link" => "https://music.youtube.com/channel/UCprAFmT0C6O4X0ToEXpeFTQ"],
        ["name" => "Graduation", "artist" => "Kanye West", "link" => "https://music.youtube.com/channel/UCRY5dYsbIN5TylSbd7gVnZg"],
        ["name" => "The College Dropout", "artist" => "Kanye West", "link" => "https://music.youtube.com/channel/UCRY5dYsbIN5TylSbd7gVnZg"],
    ];

    shuffle($albums);
    ?>

    <table>
        <tr>
            <th>Album Name</th>
            <th>Artist</th>
        </tr>
        <?php
        foreach ($albums as $album) {
            echo "<tr><td><a href='{$album['link']}' target='_blank'>{$album['name']}</a></td><td>{$album['artist']}</td></tr>";
        }
        ?>
    </table>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrapper</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <main>
    <h1>Compare <span>Dstv</span> Packages</h1>
    <form action="scrap.php" method="post">
        <div class="url">
        <!-- <label for="site">Search</label> -->
        <input type='url' name ='site' id="site" placeholder="Enter scraping URL"><br>
        </div>
        <div class="btn">
        <input type='submit' name='Scrap' value="Search"><br>
        </div>
        </form>
    </main>
</body>
</html>
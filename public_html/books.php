<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/colours.css" rel="stylesheet" type="text/css" />
    <link href="css/mobile.css" rel="stylesheet" type="text/css" />
    <script src="components/header.js" type="text/javascript" defer></script>
    <script src="components/footer.js" type="text/javascript" defer></script>
    <title>David Wilkins | Author</title>
</head>

<body>
    <header-component></header-component>
    <main>
        <div class="sidespacer"></div>
        <div class="content">
            <div class="pagetitle">
                <h2>Books</h2>
            </div>
            <div class="contentblock">
                <p>
                    David Wilkins has published two edited editions of found memoirs:
                </p>
                <div class="contentblock internalblock">
                    <h4>
                        <a href="longest-walk.php">The Longest Walk Home</a>
                    </h4>
                    <p style="margin-bottom: auto;">
                        by Ray Bailey
                        <br>
                        <i>Quercus, 2024</i>
                    </p>
                </div>
                <div class="contentblock internalblock">
                    <h4>
                        <a href="schoolboy-servant.php">Schoolboy, Servant, GWR Apprentice</a>
                    </h4>
                    <p style="margin-bottom: auto;">
                        by Alfred Plumley
                        <br>
                        <i>History Press, 2017</i>
                    </p>
                </div>
            </div>
        </div>
        <div class="sidespacer"></div>
    </main>
    <div hidden="true">
        <?php include("./php/hitcounter.php"); ?>
    </div>
    <footer-component></footer-component>
</body>

</html>
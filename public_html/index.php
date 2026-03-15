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
                <h2>David Wilkins</h2>
                <h2>Author and Social Historian</h2>
            </div>
            <div class="contentblock" id="floatingimagecontainer">
                <div id="floatingimage">
                    <img src="images/Portrait Square Crop 400x400.jpg"
                        alt="A portrait photograph of the author from the waist up" />
                </div>
                <p>
                    David Wilkins has collected old diaries,
                    manuscripts, photo albums, collectons of letters
                    and other socio-historical ephemera for decades.
                    Among his ambitions after retiring from work
                    was to bring some of the personal stories he has discovered
                    into the public domain.
                </p>
                <p>
                    He published two edited editions of found memoirs:
                    <a href="schoolboy-servant.php">"Schoolboy, Servant, GWR Apprentice"</a>,
                    an account of boyhood in a changing world as the Industrial Revolution
                    steams into the Somerset countryside,
                    and <a href="longest-walk.php">"The Longest Walk Home"</a>,
                    the remarkable story of an escaped British prisoner-of-war
                    crossing France and Spain during the early Second World War.
                </p>

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
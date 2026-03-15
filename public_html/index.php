<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/colours.css" rel="stylesheet" type="text/css" />
    <link href="css/mobile.css" rel="stylesheet" type="text/css" />
    <script src="components/header.js" type="text/javascript" defer></script>
    <script src="components/footer.js" type="text/javascript" defer></script>
    <title>Charlie Wilkins | Full-Stack Engineer</title>
</head>

<body>
    <header-component></header-component>
    <main>
        <div class="sidespacer"></div>
        <div class="content">
            <div class="pagetitle">
                <h2>Charlie Wilkins</h2>
                <h2>Full-Stack Programmer</h2>
            </div>
            <div class="contentblock" id="floatingimagecontainer">
                <div id="floatingimage">
                    <img src="images/Portrait Square Crop 400x400.jpg"
                        alt="A portrait photograph of the author from the waist up" />
                </div>
                <p>
                    Hi, my name is Charlie Wilkins,
                    and welcome to my little corner of the Internet!
                    I am a full-stack engineer based in Germany,
                    currently working for TransnetBW.
                    I created this site as a place for my ramblings about programming,
                    my projects, and technology more generally.
                    I'm nostalgic for the days when the Web felt a lot bigger
                    and hugely influenced by the
                    <a href="https://indieweb.org/">IndieWeb movement</a>
                    and the people in it I know personally,
                    and maintain this website along these principles.
                </p>
                <p>
                    Ich spreche Englisch und Deutsch :)
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
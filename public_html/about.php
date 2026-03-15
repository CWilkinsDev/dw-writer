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
                <h2>About Me</h2>
            </div>
            <div class="contentblock">
                <p>
                    I honestly don't really remember a time that I wasn't obsessed with computers.
                    From exploring the Web with my dad as a young child,
                    to Minecraft and GMod with my mates as a teen,
                    and then on to my current profession as a programmer*,
                    felt like a pretty natural progression.
                </p>
                <p>
                    I first became interested in programming itself when I was able to take GSCE Computer Science at my
                    high school.
                    From there I studied a degree in CS at the University of Nottingham,
                    where as part of my course I worked for a year for Capital One as a backend developer and quality
                    engineer.

                </p>
                <p>
                    Graduating with a first-class degree in 2022,
                    I then moved to south Germany with my partner,
                    where I've been living and working ever since.
                    You'll find more about my career under the
                    <a href="work.php">Work</a>
                    section of this site.
                </p>
                <p>
                    When not at work or otherwise tinkering with some system,
                    you'll most likely find me in the kitchen,
                    where I cook, home-brew and (very occasionally) even bake.
                    I'm also a keen musician and a lover of science fiction.
                    As you read through this site,
                    expect recipes and recommendations mixed in with the tech-focused content.
                </p>
                <p>
                    And that's really all I have to say for now!
                    Do have a look around the site,
                    and do
                    <a href="contact.php">feel free to get in touch</a>
                    if you fancy a chat about anything you read here.
                </p>
                <p style="font-size: medium;">
                    * I use the word 'programmer' because,
                    as this website demonstrates,
                    I'm a bit old-fashioned at heart.
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
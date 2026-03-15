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
                <h2>My Work</h2>
            </div>
            <div class="contentblock">
                <p>
                    I am a full-stack software engineer with five years' experience.
                    Here you'll find summaries of the work I have done at my previous and current employers.
                </p>
                <div class="contentblock internalblock">
                    <h4>
                        <a href="work/transnetbw.php">TransnetBW</a>
                    </h4>
                    <p style="margin-bottom: auto;">
                        Software Engineering Specialist
                        <br>
                        <i>Jan 2025-Present</i>
                    </p>
                </div>
                <div class="contentblock internalblock">
                    <h4>
                        <a href="work/mimacom.php">Mimacom</a>
                    </h4>
                    <p style="margin-bottom: auto;">
                        Junior Software Engineer
                        <br>
                        <i>Apr 2023-Dec 2024</i>
                    </p>
                </div>
                <div class="contentblock internalblock">
                    <h4>
                        <a href="work/capitalone.php">Capital One</a>
                    </h4>
                    <p style="margin-bottom: auto;">
                        Software Engineer (Year in Industry)
                        <br>
                        <i>Sep 2020-Aug 2021</i>
                    </p>
                </div>
                <p>
                    Please contact me for further details or a copy of my CV.
                    <br />
                    Bitte kontaktieren Sie mich, um weitere Infos oder meinen Lebenslauf zu erhalten.
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
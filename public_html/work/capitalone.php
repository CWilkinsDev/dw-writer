<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/colours.css" rel="stylesheet" type="text/css" />
    <link href="../css/mobile.css" rel="stylesheet" type="text/css" />
    <script src="../components/header.js" type="text/javascript" defer></script>
    <script src="../components/footer.js" type="text/javascript" defer></script>
    <title>Charlie Wilkins | Full-Stack Engineer</title>
</head>

<body>
    <header-component></header-component>
    <main>
        <div class="sidespacer"></div>
        <div class="content">
            <div class="pagetitle">
                <h2><a href="../work.php">My Work</a>
                    &nbsp--> Capital One</h2>
            </div>
            <div class="contentblock">
                <p>
                    My first "real" job,
                    Capital One is where I worked for 12 months as part of my uni's Year in Industry programme.
                    Working in the Java backend space first as a software engineer and then a quality engineer,
                    I truly felt like a programmer for the first time, as I...
                </p>
                <ul>
                    <li>Joined a team developing REST-based cloud applications in Java to support a business
                        communications initiative valued at one million pounds.</li>
                    <li>Worked closely with other team members including quality engineers in a paired-programming,
                        Test-Driven Development approach.</li>
                    <li>Led an initiative to extend an existing service by connecting a NoSQL database.</li>
                    <li>Led multiple Agile ceremonies, completing session goals within allotted times and ensuring team
                        operations remained well-managed.</li>
                    <li>Successfully integrated multiple third-party organisations with Capital One software, and
                        documented process in writing for future use by team.
                    </li>
                    <li>Created extensive tests using JUnit, Cucumber and Gatling, integrated into a CI/CD framework to
                        bring effective software directly to customers.</li>
                </ul>
            </div>
        </div>
        <div class="sidespacer"></div>
    </main>
    <div hidden="true">
        <?php include("../php/hitcounter.php"); ?>
    </div>
    <footer-component></footer-component>
</body>

</html>
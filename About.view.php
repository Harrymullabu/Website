<!DOCTYPE html>
<html lang="en">
<?php

define('URL_ROOT', 'http://localhost:3000');
define('ABS_ROOT', $_SERVER['DOCUMENT_ROOT']);

include_once(ABS_ROOT . "/Website/src/Views/head.view.php");


$aboutMeText = "<p></p>
<p>Hi, I'm Harrison Segero, a passionate computer science enthusiast. One fun fact about me is I love Heinz Ketchap.</p>
<p>One fun fact about me is that i am ambidextral! I got into computer science because
    technology has always fascinated me. The power to create and innovate using code is incredible.</p>
        <p>I got into computer science because more job oportunities . The endless possibilities of creating and solving problems
     through coding always intrigued me. It's a field that combines logic, creativity, and innovation.</p>

    <p>Once I graduate, I aspire to grow more in computer science experience. I am excited about contributing to innovative projects and
         making a positive impact through technology.</p>
         <p>Also, i aspire to work in a dynamic tech environment where I can contribute to exciting
    projects and continue learning.</p>"
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <link rel="stylesheet" href="mystyle.css">
</head>

<body>

    <header>
        <h1>Harrison Segero</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="About.view.php">About Me</a>
        </nav>
    </header>
    
    <main>
        <section>
            <header>
                <h2>About Me</h2>
            </header>
            <article>
                <img src="Harry.jpg" alt="Harrison Segero" class="styled-image">
                <?php echo $aboutMeText ?>
            </article>
        </section>
    </main>

    <section>
        <h2>GitHub Repository</h2>
        <p>Link to my GitHub repo: <a href="https://github.com/Harrymullabu/Website.git">GitHub Repo</a></p>
    </section>

    <footer>
        <p>&copy; 2024 Harrison Segero</p>
    </footer>

</body>

</html>
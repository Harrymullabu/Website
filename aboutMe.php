<?php
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIROMENT'];
define('URL_ROOT',$config[$environment]['URL_ROOT']);
define('ABS_ROOT' ,$config[$environment]['ABS_ROOT']);

include_once(ABS_ROOT . "/Website/src/Views/head.view.php");
include_once(ABS_ROOT . "/Website/src/Views/header.view.php");

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
    <h>GitHub Repository</h>
</header>
<p>Link to my GitHub repo: <a href="https://github.com/Harrymullabu/Website.git">GitHub Repo</a></p>

    <footer>
        <p>&copy; 2024 Harrison Segero</p>
    </footer>

</body>

</html>

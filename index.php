<?php
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIROMENT'];
define('URL_ROOT',$config[$environment]['URL_ROOT']);
define('ABS_ROOT' ,$config[$environment]['ABS_ROOT']);

include_once(ABS_ROOT . "/src/Views/head.view.php");
include_once(ABS_ROOT . "/src/Views/header.view.php");
include_once(ABS_ROOT . "/src/Views/navigation.view.php");
   
$name = "Put Name Here!";
$data = array(
    "question" => "<h2>Why am I taking this class?</h2>",
    "answer" => "To help me in designing, creativity and becoming a full stuck developer."

)








?>





    
    <nav>
        <a href="index.php">Home</a>
        <a href="About.view.php">About Me</a>
    </nav>

    <section>
        <article>
            <h2></h2>
            <p><?php echo $data["question"]  ?></p>
            <p><?php echo $data["answer"]  ?></p>


            
            <h2>What do I want to take away from this class?</h2>
            <p>To be able to create a functional website. To learn more stuffs that i did not know .</p>
        </article>
    </section>

    
    <footer>
        <p>Find the source code on <a href="https://github.com/Harrymullabu/Website.git" target="_blank">GitHub</a></p>
    </footer>
</body>
</html>
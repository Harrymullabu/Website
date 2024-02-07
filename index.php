<?php
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIROMENT'];
define('URL_ROOT',$config[$environment]['URL_ROOT']);
define('ABS_ROOT' ,$config[$environment]['ABS_ROOT']);


$name = "Harrison Segero";
$data = array(
    "question" => "<h2>Why am I taking this class?</h2>",
    "answer" => "To help me in designing, creativity and becoming a full stuck developer.",
    "question1" => "<h2>What do I want to take away from this class?</h2>",
    "answer1" => "To be able to create a functional website. To learn more stuffs that i did not know ..",
);

include_once(ABS_ROOT . "/src/Views/head.view.php");
include_once(ABS_ROOT . "/src/Views/header.view.php");
include_once(ABS_ROOT . "/src/Views/navigation.view.php");




?>





<link rel="stylesheet" href="src/style.css">
    <section>
        <article>
            <h2></h2>
            <p><?php echo $data["question"]  ?></p>
            <p><?php echo $data["answer"]  ?></p>
            


            
            <p><?php echo $data["question1"]  ?></p>
            <p><?php echo $data["answer1"]  ?></p>
        </article>
    </section>

    
    <?php include_once(ABS_ROOT . "/src/Views/footer.view.php");?>

</body>
</html>
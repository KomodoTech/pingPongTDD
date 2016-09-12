<?php
    require_once(__DIR__ . "/../vendor/autoload.php");
    require_once(__DIR__ . "/../src/PingPongGenerator.php");
    require_once(__DIR__ . "/../tests/PingPongGeneratorTest.php");


    session_start();
    if (empty($_SESSION["user_max_number"])) {
        $_SESSION["user_max_number"] = 0;
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__ . "/../views"));

    /*=ROUTES=================================================================*/
    $app->get("/", function() use($app) {
        return $app["twig"]->render("ping_pong_form.html.twig");
    });

    $app->get("/view_ping_pong_results", function() use($app) {
        $ping_pong_instance = new PingPongGenerator();

        if (empty($_GET["user_max_number"])) {
            $_GET["user_max_number"] = 0;
        }

        $max_number = $_GET["user_max_number"];
        $ping_pong_array = $ping_pong_instance->generatePingPongArray($max_number);

        return $app["twig"]->render("ping_pong_results.html.twig", array("ping_pong_results" => $ping_pong_array));
    });


    /*TODO: make a static function in PingPongGeneratorTest that runs all tests and returns an array of test results*/
    $app->get("/view_ping_pong_tests" , function() use($app) {
        $_SESSION["test_results"] = PingPongGeneratorTest::runAllTests();

        if (empty($_SESSION["test_results"])) {
            return "NO TESTS";
        }
        else {
            return $app["twig"]->render("ping_pong_tests.html.twig", $_SESSION["test_results"]);
        }
    });

    return $app;
 ?>

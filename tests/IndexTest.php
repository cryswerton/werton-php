<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase{


    public function testIndexOutputsExpectedMessage(){

        ob_start();

        include 'public/index.php';

        $output = ob_get_clean();

        $message = 'Werton says hello!';

        $this->assertStringContainsString($message, $output);
    }

    public function testIndexShowsFrameworkVersion(){

        ob_start();

        include 'public/index.php';

        $output = ob_get_clean();

        $message = 'Version: 1.0.0';

        $this->assertStringContainsString($message, $output);
    }
}


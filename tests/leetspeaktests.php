<?php

    require_once "src/Leetspeak.php";

    class leetspeaktests extends PHPUnit_Framework_TestCase
    {
        function test_convert_e()
        {
            $test_leetspeak = new Leetspeak;
            $input = "Hell";
            $output = $test_leetspeak->convertSentence($input);
            $this->assertEquals("H3ll", $output);
        }

        function test_convert_o()
        {
            $test_leetspeak = new Leetspeak;
            $input = "Bob";
            $output = $test_leetspeak->convertSentence($input);
            $this->assertEquals("B0b", $output);
        }

        function test_convert_leading_i()
        {
            $test_leetspeak = new Leetspeak;
            $input = "India";
            $output = $test_leetspeak->convertSentence($input);
            $this->assertEquals("1ndia", $output);
        }

        function test_convert_nonleading_s()
        {
            $test_leetspeak = new Leetspeak;
            $input = "This";
            $output = $test_leetspeak->convertSentence($input);
            $this->assertEquals("Thiz", $output);
        }

        function test_convert_sentence()
        {
            $test_leetspeak = new Leetspeak;
            $input = "Hello hola this is India";
            $output = $test_leetspeak->convertFull($input);
            $this->assertEquals("H3ll0 h0la thiz iz 1ndia", $output);
        }

    }

?>

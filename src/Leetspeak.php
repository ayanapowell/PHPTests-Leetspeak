<?php
    class Leetspeak
    {
        function convertSentence($input)
        {
            $processing = str_replace("e","3",$input);
            $processing = str_replace("o","0",$processing);

            if ($processing[0] == "I") {
                $processing[0] = "1";
            }

            $processing_array = str_split($processing);

            for ($i = 1; $i < count($processing_array); $i++) {
                if ($processing_array[$i] == "s") {
                    $processing_array[$i] = "z";
                }
            }

            return implode($processing_array);
        }

        function convertFull($inputSentence)
        {
            $sentence_array = explode(" ", $inputSentence);
            $return_array = array();
            foreach ($sentence_array as $word) {
                array_push($return_array, $this->convertSentence($word));
            }
            return implode(" ", $return_array);
            // return $return_array;
        }
    }
?>

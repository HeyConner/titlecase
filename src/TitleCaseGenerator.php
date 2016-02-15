<?php

class TitleCaseGenerator
{
    function makeTitleCase($input_title)
    {
        $input_array_of_words = explode(" ", $input_title);
        $output_titlecased = array();
        $exceptions = array("to", "from", "for", "a", "and", "the", "of");

        $first_word = $input_array_of_words[0];
        array_push($output_titlecased, ucfirst($first_word));
        array_shift($input_array_of_words);
        foreach($input_array_of_words as $word)
        {
            if (in_array($word, $exceptions))
            {
                array_push($output_titlecased, $word);
            }
            else
            {
                $word = ucfirst($word);
                array_push($output_titlecased, $word);
            }
        }
        return implode(" ", $output_titlecased);
    }
}
?>

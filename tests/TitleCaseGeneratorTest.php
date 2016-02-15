<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowolf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowolf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowolf begins";

            //Act$
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowolf Begins", $result);
        }

        function test_makeTitleCase_ignoreDesignated()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowolf from brighton beach";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowolf from Brighton Beach", $result);
        }

        function test_makeTitleCase_capsDesignatedIfFirst()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the lord of the rings";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Lord of the Rings", $result);
        }

        function test_makeTitleCase_handleNonLetters() {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the 57 beowolf alternative endings!!";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The 57 Beowolf Alternative Endings!!", $result);
        }

        function test_makeTitleCase_allCaps(){
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BEOWOLF ON THE ROCKS";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowolf On the Rocks", $result);
        }
        function test_makeTitleCase_mixedCaps() {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BeoWolf aNd mE";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowolf and Me", $result);
        }
    }
?>

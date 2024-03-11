<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Questions</h1>
    <form action="" method="post">
        <h3>Who is the author of the book "To Kill a Mockingbird"?</h3>
        <input type="radio" name="bookAuthor" id="question1_ans1" value="Harper Lee">
        <label for="question1_ans1">Harper Lee</label>
        <br>
        <input type="radio" name="bookAuthor" id="question1_ans2" value="J.K. Rowling">
        <label for="question1_ans2">J.K. Rowling</label>
        <br>
        <input type="radio" name="bookAuthor" id="question1_ans3" value="George Orwell">
        <label for="question1_ans3">George Orwell</label>
        <br>
        <input type="radio" name="bookAuthor" id="question1_ans4" value="F. Scott Fitzgerald">
        <label for="question1_ans4">F. Scott Fitzgerald</label>

        <h3>What is the capital of Japan?</h3>
        <input type="radio" name="capitalOfJapan" id="question2_ans1" value="Seoul">
        <label for="question2_ans1">Seoul</label>
        <br>
        <input type="radio" name="capitalOfJapan" id="question2_ans2" value="Beijing">
        <label for="question2_ans2">Beijing</label>
        <br>
        <input type="radio" name="capitalOfJapan" id="question2_ans3" value="Tokyo">
        <label for="question2_ans3">Tokyo</label>
        <br>
        <input type="radio" name="capitalOfJapan" id="question2_ans4" value="Bangkok">
        <label for="question2_ans4">Bangkok</label>

        <h3>Which planet is known as the Red Planet?</h3>
        <input type="radio" name="redPlanet" id="question3_ans1" value="Earth">
        <label for="question3_ans1">Earth</label>
        <br>
        <input type="radio" name="redPlanet" id="question3_ans2" value="Mars">
        <label for="question3_ans2">Mars</label>
        <br>
        <input type="radio" name="redPlanet" id="question3_ans3" value="Jupiter">
        <label for="question3_ans3">Jupiter</label>
        <br>
        <input type="radio" name="redPlanet" id="question3_ans4" value="Saturn">
        <label for="question3_ans4">Saturn</label>

        <h3>In which year did the Titanic sink?</h3>
        <input type="text" name="titanicYear">
        <br><br>

        <h3>What is the currency of Australia?</h3>
        <input type="text" name="australiaCurrency">
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    $correctAnswers = array(
        "bookAuthor" => "Harper Lee",
        "capitalOfJapan" => "Tokyo",
        "redPlanet" => "Mars",
    );

    $numCorrect = 0;

    if ($_POST) {
        foreach ($correctAnswers as $question => $correctAnswer) {
            if (isset($_POST[$question]) && $_POST[$question] === $correctAnswer) {
                $numCorrect++;
            }
        }

        if (isset($_POST["titanicYear"]) && $_POST["titanicYear"] === "1912") {
            $numCorrect++;
        }

        if (isset($_POST["australiaCurrency"]) && $_POST["australiaCurrency"] === "Australian Dollar") {
            $numCorrect++;
        }

        echo "You have $numCorrect out of 5 questions";
    }
    ?>
</body>
</html>

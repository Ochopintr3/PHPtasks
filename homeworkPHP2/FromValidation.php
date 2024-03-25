<?php
    $nameErr = $surnameErr = $emailErr = $genderErr = $addressErr = $phoneErr = "";
    $name = $surname = $email = $website = $comment = $gender = $address = $phone = "";

    if ($_POST) {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } elseif (strlen($_POST["name"]) < 5 || strlen($_POST["name"]) > 12) {
            $nameErr = "Name must be between 5 and 12 characters";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["surname"])) {
            $surnameErr = "Surname is required";
        } elseif (strlen($_POST["surname"]) < 5 || strlen($_POST["surname"]) > 12) {
            $surnameErr = "Surname must be between 5 and 12 characters";
        } else {
            $surname = test_input($_POST["surname"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "Phone number is required";
        } else {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^[0-9]{10}$/", $phone)) {
                $phoneErr = "Invalid phone number format";
            }
        }

        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<form method="post" action="">
    <h1>PHP Form Validation Example</h1>
    <p class="red">* required fields</p>
    <div class="name">
        <label for="name">Name:</label>
        <input type="text" name="name">
        <label class="red" for="name">* <?php echo $nameErr;?></label>
    </div>
    <br>
    <div class="surname">
        <label for="surname">Surname:</label>
        <input type="text" name="surname">
        <label class="red" for="surname">* <?php echo $surnameErr;?></label>
    </div>
    <br>
    <div>
        <label for="email">E-mail:</label>
        <input type="text" name="email">
        <label class="red" for="email">* <?php echo $emailErr;?></label>
    </div>
    <br>
    <div>
        <label for="address">Address:</label>
        <input type="text" name="address">
        <label class="red" for="address">* <?php echo $addressErr;?></label>
    </div>
    <br>
    <div>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone">
        <label class="red" for="phone">* <?php echo $phoneErr;?></label>
    </div>
    <br>
    <div>
        <label for="website">Website:</label>
        <input type="text" name="website">
    </div>
    <br>
    <div>
        <label for="comment">Comment:</label>
        <textarea name="comment" cols="30" rows="10"></textarea>
    </div>
    <br>
    <div>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="other"> Other
        <label class="red">* <?php echo $genderErr;?></label>
    </div>
    <br>
    <button type="submit">Submit</button>
</form>

<?php
    if ($_POST && empty($nameErr) && empty($surnameErr) && empty($emailErr) && empty($genderErr) && empty($addressErr) && empty($phoneErr)) {
        echo "<h1>Your input:</h1>";
        echo "Name: $name <br>";
        echo "Surname: $surname <br>";
        echo "Email: $email <br>";
        echo "Gender: $gender <br>";
        echo "Address: $address <br>";
        echo "Phone Number: $phone <br>";

        if (!empty($website)) {
            echo "Website: $website <br>";
        }
        if (!empty($comment)) {
            echo "Comment: $comment <br>";
        }
    }
?>

<style>
    .name, .surname {
        display: flex;
    }
    form {
        border: 1px solid black;
        width: 500px;
        padding-left: 30px;
    }
    .red {
        color: red;
    }
</style>

<?php
$title = 'Task 4';
include 'header.php'; ?>

    <div class="body container">
        <div class="home-banner-container">
            <img src="images/hamk-banner.avif" alt="banner" draggable="false">
            <div class="article">
                <div class="form-container">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        Name: <input type="text" name="name" required> <br><br>
                        Age: <input type="number" name="age" required> <br><br>
                        <button>Submit</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = $_POST["name"];
                        $age = $_POST["age"];

                        if ($age >= 18) {
                            echo $name . ", you are eligible to vote.";
                        } else {
                            echo $name . ", you are ineligible to vote";
                        }
                    }
                    ?>

                    <?php
                    $current_month = date('n');
                    $month_name = date('F');

                    switch ($current_month) {
                        case 8:
                            echo "It's August, so it's still holiday.";
                            break;
                        default:
                            echo "<br><br>Not August, this is $month_name so I don't have any holidays.";
                    }
                    ?>
                    <form method="post" action="">
                        Enter your number:<input type="number" name="number" id="number1">
                        <button>Submit</button>
                    </form>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $number1 = $_POST["number"];

                        echo "Multiplication table of " . $number1 . ":";
                        for ($i = 1; $i <= 10; $i++) {
                            $product = $number1 * $i;
                            echo "<li>$number1 x $i = $product</li>";
                        }
                    }
                    ?>

                    <form method="post" action="">
                        Enter your number:<input type="number" name="count" id="number2">
                        <button>Submit</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $n = $_POST["count"];

                        echo "<p>Numbers from 1 to $n:</p>";
                        $i = 1;
                        while ($i <= $n) {
                            echo "<li>$i</li>";
                            $i++;
                        }
                    }
                    ?>
                    <?php
                    $myarray = array("HTML", "CSS", "PHP", "JavaScript");
                    echo "Module 3 contents:<br>";
                    foreach ($myarray as $element) {
                        echo "<li>$element</li>";
                    }
                    ?>

                </div>
            </div>
        </div>

<?php include 'footer.php'; ?>
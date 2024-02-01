<?php
$title = 'Task 3';
include 'header.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<body>
    <div class="body-container">
        <div class="home-banner-container">
            <img src="images/hamk-banner.avif" alt="banner" draggable="false">
        </div>
        <div class="article">
            <div class="form-container">
                <form action="process.php" method="POST">

                    First Name: <input type="fname" name="fnimi" required> <br><br>
                    Last Name: <input type="lname" name="lnimi" required> <br><br>
                    <button>Submit</button>
                </form>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Walid</td>
                        <td>Mazumder</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Viktor</td>
                        <td>Trilar</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Ania</td>
                        <td>Barcikowska</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Janika</td>
                        <td>Salminen</td>
                    </tr>
                </tbody>
            </table>
            <?php
            echo "<br>";
            $str1 = "Hello";
            $str2 = "World";

            echo strlen($str1 . $str2);
            echo "<br><br>";

            $num1 = 298;
            $num2 = 234;
            $num3 = 46;

            echo ($num1 + $num2 + $num3);

            echo "<br><br>";

            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            echo "Your browser: " . $user_agent;
            ?>
        </div>
    </div>
</body>


<?php include 'footer.php'; ?>
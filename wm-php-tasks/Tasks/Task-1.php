<?php
$title = 'Task 1';
include 'header.php'; ?>

<body>
    <div class="body container">
        <div class="home-banner-container">
            <img src="images/hamk-banner.avif" alt="banner" draggable="false">
            <div class="article">
                <h3>3.1 Write PHP code to output the following message:
                    Hello World! My name is "Walid"
                    <h3>

                        <?php

                        echo "Hello world! My name is \"David\"";

                        ?>

                        <h3>3.2 Create a PHP variable named $title and assign it
                            the value "PHP is interesting."
                            Then, use this variable as content within an (heading 4) element
                            <h3>

                                <?php

                                $title = "PHP is interesting.";
                                echo "<h4>$title<h4>";

                                ?>

                                <h3>3.3 Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5.
                                    These variables represent the grades of three students in the course.
                                    To display this information, create an HTML table within your PHP code.
                                    The table should be structured with columns for
                                    Serial Number (S.n.), Name, and Grade, and it should look like this:
                                    <h3>

                                        <?php

                                        $g1 = 5;
                                        $g2 = 4;
                                        $g3 = 5;

                                        ?>

                                        <table>
                                            <tr>
                                                <th>S.n.</th>
                                                <th>Name</th>
                                                <th>Grade</th>
                                            <tr>
                                                <td>1</td>
                                                <td>John</td>
                                                <td>
                                                    <?php echo $g1 ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Alice</td>
                                                <td>
                                                    <?php echo $g2 ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Bob</td>
                                                <td>
                                                    <?php echo $g3 ?>
                                                </td>
                                            </tr>
                                        </table>

                                        <h3>Take a screenshot that confirms your development environment
                                            setup and include it as an image in the "ex1.php" file.
                                        </h3>
                                        <div class="ss">
                                            <img src="images/docker-ss.png" alt="web development environment">
                                        </div>
                                        <h3>Commit all the changes you've made and push them
                                            to your GitHub repository to complete the task.
                                        </h3>

                                        <style>
                                            .ss img {
                                                width: 100%;
                                                height: 100%;
                                                object-fit: cover;
                                                object-position: top;
                                                display: block;
                                            }
                                        </style>
            </div>
        </div>
</body>

</html>

<?php include 'footer.php'; ?>
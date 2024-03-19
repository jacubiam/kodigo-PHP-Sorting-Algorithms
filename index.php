<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h1>Bubble Sort Example</h1>
        <?php
        include("./bubble.php");

        $arr = [-15, 34, 22, -1, 22, 11, 90];

        echo "Original Array: " . implode(", ", $arr);
        echo "<br/><br/>";

        $sortedArray = bubbleSort($arr);
        echo "Sorted array: " . implode(", ", $sortedArray);
        ?>
    </section>
    <section>
        <h1>Merge Sort Example</h1>
        <?php
        include("./merge.php");

        $words = ["Zhine", "Guillermo", "Adan", "Raton", "Shita", "Diego", "Jova"];
        echo "Original Array: " . implode(", ", $words);

        mergeSort($words);
        echo "<br/><br/>";

        echo "Sorted Array: " . implode(", ", $words);
        ?>
    </section>
    <section>
        <h1>Insertion Sort Example</h1>
        <?php
        include("./insertion.php");

        $words = ["Zhine", "Guillermo", "Adan", "Raton", "Shita", "Diego", "Jova"];
        echo "Original Array: " . implode(", ", $words);
        echo "<br/><br/>";

        echo "Sorted Array: " . implode(", ", insertion_sort($words));
        ?>
    </section>

</body>

</html>
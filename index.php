<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function printArrayInBatches(array $records, int $batchSize = 5): void {
            $totalRecords = count($records);

            for ($i = 0; $i < $totalRecords; $i++) {
                // Print the index and the corresponding value
                echo "Index: $i, Value: {$records[$i]}" . PHP_EOL;

                // Check if we have completed a batch of $batchSize items
                if (($i + 1) % $batchSize == 0) {
                    echo "---- End of Batch ----" . PHP_EOL;
                }
            }
        }

        
        $records = range(1, 20);  // Array with 20 records
        printArrayInBatches($records);
        ?>
    </body>
</html>

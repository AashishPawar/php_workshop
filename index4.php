<?php
$students = [
    "Amit" => 85,
    "Neha" => 92,
    "Rahul" => 78,
    "Sneha" => 88,
    "Vikas" => 95
];

// Total and Average
$total = 0;
foreach ($students as $marks) {
    $total += $marks;
}
$average = $total / count($students);

// Highest and Lowest
$highestName = "";
$lowestName = "";
$highestMarks = -1;
$lowestMarks = PHP_INT_MAX;

foreach ($students as $name => $marks) {
    if ($marks > $highestMarks) {
        $highestMarks = $marks;
        $highestName = $name;
    }
    if ($marks < $lowestMarks) {
        $lowestMarks = $marks;
        $lowestName = $name;
    }
}

// Custom sorting (descending) without built-in sort
$sorted = $students;
foreach ($sorted as $name1 => $marks1) {
    foreach ($sorted as $name2 => $marks2) {
        if ($marks1 > $marks2) {
            // swap
            $temp = $sorted[$name1];
            $sorted[$name1] = $sorted[$name2];
            $sorted[$name2] = $temp;
        }
    }
}

// Output
echo "Total Marks: $total <br>";
echo "Average Marks: $average <br>";
echo "Highest Scorer: $highestName ($highestMarks) <br>";
echo "Lowest Scorer: $lowestName ($lowestMarks) <br>";

echo "<br>Sorted Marks (Descending):<br>";
foreach ($sorted as $name => $marks) {
    echo "$name => $marks <br>";
}
?>



<?php
$products = [];

// Add product
function addProduct(&$products, $id, $name, $price, $quantity) {
    if (isset($products[$id])) {
        echo "Product ID already exists!<br>";
        return;
    }
    $products[$id] = [
        "name" => $name,
        "price" => $price,
        "quantity" => $quantity
    ];
}

// Update price
function updatePrice(&$products, $id, $newPrice) {
    if (isset($products[$id])) {
        $products[$id]["price"] = $newPrice;
    } else {
        echo "Product not found!<br>";
    }
}

// Delete product
function deleteProduct(&$products, $id) {
    if (isset($products[$id])) {
        unset($products[$id]);
    } else {
        echo "Product not found!<br>";
    }
}

// Display products
function displayProducts($products) {
    foreach ($products as $id => $product) {
        echo "ID: $id, Name: {$product['name']}, Price: {$product['price']}, Quantity: {$product['quantity']}<br>";
    }
}

// Testing
addProduct($products, 1, "Laptop", 50000, 10);
addProduct($products, 2, "Mouse", 500, 50);
addProduct($products, 1, "Keyboard", 1000, 20); // duplicate

updatePrice($products, 2, 600);
deleteProduct($products, 1);

echo "<br>Product List:<br>";
displayProducts($products);
?>



<?php
function wordFrequency($sentence) {
    // Remove punctuation and convert to lowercase
    $sentence = strtolower($sentence);
    $sentence = preg_replace("/[^\w\s]/", "", $sentence);

    $words = explode(" ", $sentence);
    $freq = [];

    foreach ($words as $word) {
        if ($word == "") continue;

        if (isset($freq[$word])) {
            $freq[$word]++;
        } else {
            $freq[$word] = 1;
        }
    }

    // Custom sorting (descending by frequency)
    foreach ($freq as $w1 => $c1) {
        foreach ($freq as $w2 => $c2) {
            if ($c1 > $c2) {
                $temp = $freq[$w1];
                $freq[$w1] = $freq[$w2];
                $freq[$w2] = $temp;
            }
        }
    }

    // Output
    foreach ($freq as $word => $count) {
        echo "$word => $count <br>";
    }
}

// Test
wordFrequency("Hello world! Hello PHP. PHP is great, and hello again.");
?>



<?php
function customFilter($array, $condition, $value = null) {
    $result = [];

    foreach ($array as $num) {
        if ($condition == "even" && $num % 2 == 0) {
            $result[] = $num;
        }
        elseif ($condition == "greater" && $num > $value) {
            $result[] = $num;
        }
    }

    return $result;
}

// Test data
$numbers = [1, 2, 3, 4, 5, 10, 15, 20];

// Even numbers
$evenNumbers = customFilter($numbers, "even");

// Greater than 5
$greaterNumbers = customFilter($numbers, "greater", 5);

// Output
echo "Even Numbers: ";
print_r($evenNumbers);

echo "<br>Numbers > 5: ";
print_r($greaterNumbers);
?>  
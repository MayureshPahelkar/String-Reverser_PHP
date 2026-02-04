<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Reverser</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f2f6;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 380px;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #2f3640;
        }

        label {
            display: block;
            text-align: left;
            font-weight: bold;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #40739e;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #273c75;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background: #ecf0f1;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            color: #2f3640;
        }

        .error {
            color: #c23616;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>String Reverser</h2>

    <form method="POST">
        <label>Enter a String</label>
        <input type="text" name="text" placeholder="Enter text here" required>

        <button type="submit">Reverse String</button>
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $text = $_POST['text'];

            if (!empty($text)) {
                $reversed = strrev($text);
                echo "Reversed String: $reversed";
            } else {
                echo "<span class='error'>Please enter a string!</span>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>

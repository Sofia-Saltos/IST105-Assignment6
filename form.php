<!DOCTYPE html>
<html>
<head>
    <title>User Input Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe4e1;
            color: #000;
            text-align: center;
            padding: 50px;
        }
        form {
            display: inline-block;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color:rgb(214, 93, 153);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #ff1493;
        }
    </style>
</head>
<body>
    <h2>User Input Form</h2>
    <form method="GET" action="process.php">
        <label for="a">Number A:</label>
        <input type="number" id="a" name="a"><br>
        <label for="b">Number B:</label>
        <input type="number" id="b" name="b"><br>
        <label for="c">Number C:</label>
        <input type="number" id="c" name="c"><br>
        <label for="d">Number D:</label>
        <input type="number" id="d" name="d"><br>
        <label for="e">Number E:</label>
        <input type="number" id="e" name="e"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

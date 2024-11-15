<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ob-havo ma'lumotlarini olish</title>
    <style>
        body {
            background-image: url("https://i.ytimg.com/vi/jRiortdMAU0/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGB8gNyh_MA8=&amp;rs=AOn4CLALfsqogHewRSp_GuBAk8hT6uA-EQ");
        }
        .h1 {
            border-radius: 20px;

            border: 1px solid black;
            background-color: #a8e9ff;

        }
        .h1 h1 {
            text-align: center;
            margin: 30px;
            font-family: Arial;
            /*width: 300px;*/
        }
        .input {
            border-radius: 20px;

            background-color: #bff75e;
            border: 1px solid black;
            height: 80px;
            width: 100%;
            text-align: center;
        }
        .input input{
            margin: 10px;
            text-align: center;
            height: 50px;
            width: 400px;
        }

        .button {
            border-radius: 20px;
            background-color: #bff75e;
            border: 1px solid black;
            height: 80px;
            width: 100%;
            text-align: center;
        }
        .button input{
            margin: 10px;
            text-align: center;
            height: 50px;
            width: 400px;
        }
        .h22{
            color: #fff;
        }
        .malumot {
            border-radius: 20px;
            height: 200px;
            border: 1px solid black;
            background-color: steelblue;
        }
        .malumot h2 {
            text-align: center;
            font-family: "Arial";
            color: black;
        }
        .malumot h5 {
            text-align: center;
            font-family: "Arial";
            font-size: large;
            color: black;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="h1">
        <h1>Shaharni tanlang:</h1>

    </div>
    <form action="Weather.php" method="POST">
        <div class="input">
            <input type="text" id="city" name="city" placeholder="Shahar nomini kiriting" required>

        </div>
        <br><br>
        <div class="button">
            <input type="submit" value="Ob-havo ma'lumotlarini olish">

        </div>
    </form>
</div>
</body>
</html>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $city = htmlspecialchars($_POST['city']);

    $apiKey = "27255ec8e0734575cbaf6d8c7136afcd";

    $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric&lang=uz";


    $weatherData = file_get_contents($apiUrl);
    if ($weatherData === FALSE) {
        echo "Ob-havo ma'lumotlarini olishda xatolik yuz berdi.";
        exit();
    }


    $weatherArray = json_decode($weatherData, true);


    if ($weatherArray['cod'] == 200) {
        echo "<div class='malumot'>";
        echo "<h2>Shahar: " . $weatherArray['name'] . "</h2>";
        echo "<h5>Harorat: " . $weatherArray['main']['temp'] . '°C' . "</h5>" ;"<br>";
        echo "<h5>Shamol tezligi: " . $weatherArray['wind']['speed'] . 'm/s' . "</h5>" ;"<br>";
        echo "</div >";
    } else {
        echo "Ob-havo ma'lumotlarini olishda xatolik: " . $weatherArray['message'];
    }
}





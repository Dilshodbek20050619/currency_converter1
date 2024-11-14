<form method="GET" action="weather.php">
    <label for="city">Shahar nomini kiriting:</label>
    <input type="text" id="city" name="city" required>
    <button type="submit">Qidirish</button>
</form>



<?php
$apiKey = "27255ec8e0734575cbaf6d8c7136afcd";

if (isset($_GET['city'])) {
    $city = $_GET['city'];
} else {
    echo "<p>Shahar nomini kiriting.</p>";
    exit();
}
$weather_API_URL = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey";


$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $weather_API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);


$response = curl_exec($ch);


if (curl_errno($ch)) {
    echo 'cURL xatosi: ' . curl_error($ch);
    exit();
}

curl_close($ch);

$data = json_decode($response, true);
if ($data['cod'] == 200) {

    $city = htmlspecialchars($data['name']);
    $country = htmlspecialchars($data['sys']['country']);
    $temperature = $data['main']['temp'] - 273.15;
    $weatherDescription = htmlspecialchars($data['weather'][0]['description']);
    $humidity = $data['main']['humidity'];
    $windSpeed = $data['wind']['speed'];

    echo "<h2>$city shahri uchun ob-havo ma'lumotlari</h2>";
    echo "<p><strong>Manzil:</strong> $city, $country</p>";
    echo "<p><strong>Harorat:</strong> " . round($temperature, 2) . "°C</p>";
    echo "<p><strong>Havo holati:</strong> $weatherDescription</p>";
    echo "<p><strong>Namlik:</strong> $humidity%</p>";
    echo "<p><strong>Shamol tezligi:</strong> $windSpeed m/s</p>";
} else {
    echo "<p>Xato: '$city' shahri uchun ob-havo ma'lumotlarini olishda xato yuz berdi. Shahar nomini yoki API kalitini tekshirib ko'ring.</p>";
}

?>


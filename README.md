#Project name
-Valyutalarni ayirboshlash

# Valyuta Konvertatsiyasi(ayirboshlash) API va Ob-Havo malumotlari
.API=https://cbu.uz/uz/arkhiv-kursov-valyut/json/
Weather_API=https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric&lang=uz
Bu loyiha foydalanuvchilarga turli valyutalar o'rtasida miqdorni konvertatsiya(ayirboshlash) qilish imkonini beradi. Foydalanuvchi kiritgan miqdor va tanlangan valyuta asosida PHP yordamida hisob-kitoblar amalga oshiriladiva
siz hohlagan valyuta kursiga ayirboshlashni beradi.
Ob havo malumotlaridan foydalanish uchun avval shahar nomi kiritiladi va <obhavo malumotlarini olish > tugmasi bosiladi shundan sun malumotlar chiqib keladi ,agar shahsar nomi kiritilmasa hatolik chiqadi 

## Foydalanuvchi Talablari
- PHP 7.0 yoki undan yuqori versiyasi
- Web server (masalan, Apache va Nginx yoki XAAMMP)
- Internetga ulangan kompyuter (valyuta kurslarini yangilash uchun)
## Usage
Ilovadan foydalanishda siz birinchi miqdorni kiritasiz,sung qaysi valyutadaligini kiritasiz,keyin qaysi valyutaga ayirboshlashni kiritasiz,va ohirida Convert tugmasini bosamiz,va qarabsizki sizga malumotlARNI CHIQARIB BERADI,
shahar nomi kiritiladi va shahardagi haroratlar chiqib keladi
## Technologies Used
Biz bunda milliy bankning API dan foydalanilgan ,undagi valyutalar haqida json fayili bilan uqib olinadi,va bunda Bootstrap dan ham foydalanib utilgan yana HTML VA css dar ham foydalanilgan,
Biz OPEN\WEATHERMAP dagi API dan foydalanilgan bunda shahardagi barcha malumotlarni olib keadi.
## Authors
  - Erolov Dilshodbek


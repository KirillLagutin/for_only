<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Выбор свободного подходящего по категории авто для определённого сотрудника

Дополнительные условия:
- каждая модель автомобиля имеет определенную категорию комфорта (первая, вторая, третья... );
- для определенной должности сотрудников доступны только автомобили определенной категории комфорта (одной или нескольких категорий);
- за каждым автомобилем закреплён свой водитель.
1. Написал миграции для создания необходимого количества таблиц в базе данных, установил связи между ними;
2. Реализовал API метод получения списка доступных текущему пользователю, пользователя выбираю по кнопке

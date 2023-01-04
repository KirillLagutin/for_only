<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Тестовое для ONLY.
В компании предусмотрена возможность выбора служебного автомобиля для служебной поездки из не занятых другими сотрудниками. В административной части корпоративного сайта необходимо будет размещать актуальную информацию о доступных для конкретного сотрудника автомобилях на запланированное время поездки.
Дополнительные условия:
- каждая модель автомобиля имеет определенную категорию комфорта (первая, вторая, третья... );
- для определенной должности сотрудников доступны только автомобили определенной категории комфорта (одной или нескольких категорий);
- за каждым автомобилем закреплён свой водитель.
1. Нужно написать миграции для создания необходимого количества таблиц в базе данных, установить связи между ними;
2. Реализовать API метод получения списка доступных текущему пользователю на запланированное время автомобилей с возможностью фильтрации по модели автомобиля, по категории комфорта;
Если опыта на Laravel нет, то создать таблицы SQL-запросами в базе данных, и также реализовать API метод получения списка доступных автомобилей.

Если в заданиях не хватает каких-то условий, принимать их приближенными к реальности.

Ответ:
1. Написал миграции, установил связи.
2. Реализовал API в контроллере и часть во view, текущего пользователя выбираю по кнопке. Запланированное время и фильтрацию не стал реализовывать.

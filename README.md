<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# init

- .env.exampleをコピーして、.envファイルを作成
- brew upgrede
- (version指定があれば)brew install php@8.1
- (version指定があれば)brew link --overwrite --force php@8.1
- composer clear-cache
- composer self-update
- composer install
- php artisan key:generate
- php artisan migrate

# docker

- docker compose rm -s -f -v
- docker compose up

# 起動

- dockerが起動していることを確認
- php artisan serve
- http://127.0.0.1:8000

## MySQLコンテナ内での実行

- docker ps
    - laravel-user-sample-db-1のような名前を探す
- docker exec -it <上記で探した名前> bash
- mysql -h127.0.0.1 -uroot -ppassword
- SHOW DATABASES;
- exit
- exit

# マイグレーション

## 実行履歴の確認

- php artisan tinker
- DB::table('migrations')->get();

## ロールバック(全て)

- php artisan migrate:reset

## ロールバック(最新のみ)

- php artisan migrate:rollback

# Front
https://github.com/tak001/next-user-role-sample
# tech-app
POSSEのカリキュラムサポートを目的にアプリ開発

いつも通りgit cloneをしたらevent.posse-ap.comディレクトリで以下のコマンドを実行してください。１行１行実行してね。

```console
docker-compose build --no-cache
docker-compose up -d
docker-compose exec phpfpm bash

composer install
php artisan migrate
php artisan db:seed
```

srcディレクトリで npm run dev を実行した後にlocalhostにアクセスすると表示されます

control + D で抜けられます。

これらを全てした上でlocalhostにいく
chromeのリンク書くところにlocalhostって入れてもらえれば大丈夫です！

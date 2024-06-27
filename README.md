# Laravel 11 開放食物成份組織

引入 openfoodfacts 的 openfoodfacts-laravel 套件來擴增取得開放食物成份組織資料，讓大家對於自己所食用過的食品更加了解，並在下一次選購時作為參考指標，如此不但能越來越能掌握那些常常讓人一頭霧水的化學添加物，也能將自己國家的食品與其他國家的食品做一個交流比較。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/open-food-fact` 來進行開放食物成份組織資料取得。

----

## 畫面截圖
![](https://i.imgur.com/DYJAH00.png)
> 獲取有關成分、食物添加劑和營養成分的資料

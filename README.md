ActiveRecord History Widget
===========================
ActiveRecord History Widget

This widget use extension [nhkey/yii2-activerecord-history](https://github.com/nhkey/yii2-activerecord-history)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ignatenkovnikita/yii2-activerecord-history-widget:dev-master
```

or add

```
"ignatenkovnikita/yii2-activerecord-history-widget": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \ignatenkovnikita\arh\ActiveRecordHistoryWidget::widget(['model' => $model]); ?>
```

And model must implement interface ModelHistoryInterface

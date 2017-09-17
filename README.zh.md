thank-you-stars
====

为你的项目依赖点赞！

## 安装

1. 在[Releases](https://github.com/oraoto/thank-you-stars/releases)下载`thank-you-stars.phar`，或者克隆这个仓库：

    ~~~
    $ git clone https://github.com/orato/thank-you-stars.git
    $ cd thank-you-stars
    $ composer install --no-dev
    ~~~

2. 保存Github个人Access Token

    1. 打开 https://github.com/settings/tokens 点击"Generate new token"
    2. 输入描述, 选择"public_repo"，然后点击"Generate token"

    3. 复制Token到`~/.thank-you-stars.json`：

        ~~~
        {
            "token": "YOUR_TOKEN"
        }
        ~~~

## 使用

如果你克隆了这个仓库：

~~~
$ php index.php path/to/project/root
~~~

如果你下载了`thank-you-stars.phar`：

~~~
$ php thank-you-stars.phar path/to/project/root
Starred! https://github.com/laravel/framework
Starred! https://github.com/nrk/predis
Starred! https://github.com/johnlui/AliyunOSS
Starred! https://github.com/Maatwebsite/Laravel-Excel
Starred! https://github.com/barryvdh/laravel-cors
Starred! https://github.com/aws/aws-sdk-php
Starred! https://github.com/pda/pheanstalk
Starred! https://github.com/iron-io/iron_mq_php
Starred! https://github.com/tymondesigns/jwt-auth
Starred! https://github.com/mockery/mockery
Starred! https://github.com/symfony/css-selector
Starred! https://github.com/symfony/dom-crawler
~~~

### License

This project is released under the BSD 3-clause license.
For more details, see [LICENSE](./LICENSE) file.

### Acknowledgement

This tool is greatly inspired by
[teppeis's JavaScript implementation](https://github.com/teppeis/thank-you-stars) and [y-taka-23's Haskell implementation](https://github.com/y-taka-23/thank-you-stars)

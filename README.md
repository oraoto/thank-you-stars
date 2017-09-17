thank-you-stars
====

Give your dependencies stars on GitHub!

## Setup

1. Download `thank-you-stars.phar` in [Releases](https://github.com/oraoto/thank-you-stars/releases), or clone this repo:

    ~~~
    $ git clone https://github.com/orato/thank-you-stars.git
    $ cd thank-you-stars
    $ composer install --no-dev
    ~~~

2. Save your GitHub personal access token

    1. Open https://github.com/settings/tokens and click "Generate new token"
    2. Input desc, select only "public_repo" as scope and click "Generate token"
    3. Copy the token and save as ~/.thank-you-stars.json.

        ~~~
        {
            "token": "YOUR_TOKEN"
        }
        ~~~


## Usage

If you clone this repository:

~~~
$ php index.php path/to/project/root
~~~

If you download the phar:

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

## License

This project is released under the BSD 3-clause license.
For more details, see [LICENSE](./LICENSE) file.

## Acknowledgement

This tool is greatly inspired by
[teppeis's JavaScript implementation](https://github.com/teppeis/thank-you-stars) and [y-taka-23's Haskell implementation](https://github.com/y-taka-23/thank-you-stars)

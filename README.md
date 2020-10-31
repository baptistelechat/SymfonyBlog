# SymfonyBlog
<img src="https://raw.githubusercontent.com/github/explore/d0c5a5e31e1776ad62379ef5f6b703bcf107d3a3/topics/symfony/symfony.png" height="200" align="right">

A fake blog make with Symfony.

This project was bootstrapped use [Symfony](https://symfony.com/) and was inspiring by Youtube's videos of Lior CHAMLA : [🎵 Symfony en 4 heures](https://www.youtube.com/playlist?list=PLpUhHhXoxrjdQLodxlHFY09_9XzqdPBW8).

## Installation
Clone this repository and install packages.

```bash
git clone https://github.com/baptistelechat/SymfonyBlog.git && composer install
```
Then configure and initialize MySQL database.
```bash
# customize this line in .env
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"

# create database
php bin/console doctrine:database:create

# load migrations
php bin/console doctrine:migrations:migrate

# load fixtures
php bin/console doctrine:fixtures:load

```
Finally start the server.
```bash
symfony server:start
```

## Maintainers
This project is mantained by:
* [baptistelechat](https://github.com/baptistelechat)


## Contributing

1. Fork it
2. Create your feature branch (git checkout -b my-new-feature)
3. Commit your changes (git commit -m 'Add some feature')
4. Push your branch (git push origin my-new-feature)
5. Create a new Pull Request

## Gitmoji

This project use Gitmoji : "An emoji guide for your commit messages".

<p align="center">
	<a href="https://gitmoji.carloscuesta.me">
		<img src="https://cloud.githubusercontent.com/assets/7629661/20073135/4e3db2c2-a52b-11e6-85e1-661a8212045a.gif" width="250" alt="gitmoji">
	</a>
</p>
<p align="center">
	<a href="https://travis-ci.org/carloscuesta/gitmoji">
		<img src="https://img.shields.io/travis/carloscuesta/gitmoji/master?style=flat-square"
			 alt="Build Status">
	</a>
	<a href="https://gitmoji.carloscuesta.me">
		<img src="https://img.shields.io/badge/gitmoji-%20😜%20😍-FFDD67.svg?style=flat-square"
			 alt="Gitmoji">
	</a>
</p>
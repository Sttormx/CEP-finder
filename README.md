# CEP Finder

Site que permite encontrar todas as informações de um CEP e armazenar na lista de endereços cadastrados. Desenvolvido em Laravel com a API da VIACEP.

<img src="https://cdn.discordapp.com/attachments/805936505486049293/924776574094544896/unknown.png">

## Required
- PHP 7.2 ou maior
- Laravel 8
- MySQL

## Installation
```
composer create-project laravel/laravel CEP-finder
```
Após, crie uma key com o comando:
```
php artisan key:generate
```
Crie um arquivo .env conforme o arquivo .env.example e preencha todas as configurações. <br>
Não se esqueça de criar um banco de dados vazio com o nome configurado. <br> <br>
Para rodar o projeto, utilize:
```
php artisan serve
```
## Contributing

1. Fork it (<https://github.com/Sttormx/CEP-finder>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request
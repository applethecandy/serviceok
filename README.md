## Установка

# Запуск 
- Клонируем проект
- composer update - обновляем vendor
- npm update - обновляем node_modules
- cp .env.exmaple .env - создаем .env
- ./vendor/bin/sail up -d - запускаем sail (в фоне)
- ./vendor/bin/sail artisan key:generate - генерируем ключ
- ./vendor/bin/sail artisan migrate - мигрируем базу

# Данные
- ./vendor/bin/sail artisan migrate:fresh --seed - сидим фейковые данные

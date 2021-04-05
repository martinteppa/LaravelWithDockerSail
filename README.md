# Proyect with laravel 8  

This is a basic practice project in laravel using docker. This is a sellers app. Each seller has a client list in wich a seller can order products that their clients wants to buy.

## Downloading
Works with laravel sail for an easy setup local environment.  After download, write the following commands. 
```bash 
alias sail='bash vendor/bin/sail'
```
This command sets an alias that would make it easy to work using just the command "sail"
```bash 
alias sail='bash vendor/bin/sail'
```
You need to have docker running. If you ha

This provides a mail, php, and MySql image, with a volume so you can persist all your data. 
2)use composer to download all dependencies like: jetstream, livewire, tailwind, hardevineShoppingCart 
3)use the migrations and then, use the command "db:seed" to create items in the database 
4)after seeding data, you can use the users vendedor1 and vendedor2 to play with the app. Passwords equals to usernames.


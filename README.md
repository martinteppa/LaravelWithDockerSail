# Proyect with laravel 8  

This is a basic practice project in laravel using docker. This is a sellers app. Each seller has a client list in wich a seller can order products that their clients wants to buy. You only need to have Docker installed

## Downloading 
Works with laravel sail for an easy setup local environment.  After download, write the following commands. 
 
```bash 
git clone https://github.com/martinteppa/LaravelWithDockerSail.git
```

In another folder use the folowing command to download a clean sail app. 

```bash 
curl -s https://laravel.build/cleanapp| bash
```
Then copy and paste the content in LaravelWithDockerSail in this clean instalation. This is because we need the folder vendor to run sail commands. Unfortunately this is the only solution that i can do at this moment

```bash 
cd cleanapp
```


```bash 
alias sail='bash vendor/bin/sail'
```
This command sets an alias that would make it easy to work using just the command "sail"


```bash 
sail up -d
```
You need to have docker running.This installation may take a while. If you have troubles with docker you need to type the next command if you are in linux
```bash 
newgrp docker
```
If you want to exit, just use: 
```bash 
sail down
```


## Composer and Node

The following steps will download all de dependencies, like livewire, jetstream, tailwind.css. You need to use sail to work in the docker enviroment
```bash 
sail composer install
```

```bash 
npm install
```

## Migrations
The following command will migrate in the sail enviroment the testing data to start working. After this you can enter in localhost with user "vendedor1" and password "vendedor1" to use the app

```bash 
sail artisan migrate
```

 


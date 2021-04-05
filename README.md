# Proyect with laravel 8  

This is a basic practice project in laravel using docker. This is a sellers app. Each seller has a client list in wich a seller can order products that their clients wants to buy.

## Downloading 
Works with laravel sail for an easy setup local environment.  After download, write the following commands. 
```bash 
alias sail='bash vendor/bin/sail'
```
This command sets an alias that would make it easy to work using just the command "sail"
```bash 
sail up -d
```
You need to have docker running. If you have troubles with docker you need to type the next command if you are in linux
```bash 
newgrp docker
```
If you want to exit, just use: 
```bash 
sail down
```

## Composer and Node

The following steps will download all de dependencies, like livewire, jetstream, tailwind.css. You need to use sail to work in the docker enviroment





 


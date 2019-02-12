# cat-facts-sms-service
A service for sending sms as an example for meetup

## Installation
Clone the repo and then bring it up in docker
```bash
git clone git@github.com:php-shropshire/cat-facts-ui.git
cd cat-facts-ui
docker-compose up -d
docker-compose exec app composer install
```

## Running
Once you have prepared the installation, the webapp should be running on localhost:8000.

If everything is wired up correctly you should be able to put in a phone number and subscribe to cat facts

## Requirements
As this is just the UI and other docker components you need to bring up the sms service too, this can be found at [cat-facts-sms-service](https://github.com/php-shropshire/cat-facts-sms-service)

# Troubleshooting
### 1/1 brokers are down
The app can't connect to docker, this may be a temporary error or may be due to the kafka container not running, make sure the containers are running

## Contributing
Feel free to use this repo as a learning resource, fork the repo and maybe we'll show off your changes in the next PHP Shropshire.  
For example this app currently just lets you know you've subscribed to cat facts but where are the cat facts!? Try adding another system to provide the cat facts

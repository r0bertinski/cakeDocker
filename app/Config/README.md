# ARMEN Technologies

### Stop the app
docker-compose down

### Start the app
docker-compose up

Short brief about the most used commands to start a fresh app.

### Build the app

* Ensure that everything is deleted
```
sh removeDAll.sh
```

* Build the app (ensure that everything is created from scratch and not using the cache)
```
docker-compose build --no-cache
```

* Start containers (checking the logs)
```
docker-compose up
```

* Start containers (in the background)

```
docker-compose up -d
```

Note: this command (below) should be enough to start the app build from scratch, but to be sure that everything is deleted (mysql volumes included), I've created the removeDAll.sh script.
```
docker-compose build --no-cache
```

## Authors

r0bertinski de la pradera 
[robbyschuh@gmail.com](https://nohanohave)
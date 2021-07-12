# CakePHP Dockerized



CakePHP dockerized is a basic cakePHP blog skeleton using containers.


## Description

Switch between branches and find the cakePHP version desired (currently only V2.X available).


## Installation / instructions
Please rename the **mysql_example.env** file to **mysql.env** with your database parameters.
By default the site will run in the 8081 port, feel free to chage the entry port in the ***docker-compose.yml*** file. If you change the port here, please ensure that you update the port in the ***Dockerfile*** and in the file **000-default.conf*** as well:

```
EXPOSE 8081
```

```
<VirtualHost *:8081>
```

```
docker-compose build
docker-compose up

```


## Contributing

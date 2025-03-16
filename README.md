# Lagerhaus

This is the test task solution with the simple API and some caching

The Docker Compose V2 was used, while creating the Makefile, so, if you prefer Docker Compose V1, please update the Makefile accordingly.
(I mean - "docker-compose" vs "docker compose")

## How to install:

1. Clone the repo 
2. Go into the project folder with docker-compose.yml file in it.
3. Run:

```
docker compose up -d
```

4. Wait until composer installs all dependencies, control it with:

```
docker compose logs
```

5. Create databases with

```
make databases
```
or, if you don't have *make* installed - look into the Makefile and run the commands by hands


6. Load fixtures

```
make load
```

## How to use:

Type in your browser's address bar:

with cache (port 8080):
```
http://localhost:8080/process-huge-dataset
```

without cache (port 8081):
```
http://localhost:8081/process-huge-dataset
```

To see the Swagger docs:

```
http://localhost:8080/
```


Have a nice day

















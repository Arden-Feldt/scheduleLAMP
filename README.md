#### Start
docker-compose up -d

http://localhost/

#### See active images
docker ps

#### get the data in terminal
1. docker exec -it <port to db: e8d9c3b5b22b> bash
2. mysqldump schedule_db -p

#### Get the ip address setup
docker inspect <port num>

#### Stop
docker-compose down
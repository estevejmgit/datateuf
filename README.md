# Requirements
- Docker & Docker compose installed 
- Git installed

# Install from github 
$ mkdir project_root

$ cd project_root

$ git init

$ git remote add origin git@github.com:estevejmgit/datateuf.git

# Build and start Docker containers
$ docker compose build

$ docker compose up -d

# Change password & user
- in docker-compose.yml
- in symfony/.env
- 
# App should be running
- http://localhost:8000

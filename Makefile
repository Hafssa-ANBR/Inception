all :
	@docker compose -f ./srcs/docker-compose.yml up --build

build : 
	@docker compose -f ./srcs/docker-compose.yml build

up : 
	@docker compose -f ./srcs/docker-compose.yml up -d

down : 
	@docker compose -f ./srcs/docker-compose.yml down

down-v : 
	@docker compose -f ./srcs/docker-compose.yml down -v
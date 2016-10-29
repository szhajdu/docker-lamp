.PHONY: build up down stop shell

build:
	docker-compose build

up:
	docker-compose up -d

down:
	docker-compose down

stop:
	docker-compose stop

shell:
	docker exec -i -t $(ID) /bin/bash -c "export TERM=xterm; exec bash"
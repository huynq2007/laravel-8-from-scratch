up:
	docker-compose up --remove-orphans
	docker-compose ps
down:
	docker-compose down
attach:
	docker-compose exec composer bash
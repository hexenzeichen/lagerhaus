databases:
	docker compose exec php82-service bin/console doctrine:database:create
	docker compose exec php82-service bin/console doctrine:schema:create


#!make
.ONESHELL:

.colima-start:
	colima start --runtime docker >/dev/null 2>&1 || true;

.colima-context:
	 docker context use colima;

colima: .colima-start


push-image:
	$(info [+] Make: Pushing to ghcr.io...)
	docker compose --profile php push

build-image:
	$(info [+] Make: Building docker image...)
	docker compose --profile php build

login:
	$(info [+] Make: Logging into docker container...)
	docker compose --profile php run --remove-orphans -it "${PHP_CONTAINER}" /bin/sh

up:
	docker compose --profile php up --remove-orphans -d

# Plain Commerce
*Learn things by doing, e-commerce webstore from scratch*

## Run locally

`docker compose up -d`

After docker finishes downloading the image open http://127.0.0.1 in a browser

## Troubleshooting

**Port 80 is taken by another tool**

Run  project container as e.g. `PORT=88 docker compose up -d` where *88* is a desired port

**On Buy button click gets "permission denied" error**

Your user ID is not 1000, recreate the container with `UID=$(id -u) docker compose up -d`

Both PORT and UID env vars can be used together is needed.

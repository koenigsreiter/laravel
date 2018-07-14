FROM node as node_builder

WORKDIR /app
COPY . /app

RUN npm install

FROM php:latest

WORKDIR /app
COPY --from=node_builder /app /app

EXPOSE 8080

ENTRYPOINT [ "php", "artisan", "serve", "--port", "8080", "--host", "0.0.0.0" ]

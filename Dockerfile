FROM php:7.4.14-alpine

RUN apk --update upgrade\
    && apk add --no-cache make

EXPOSE 9091

COPY . /app
 
ENTRYPOINT [ "php" ]
CMD ["-S", "0.0.0.0:9091", "-t", "/app/apps/Challenge/public"]

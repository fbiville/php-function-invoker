# Riff invoker for PHP functions

Very experimental AND outdated.
riff uses [cloud-native buildpacks](https://buildpacks.io) now

## Locally

Install composer first.

```
 $ composer start
```

## Docker

```
 $ docker build . -t my-php-invoker:0.0.1
 $ docker run -it -p 8080:8080 my-php-invoker:0.0.1
```

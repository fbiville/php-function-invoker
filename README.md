# Riff invoker for PHP functions

Very experimental.

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

And in another window:

```
curl -H'Accept:text/plain' http://localhost:8080/hello/kitty\?name\=foobar\&truc\=thingy -v
```

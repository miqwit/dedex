# Dedex

Dedex is a DDEX XML file parser. DDEX is a standard used in the music industry to deliver rich media content. See more info at (ddex.net)[https://ddex.net/].

## Development Environment

Generate an image with the provided `Dockerfile`: 

```
docker build -t dedex-img .
```

And run it with:
```
docker run \
  --name=dedex \
  -v /full/path/to/dedex:/usr/src/dedex \
  --user 1000:1000 \
  -ti dedex-img \
  bash
```

## Running Tests

Run the phpunit test command:

```
./bin/phpunit
```

## Generating Documentation

Run the phpDocumentator command:

```
php phpDocumentor.phar -d src -t docs
```

## Still TODO

* Integrate monolog and handle logs better
* Run code coverage

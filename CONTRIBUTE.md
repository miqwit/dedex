## Contribute

If you want to contribute, here are some elements to start with.

### How to contribute

If you used `dedex` and found bugs or cases that were not properly covered, you can contribute by:

- Raising an issue in this repository
- Submitting a Pull Request

### Where to start

Here are good ways to contribute to this package

- Submit new rules that could be useful to other users
- Submit tests with other DDEX samples (the copyrights must be compatible with the MIT Licence)
- ...

### Setup a dev environment with Docker

Generate an image with the provided [Dockerfile](Dockerfile.dist) (rename it to Dockerfile and change the git name and email in it): 

```
docker build -t dedex-img .
```

And run it with:
```
docker run \
  --name=dedex \
  --network=host \
  -v /home/mickael/dev/dedex/dedex:/home/mickael/dev/dedex/dedex \
  -v /home/mickael/dev/dedex/xdebug.ini:/usr/local/etc/php/conf.d/xdebug.ini \
  -ti dedex-img \
  bash
```

> Note that I use `--network=host` in order to connect my PHP xdebug to it, but it's not necessarily something you'd need.

### Running Tests

In the docker, run the phpunit test command:

```
./vendor/bin/phpunit
```

### Generating Documentation

Run the phpDocumentator command:

```
php phpDocumentor.phar -d src -t docs
```

### Generating DDEX classes

I used the superb [`xsd2php`](https://github.com/goetas-webservices/xsd2php) package to generate classes based on the XSD provided by DDEX.

The parser is "filling" these objects while parsing the XML file line by line.

Example for generating DDEX 411 entity classes:

```
./vendor/goetas-webservices/xsd2php/bin/xsd2php convert config/xsd2php.yaml xsd/release_notification/411/*.xsd
```

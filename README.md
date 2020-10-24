# Dedex

Dedex is a DDEX XML file parser. DDEX is a standard used in the music industry to deliver rich media content. See more info at (ddex.net)[https://ddex.net/].

## Usage

TODO

## Parser config

Here are handy function before parsing the XML.

`$parser=new ErnParserController();`

- `$parser->setDisplayLog(true);` displays parsing logs. For debugging purpose mainly. (default: `false`)
- `$parser->setXsdValidation(true);` validates XML against XSD. (default: `false` because will load XSD and XML in memory)


## Development Environment

Generate an image with the provided `Dockerfile`: 

```
docker build -t dedex-img .
```

And run it with:
```
docker run \
  --name=dedex \
  --network=host \
  -v /home/mickael/dev/dedex/dedex:/home/mickael/dev/dedex/dedex \
  -v /home/mickael/dev/dedex/xdebug.ini:/usr/local/etc/php/conf.d/xdebug.ini
  -ti dedex-img \
  bash
```

## Running Tests

In the docker, run the phpunit test command:

```
./bin/phpunit
```

## Generating Documentation

Run the phpDocumentator command:

```
php phpDocumentor.phar -d src -t docs
```

## Generating DDEX classes

```
vendor/bin/xsd2php convert config.yml /home/my/ota/OTA_Air*.xsd
```

## Still TODO

* Integrate monolog and handle logs better
* Run code coverage
* Test with UTF8 and accents
* Integrate rule testing
* Support types
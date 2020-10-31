# Dedex

Dedex is a DDEX XML file parser. DDEX is a standard used in the music industry to deliver rich media content. See more info at [ddex.net](https://ddex.net/).

## Usage

### Parse a file without XSD validation

```php
use DedexBundle\Controller\ErnParserController;

$xml_path = "tests/samples/001_audioalbum_complete.xml";
$parser = new ErnParserController();
$ern = $parser->parse($xml_path);
```

### Parse a file with XSD validation

XSD validation will load all XML and XSD in memory, making this library less efficient. Use with care. Is not adapted to gigantic files.

```php
use DedexBundle\Controller\ErnParserController;

$xml_path = "tests/samples/001_audioalbum_complete.xml";
$parser = new ErnParserController();
$parser->setXsdValidation(true);
$ern = $parser->parse($xml_path);
```

### Parse a file with a Rule

```php
use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\AtLeastOneImage;
use DedexBundle\Exception\RuleValidationException;

$xml_path = "tests/samples/001_audioalbum_complete.xml";
$parser = new ErnParserController();
$parset->addRule(new AtLeastOneImage(Rule::LEVEL_ERROR));
// ... can add multiple rules
$ern = $parser->parse($xml_path);  // will raise an RuleValidationException if rule is broken
```

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
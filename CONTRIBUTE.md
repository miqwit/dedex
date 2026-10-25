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

#### Rules are tested on every version

Rules have different code paths per ERN version. Two tests in `tests/Common` run them on every sample, so a version a rule doesn't handle fails the build:

- `RulesOnAllSamplesTest` runs every rule of `src/Rule` on every sample of `tests/Ern*/samples`. No rule may throw, and every supported version must have at least one sample.
- `RulesOnAllSamplesTest` also checks that every violation path points to exactly one element of the sample.
- `RulesOnErn4xSamplesTest` checks the exact violations (subject and path) of every rule on every ERN 4.x sample (the `EXPECTED_FAILURES` table), and checks `AllResourceFileExist` against the `File/URI` elements read from the XML.

Nothing is listed by hand, so:

- **New rule:** call `fail($message, $subject, $path)` for each problem (see "Write a rule" in the README), so that callers get one violation per problem. It runs on every sample. It must pass on each of them, or its expected failures must be added to `EXPECTED_FAILURES`. Branch on the structure of the entities (`isErn3x()`, `method_exists()`) rather than on a list of classes, so that the next version works too.
- **New 4.x sample:** add it to `EXPECTED_FAILURES`, with `[]` if every rule passes.
- **New version:** add at least one sample in `tests/Ern<version>/samples`.
- A sample that is not meant to be parsed goes in `Samples::UNPARSEABLE`.

### Generating Documentation

Run the phpDocumentator command:

```
php phpDocumentor.phar -d src -t docs
```

### Generating DDEX classes

I used the superb [`xsd2php`](https://github.com/goetas-webservices/xsd2php) package to generate classes based on the XSD provided by DDEX.

The parser is "filling" these objects while parsing the XML file line by line.

Example for generating DDEX 4.3.2 entity classes (the config file `config/xsd2php.yaml` is versioned and targets 432; copy and adapt it for another version):

```
./vendor/goetas-webservices/xsd2php/bin/xsd2php convert config/xsd2php.yaml xsd/release_notification/432/release-notification.xsd
```

The XSD imports the allowed value set: save it next to it as `avs432.xsd` and point the `schemaLocation` of the import to it so that generation and validation work offline. Config file `config/xsd2php.yaml`:

```yaml
xsd2php:
  namespaces:
    'http://ddex.net/xml/ern/432': 'DedexBundle\Entity\Ern432'
    'http://ddex.net/xml/allowed-value-sets': 'DedexBundle\Entity\Ern432\Avs'
  destinations_php:
    'DedexBundle\Entity\Ern432': src/Entity/Ern432
    'DedexBundle\Entity\Ern432\Avs': src/Entity/Ern432/Avs

  destinations_jms:
    'DedexBundle\Entity\Ern432': src/Entity/Ern432/metadata

  naming_strategy: long # needed to avoid conflicts on Type files
  path_generator: psr4 # optional and default
```

ERN 3.x schemas import the allowed value sets from another namespace (`http://ddex.net/xml/avs/avs`) and are not published on ddex.net anymore. ERN 3.8.1 has its own config file, `config/xsd2php.381.yaml`, and its XSD imports the local `avs_20161006.xsd`:

```
./vendor/goetas-webservices/xsd2php/bin/xsd2php convert config/xsd2php.381.yaml xsd/release_notification/381/release-notification.xsd
```

# Generate commands

### Using the URL endpoint (and without file override)

```
java -jar swagger-codegen/modules/swagger-codegen-cli/target/swagger-codegen-cli.jar generate \
   -i https://fomf.ungerboeck.com/TEST/swagger/docs/v1 \
   -l php --ignore-file-override ./UngerboeckSDK/lib \
   -o ./ -t ./UngerboeckSDK/code-template -c ./UngerboeckSDK/config.json
```

### Using the local schema file (and with file override)

```
java -jar swagger-codegen/swagger-codegen-cli.jar generate \
   -i ./ungerboeck-sdk-php/schema/ungerboeck-sdk.yaml \
   -l php \
   -o ./ -t ./ungerboeck-sdk-php/code-template -c ./ungerboeck-sdk-php/config.json
```

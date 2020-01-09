# GET NEW FILE
# http://shopware.test/api/v1/_info/swagger.html
# wget http://shopware.test/api/v1/_info/openapi3.json?format=yaml

rm openapi3.json

wget http://shopware.test/api/v1/_info/openapi3.json

# swagger-codegen config-help  -l php
swagger-codegen generate -i openapi3.json -l php --git-user-id industryarena --git-repo-id shopware6-sdk --invoker-package Shopware6SDK

rm -rf docs lib test .swagger-codegen .swagger-codegen-ignore
mv SwaggerClient-php/* .
mv SwaggerClient-php/.* .
rm -rf SwaggerClient-php

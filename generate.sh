swagger-codegen generate -i shopware-openapi3.json -l php --git-user-id industryarena --git-repo-id ShopwareSDK6 --invoker-package ShopwareSDK6

rm -rf docs lib test
mv SwaggerClient-php/* .
mv SwaggerClient-php/.* .
rm -rf SwaggerClient-php

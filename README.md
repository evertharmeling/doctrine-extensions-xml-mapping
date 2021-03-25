# Doctrine Extensions XML Mapping

## Run project

- `symfony composer install`
- `docker-compose up --build -d`
- `bin/console doc:schema:update --force`
- `symfony server:start`
- `symfony open:local`

## Problem

At every refresh a slug is generated automatically via the Sluggable behavior. 
Configuration with `annotation` in `src/Entity/Article/Article.php` on the property works, however the defined config in
`config/doctrine/article/Article.orm.xml` isn't?

Enabling / disabling the annotation makes that the slug is or is not generated automatically...

It looks like the problem lies in `\Gedmo\Mapping\ExtensionMetadataFactory::getDriver` line 160-162 because the used driver 
always falls back to `\Gedmo\Sluggable\Mapping\Driver\Annotation`...

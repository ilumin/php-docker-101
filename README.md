# php-docker-101

Problem found
- docker permission on storage folder 
  fix by enter container and run `chmod -R a+wr /var/www/storage` 
  but it should config in docker-compose.yml

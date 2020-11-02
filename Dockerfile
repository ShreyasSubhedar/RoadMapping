FROM php:7.4-cli

COPY . /usr/src/myapp

WORKDIR /usr/src/myapp

CMD [ "php", "./Car.php" ]




// in .travis.yml file
sudo: required
services:
  - docker

before_install:
  - docker build -t project/road-mapping -f Dockerfile .

script:
  - docker run project/road-mapping 

deploy:
  provider: elasticbeanstalk
  region: "us-east-1"
  app: "EBApptest"
  env: "Ebapptest-env"
  bucket_name: "s3-bucket-for-sample-docker-react"
  bucket_path: "EBApptest"
  on:
    branch: master
  access_key_id: "$AWS_ACCESS_KEY"
  secret_access_key: "$AWS_SECRET_KEY"
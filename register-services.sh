#!/bin/bash

sudo docker-compose exec gateway curl -i -X POST \
  --url http://localhost:8001/apis \
  --data 'name=usuarios' \
  --data 'upstream_url=http://service1/usuarios.php' \
  --data 'request_host=usuarios'

sudo docker-compose exec gateway curl -i -X POST \
  --url http://localhost:8001/apis \
  --data 'name=clientes' \
  --data 'upstream_url=http://service2/clientes.php' \
  --data 'request_host=clientes'

sudo docker-compose exec gateway curl -i -X POST \
  --url http://localhost:8001/apis \
  --data 'name=produtos' \
  --data 'upstream_url=http://service3/produtos.php' \
  --data 'request_host=produtos'

sudo docker-compose exec gateway curl -i -X POST \
  --url http://localhost:8001/apis \
  --data 'name=vendas' \
  --data 'upstream_url=http://service4/vendas.php' \
  --data 'request_host=vendas'

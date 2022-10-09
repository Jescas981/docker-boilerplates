#!/bin/bash
path=$(printf '%s\n' "${PWD##*/}")
docker exec ${path}-php-1 php "$@"
<?php

exec('php bin/console doctrine:schema:drop --force');

exec('php bin/console doctrine:schema:update --force');

exec('php bin/console doctrine:fixtures:load -n');
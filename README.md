fuel-admin
==========

Simple admin template for FuelPHP

*INTRUÇÕES DE USO*

- Configurações (fuel/app/config/config.php)
	Defina o default_timezone (caso ainda não tenha feito)
	Em 'security' adicione na 'whitelisted_classes' a seguinte referência: 'Fuel\\Core\\Validation'
	Em 'always_load' adicione em 'packages' os pacotes 'auth' e o 'orm'

- Banco de dados
	Configure o banco conforme seu ambiente, em: fuel/app/config/<ambiente>/db.php

- Gerando tabelas de autenticação
	Vá para o terminal/prompt e digite: php oil refine migrate --packages=auth

- Criando o primeiro usuário
	Ainda no console/prompt digite: php oil console
	Em seguida: Auth::create_user('username', 'password', 'seu@email', 100);
	O último parâmetro é o ID do grupo, cujos estão configurados em fuel/packages/config/simpleauth.php, e 100 é o ID do grupo de administradores.
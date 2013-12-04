<?php

class Model_User extends \Orm\Model
{
	protected static $_table_name = 'users';

	protected static $_properties = array(
		'id',
		'username',
		'password',
		'group',
		'email',
		'last_login',
		'login_hash',
		'profile_fields',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	public $_labels = array(
		'username' => array('name'=>'Usuário', 'form_field'=>'text'),
		'password' => array('name'=>'Senha', 'form_field'=>'password'),
		'group' => array('name'=>'Grupo', 'form_field'=>'select', 'select_items'=>array('Administrador'=>100)),
		'email' => array('name'=>'E-mail', 'form_field'=>'email'),
	);

	public static function validate($factory, $check_password = false)
	{
		$val = Validation::forge($factory);
		$val->set_message('required', 'O campo <strong>:label</strong> não pode ser vazio');

		$val->add_field('username', 'Nome de usuário', 'required|max_length[50]');
		$val->add_field('email', 'E-mail', 'required|valid_email');
		$val->add_field('group', 'Grupo', 'required|valid_string[numeric]');
		
		if ($check_password)
		{
			$val->add_field('password', 'Senha', 'required|max_length[255]');
		}

		return $val;
	}

	public function attributes( $post )
	{
		foreach ($post as $attr => $value)
		{
			if ($value)
			{
				$this->$attr = $value;
			}
		}
	}

	public static function all()
	{
		$where = array();

		if (isset($_GET['term']) AND $_GET['term'])
		{
			$data = Model_User::query()->where('username', 'LIKE', "%{$_GET['term']}%")->or_where('email', 'LIKE', "%{$_GET['term']}%")->get();
		}
		else
		{
			$data = Model_User::find('all');
		}

		return $data;
	}
}
<?php
class Inquilino extends AppModel {
    public $belongsTo = 'Moradia';
    var $name = 'Inquilino';
    var $validate = array(
        'nome' => array(
            'rule' => array('maxLength', '40'),
            'required' => true,
            'on' => 'create',
            'message' => 'Digite apenas letras e no máximo 40 caracteres'
        ),
        'apelido' => array(
            'rule' => array('maxLength', '20'),
            'required' => true,
            'message' => 'no máximo 20 caracteres'
        ),/***
        'celular' => array(
            'loginRule-1' => array(
                'rule' => 'numeric',
                'required' => true,
                'message' => 'Somente números'
                ),
            'loginRule-2' => array(
                'rule' => array('between', 10, 11),
                'required' => true,
                'message' => 'digite 11 números'
            )
        ),*/
        'email' => array(
            'rule' => array('maxLength', '35'),
            'required' => true,
            'on' => 'create',
            'message' => 'insira no máximo 35 caracteres'
        ),/***
        'data_nascimento' => array(
            'rule' => 'date',
            'required' => true,
            'on' => 'create',
            'message' => 'Insira uma data válida'
        ),*/
        'naturalidade' => array(
            'rule' => array('maxLength', '25'),
            'required' => true,
            'message' => 'no máximo 25 caracteres'
        ),/***
        'login' => array(
            'rule' => array('between', 5, 15),
            'required' => true,
            'message' => 'Entre 5 e 15 caracteres'
        ),
        'senha' => array(
            'rule' => array('between', 5, 25),
            'required' => true,
            'message' => 'Entre 5 e 25 caracteres'
        )*/
    );
}
?>

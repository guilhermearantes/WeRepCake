<?php
class Paciente extends AppModel{
    var $name = 'Paciente';
    var $validate = array(
        'nome' => array(
            'rule' => array('custom', '/^[a-z ]*$/i'),
            'required' => true,
            'allowEmpty' => false,
            'on' => 'create', // ou: 'update'
            'message' => 'Digite apenas letras'
        ),
        'login' => array(
            'alphanumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'message' => 'Letras e números somente e sem espaços'
                ),
            'between' => array(
                'rule' => array('between', 5, 15),
                'message' => 'Entre 5 e 15 caracteres'
            )
        )
    );
}
 ?>

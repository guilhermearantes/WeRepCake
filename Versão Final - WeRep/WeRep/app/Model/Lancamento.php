<?php

class Lancamento extends AppModel {
    public $belongsTo = array(
        'Inquilino', 'Conta'
    );
}
 ?>

<?php
class Exame extends AppModel{
    public $belongsTo = array(
        'Paciente', 'Procedimento'
    );
    var $name = 'Exame';
    var $validate = array(
        'data' => array(
            'rule' => array('custom', '/^[\/0-9]*$/i'),
            'required' => true,
            'message' => 'Digite no formato dd/mm/aaaa'
        ),
        "procedimento_id"=> array(
                "notEmpty"  => array(
                    "rule"          => "notEmpty",
                    "message"       => "Selecione um procedimento",
                )
        )
    );
}


    //'not_empty'=>array(
    //    'rule' => 'notEmpty',
    //    'message' => 'Campo vazio'
    //),
    //'rule' => array('custom', '/^[a-z0-9 ]*$/i'),


    #,
    #'senha' => array(
    #    'rule' => array('minLength', '8'),
    #    'required' => true,
    #    'message' => '8 caracteres no mínimo'
    #)

#        "first_name" => array(
#            "name"      => array(
#                "rule"      => "validName",
#                "message"   => 'Only alpha characters and "." (dots)',
#            ),
#        ),
#        "last_name"  => array(
#            "name"      => array(
#                "rule"      => "validName",
#                "message"   => 'Only alpha characters and "." (dots)',
#            ),
#        ),
#        "birth_date" => array(
#            "date"      => array(
#                "rule"      => "date",
#                "message"   => "Enter a valid date",
#            ),
#        ),
#        "nickname"  => array(
#            "alphanumeric"  => array(
#                "rule"      => "alphaNumeric",
#                "message"   => "Only alpha-numeric characters",
#            ),
#        ),
#        "gender"     => array(
#            "notEmpty"  => array(
#                "rule"          => "notEmpty",
#                "message"       => "Can't be empty",
#            ),
#        ),
#    );
#
#    } // end class

?>

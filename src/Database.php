<?php
class Database {
public $appointments = [
    [ 'id'=> 1,
    'name' => 'Biplop',
    'email' => 'biplop@biplop.com',
    'message' => 'hola'
    ],
    [
    'id' => 2,
    'name' => 'Ariann',
    'email' => 'ari@ari.com',
    'message' => 'Espero que funcione'
    ],
    [ 'id'=> 3,
    'name'=> 'Sergi',
    'email'=> 'sergi@fakeTotal.fake',
    'message'=> 'Fake ToTal'
    ],
    [ 'id'=> 4,
    'name'=> 'Lucas',
    'email'=> 'lucas@fakeTotal.fak',
    'message'=> 'Si no working I die'
    ],
    ];

    public function getAll() {
    return $this->appointments;
    }
}


    /* public function create($name, $email,$querytitle,$message){
    self::$id++;
    $datetime = date("Y-m-d h:i:sa");
    array_push(self::$appointments, [
    'id' => self::$id,
    'name' => $name,
    'email' => $email,
    'querytitle' => $querytitle,
    'message' => $message,
    'datetime' => $datetime
    ]
    );
    }*/
 
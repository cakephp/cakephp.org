<?php

class Map extends AppModel
{

    //cake
    var $key = 'ABQIAAAAGEIZFnoQBCXCaz4W2On0YBQ46eA-wCy5mttckYHESQkprXzvHhT0gPa1g-djEScbLhZYzYj6AJq4Iw';
    //local
    //var $key = 'ABQIAAAAGEIZFnoQBCXCaz4W2On0YBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxSUDW2TK2rP2REvDC4DJClSo9_wBQ';
    
    var $validate = array(
    'title' => array('rule' => 'notEmpty'),
    'description' => array('rule' => 'notEmpty'),
        //'latitude' => array('notEmpty'),
        //'longitude' => array('notEmpty'),
    );

    var $actsAs = array('Geocoded' => array(
    'fields' => array('latitude', 'longitude'),
    ));

    function __construct($id = false, $table = null, $ds = 'default')
    {
        $this->actsAs['Geocoded']['key'] = $this->key;
        parent::__construct($id, $table, $ds);
    }

    function beforeSave()
    {
        $this->data[$this->alias] = am($this->data[$this->alias], $this->geocode($this->data[$this->alias]));
        if (empty($this->data[$this->alias]['latitude']) || empty($this->data[$this->alias]['longitude'])) {
            $this->invalidate('no_address_found');
            return false;
        }
        return true;
    }
}

<?php

class SpamFilterComponent extends Object {

	var $key = 'Other';

	var $fields = array('name', 'body');

	function startup(&$controller) {
		if (!empty($controller->data[$this->key])) {
			foreach ($this->fields as $field) {
				if (!empty($controller->data[$this->key][$field])) {
					$controller->redirect($controller->referer());
				}
			}
		}
	}
}
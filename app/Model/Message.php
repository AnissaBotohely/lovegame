<?php
App::uses('AppModel', 'Model');
/**
 * Message Model
 *
 * @property Exp $Exp
 */
class Message extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Exp' => array(
			'className' => 'Message',
			'foreignKey' => 'exp_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Dest' => array(
			'className' => 'Message',
			'foreignKey' => 'dest_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

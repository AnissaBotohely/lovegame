<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Orientation $Orientation
 * @property Genre $Genre
 * @property Message $Message
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'prenom';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Orientation' => array(
			'className' => 'Orientation',
			'foreignKey' => 'orientation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Genre' => array(
			'className' => 'Genre',
			'foreignKey' => 'genre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Message' => array(
			'className' => 'Message',
			'foreignKey' => 'message_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

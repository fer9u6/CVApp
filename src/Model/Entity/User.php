<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $email
 * @property string $phone_house
 * @property string $phone_cellphone
 * @property string $residence
 * @property \Cake\I18n\FrozenDate $birthday
 * @property string $password
 *
 * @property \App\Model\Entity\Cv[] $cvs
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
		'*' => true,
        'id' => false
		/*
        'name' => true,
        'lastname' => true,
        'email' => true,
        'phone_house' => true,
        'phone_cellphone' => true,
        'residence' => true,
        'birthday' => true,
        'password' => true,
        'cvs' => true
		*/
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
	
	protected function _setPassword($password)
	{
		return (new DefaultPasswordHasher)->hash($password);
	}
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Languaje Entity
 *
 * @property int $id
 * @property string $languaje
 * @property string $level
 * @property int $cv_id
 *
 * @property \App\Model\Entity\Cv $cv
 */
class Languaje extends Entity
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
        'languaje' => true,
        'level' => true,
        'cv_id' => true,
        'cv' => true
    ];
}

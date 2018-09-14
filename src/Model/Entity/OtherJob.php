<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OtherJob Entity
 *
 * @property int $id
 * @property string $description
 * @property \Cake\I18n\FrozenDate $since
 * @property \Cake\I18n\FrozenDate $until
 * @property int $cv_id
 *
 * @property \App\Model\Entity\Cv $cv
 */
class OtherJob extends Entity
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
        'description' => true,
        'since' => true,
        'until' => true,
        'cv_id' => true,
        'cv' => true
    ];
}

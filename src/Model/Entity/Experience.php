<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Experience Entity
 *
 * @property int $id
 * @property string $enterprice
 * @property string $position
 * @property \Cake\I18n\FrozenDate $since
 * @property \Cake\I18n\FrozenDate $until
 * @property string $description
 * @property int $cv_id
 *
 * @property \App\Model\Entity\Cv $cv
 */
class Experience extends Entity
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
        'enterprice' => true,
        'position' => true,
        'since' => true,
        'until' => true,
        'description' => true,
        'cv_id' => true,
        'cv' => true
    ];
}

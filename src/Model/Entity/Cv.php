<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cv Entity
 *
 * @property int $id
 * @property string $profile
 * @property string $skills
 * @property string $recommendations
 * @property string $acknowledgments
 * @property int $visits
 * @property int $user_id
 * @property string $category
 *
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Education[] $educations
 * @property \App\Model\Entity\Experience[] $experiences
 * @property \App\Model\Entity\Languaje[] $languajes
 * @property \App\Model\Entity\OtherJob[] $other_jobs
 */
class Cv extends Entity
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
        'profile' => true,
        'skills' => true,
        'recommendations' => true,
        'acknowledgments' => true,
        'visits' => true,
        'user_id' => true,
        'category' => true,
        'users' => true,
        'educations' => true,
        'experiences' => true,
        'languajes' => true,
        'other_jobs' => true
    ];
}

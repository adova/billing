<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Generate Entity.
 *
 * @property int $id
 * @property int $package_user_id
 * @property \App\Model\Entity\PackageUser $package_user
 * @property int $billing_type_id
 * @property \App\Model\Entity\BillingType $billing_type
 * @property int $active
 */
class Generate extends Entity
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
        'id' => false,
    ];
}

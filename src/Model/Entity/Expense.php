<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Expense Entity.
 */
class Expense extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'date' => true,
        'description' => true,
        'amount' => true,
    ];
}

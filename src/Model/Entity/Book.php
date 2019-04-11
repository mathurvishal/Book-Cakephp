<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $book_id
 * @property string $book_name
 * @property string $book_author
 * @property string $book_description
 * @property string $book_email
 * @property \Cake\I18n\FrozenTime $book_created_date
 * @property \Cake\I18n\FrozenTime $book_updated_date
 */
class Book extends Entity
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
        'book_name' => true,
        'book_author' => true,
        'book_description' => true,
        'book_email' => true,
        'book_created_date' => true,
        'book_updated_date' => true
    ];
}

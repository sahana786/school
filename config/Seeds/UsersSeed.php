<?php
declare(strict_types=1);

use Cake\Auth\DefaultPasswordHasher;
use Cake\I18n\Time;
use Cake\Utility\Text;
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => Text::uuid(),
                'user_name' => 'Sahana',
                'role' => 'student',
                'password' =>  (new DefaultPasswordHasher)->hash('123456'),
                'email' => 'sahana@gmail.com',
                'department_id' => 'ac4438cd-5fec-4cbf-9a35-b1ea4bfed796',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")
            ],
            [
                'id' => Text::uuid(),
                'user_name' => 'Umar',
                'role' => 'student',
                'password' =>  (new DefaultPasswordHasher)->hash('123456'),
                'email' => 'umar@gmail.com',
                'department_id' => '8d0a740a-7cbc-4ecf-890d-0157f5f7794b',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")
            ],
            [
                'id' => Text::uuid(),
                'user_name' => 'Suraj',
                'role' => 'student',
                'password' =>  (new DefaultPasswordHasher)->hash('123456'),
                'email' => 'suraj@gmail.com',
                'department_id' => 'ea920334-c926-4572-904c-5bc73c1547b7',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")
            ],
            [
                'id' => Text::uuid(),
                'user_name' => 'Admin',
                'role' => 'admin',
                'password' =>  (new DefaultPasswordHasher)->hash('123456'),
                'email' => 'admin@gmail.com',
                'department_id' => '313d21b8-7d06-40b4-aee7-c8f6d6e1f8fa',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}

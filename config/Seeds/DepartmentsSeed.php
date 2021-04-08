<?php
declare(strict_types=1);

use Cake\I18n\Time;
use Cake\Utility\Text;
use Migrations\AbstractSeed;

/**
 * Departments seed.
 */
class DepartmentsSeed extends AbstractSeed
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
                'id' =>Text::uuid(),
                'department_name' => 'Science',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")
            ],
            [
                'id' =>Text::uuid(),
                'department_name' => 'Commerce',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")
            ],
            [
                'id' =>Text::uuid(),
                'department_name' => 'Arts',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")
            ],
            [
                'id' =>Text::uuid(),
                'department_name' => 'Admins',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")
            ],
        ];

        $table = $this->table('departments');
        $table->insert($data)->save();
    }
}

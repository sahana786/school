<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateDepartments extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('departments',[
            'id' => false,
            'primary_key' => 'id'
        ]);
        $table
            ->addColumn('id','uuid')

            ->addColumn('department_name','string',[
                'null' => false,
                'length' => 15,
            ])
            ->addColumn('created','datetime')
            ->addColumn('modified','datetime')
            ->addIndex('department_name',[
                'unique' => true,
                'name' => 'uniq_department_name'
            ])
            ->create();
    }
}

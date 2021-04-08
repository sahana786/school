<?php
declare(strict_types=1);

use Cake\Auth\DefaultPasswordHasher;
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
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
        $table = $this->table('users',[
            'id' => false,
            'primary_key' => 'id'
        ]);
        $table
            ->addColumn('id','uuid')
            ->addColumn('user_name',\Phinx\Util\Literal::from('citext'),[
                'null' => false,
                'length' => 64,
            ])
            ->addColumn('role','string',[
                'null' => false,
                'length' => 10,
            ])
            ->addColumn('password','string',[
                'null' => false,
            ])
            ->addColumn('email','string',[
                'null' => false,
                'length' => 30,
            ])
            ->addColumn('department_id','uuid')
            ->addColumn('created','datetime')
            ->addColumn('modified','datetime')
            ->addIndex('email',[
                'unique' => true,
                'name' => 'uniq_email'
            ])
            ->create();
    }
}

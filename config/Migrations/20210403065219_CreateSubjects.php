<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateSubjects extends AbstractMigration
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
        $table = $this->table('subjects',[
            'id' => false,
            'primary_key' => 'id'
        ]);
        $table
            ->addColumn('id','uuid')
            ->addColumn('subject_name',\Phinx\Util\Literal::from('citext'),[
                'null' => false,
                'length' => 20,
            ])
            ->addColumn('description','text',[
                'null' => false,
                'length' => 70,
            ])
            ->addColumn('department_id', 'uuid')
            ->addColumn('created','datetime')
            ->addColumn('modified','datetime')
            ->create();
    }
}

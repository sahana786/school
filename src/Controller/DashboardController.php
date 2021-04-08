<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Table\DepartmentsTable;
use App\Model\Table\SubjectsTable;
use App\Model\Table\UsersTable;
use Cake\Database\Expression\QueryExpression;
use Cake\Database\Query;
use Cake\ORM\TableRegistry;

/**
 * Dashboard Controller
 *
 * @method \App\Model\Entity\Dashboard[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 * @property DepartmentsTable $departments
 * @property SubjectsTable $subjects
 * @property UsersTable $users
 */
class DashboardController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->subjects =TableRegistry::getTableLocator()->get('subjects');
        $this->users = TableRegistry::getTableLocator()->get('users');
        $users = $this->users->find()->contain(['Departments','Departments.Subjects'])
            ->where(function (QueryExpression $exp, Query $q) {
                return $exp->notEq('role', 'admin');
            });
      //  echo '<pre>';
      //  print_r($users);
       // die();
        $this->set('users',$users);
        $this->set('titleForLayout', __("Dashboard"));
    }

}

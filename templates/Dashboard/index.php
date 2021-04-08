<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject[]|\Cake\Collection\CollectionInterface $students
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
    <h2>DashBoard</h2>
    <h5><--<u>Each Students Corresponding Details</u>--></h5>
<table border="1" >
    <tr>
        <th  width="150">Name</th>
        <th  width="150">Role</th>
        <th  width="200">Email</th>
        <th  width="150">Department</th>
        <th  width="150">Subjects</th>
    </tr>
    <?php foreach ($users as $user){
        $p=$user->id;
        ?>
         <tr>
               <td width="150" align="center" valign="middle">
                   <?php echo h($user->user_name)?>
               </td>
                <td width="150">
                    <?php echo h($user->role)?>
                </td>
                <td  width="200">
                    <?php echo h($user->email)?>
                </td>
                <td width="150">
                  <?php /*echo $user->department->department_name, ['controller' => 'Departments', 'action' => 'view', $user->department->id])*/ ?>
                  <?php echo h($user->department->department_name)?>
                </td>
                <td width="150">
                   <?php  foreach($user->department->subjects as $val)
                   {
                       echo $val->subject_name."<br>";
                   }
                   ?>
                </td>

           </tr>
        <?php } ?>
</table>

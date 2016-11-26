<?php

namespace Kanboard\Plugin\KanboardSubtasksBoard\Model;

use Kanboard\Core\Base;
use Kanboard\Filter\TaskProjectFilter;
use Kanboard\Model\TaskModel;

class KanboardSubtasksBoardModel extends Base
{

    const TABLEsubtasks = 'subtasks';
	const TABLEtasks = 'tasks';

    public function KanboardSubtasksBoardGetAll($projectAccess)
    {

       return  $this->db
       ->table(self::TABLEtasks)
       ->columns(
               self::TABLEtasks.'.id',
               'tblSubt.task_id as tasks_id',
               'tblSubt.title as subtasks_title',
               'tblSubt.status as subtasks_status'
           )
           ->left(self::TABLEsubtasks, 'tblSubt',  'task_id', self::TABLEtasks, 'id')
           ->in(self::TABLEtasks.'.project_id', $projectAccess)

      ->findAll();
    }

}

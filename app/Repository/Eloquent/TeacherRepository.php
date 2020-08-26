<?php

namespace App\Repository\Eloquent;

use App\Models\Teacher;
use App\Repository\TeacherRepositoryInterface;
use Illuminate\Support\Collection;

class TeacherRepository extends BaseRepository implements TeacherRepositoryInterface
{

    /**
    * TeacherRepository constructor.
    *
    * @param Teacher $model
    */
   public function __construct(Teacher $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all()
   {
       return $this->model->all();    
   }

   public function whereId($id)
   {
       return $this->model->whereId($id);
   }

   public function newmodel()
   {
        return $this->model;
   }

}

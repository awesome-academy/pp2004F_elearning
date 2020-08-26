<?php

namespace App\Repository;

use App\Models\Teacher;
use Illuminate\Support\Collection;

interface TeacherRepositoryInterface
{
   public function all();

   public function whereId($id);

   public function newmodel();

}

<?php

namespace App\Repositories;

interface EloquentInterface
{
   public function all();
   public function createAll($param);
   public function getById($id);
}
?>

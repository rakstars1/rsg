<?php

namespace App\Repositories\MYSQL;

use App\RSGModel;
use App\Repositories\RSGInterface;

class RSGRepository extends BaseRepository implements RSGInterface
{
    public function __construct(RSGModel $RSG)
    {
        parent::__construct($RSG);
        $this->RSG = $RSG;
    }
}

?>

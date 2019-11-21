<?php
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 2019-11-19
 * Time: 18:26
 */

namespace App\Repositories;

use App\Repositories\Interfaces\AbsenceRepositoryInterface;

class AbsenceRepository extends BaseRepository implements AbsenceRepositoryInterface {
    public function __construct() {
        parent::__construct(app('App\Absence'));
    }
}

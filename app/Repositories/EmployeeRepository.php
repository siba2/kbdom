<?php
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 2019-11-19
 * Time: 18:26
 */

namespace App\Repositories;

use App\Repositories\Interfaces\EmployeeRepositoryInterface;

class EmployeeRepository extends BaseRepository implements EmployeeRepositoryInterface {
    public function __construct() {
        parent::__construct(app('App\Employee'));
    }
}

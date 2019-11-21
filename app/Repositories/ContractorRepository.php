<?php
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 2019-11-19
 * Time: 18:26
 */

namespace App\Repositories;

use App\Repositories\Interfaces\ContractorRepositoryInterface;

class ContractorRepository extends BaseRepository implements ContractorRepositoryInterface {
    public function __construct() {
        parent::__construct(app('App\Conractor'));
    }
}

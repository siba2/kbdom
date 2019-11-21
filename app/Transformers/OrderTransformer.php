<?php
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 2019-11-19
 * Time: 18:24
 */

namespace App\Transformers;


use Illuminate\Http\Request;

class OrderTransformer extends BaseTransformer
{
    /**
     * @param array $fillable
     * @return array
     * @throws \InvalidArgumentException
     */
    public function intoFillableArray(array $fillable): array {
        if (!($this->subject instanceof Request)) {
            throw new \InvalidArgumentException(__('intoFillableArray function only accepts Illuminate\Http\Request as subject'));
        }

        /** @var Request $request */
        $request = $this->subject;

        /** @var array $transformed */
        $transformed = $request->only($fillable);

        return $transformed;
    }
}

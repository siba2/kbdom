<?php

namespace App\Transformers;

class BaseTransformer {

    /**
     * @var mixed
     */
    protected $subject;

    /**
     * BaseTransformer constructor.
     * @param $subject mixed
     */
    public function __construct($subject) {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @param $subject
     * @return BaseTransformer
     */
    public static function transform($subject): BaseTransformer {
        return new static($subject);
    }


}

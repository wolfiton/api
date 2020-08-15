<?php

namespace App\Transformers\Snippets;

use App\Step;
use League\Fractal\TransformerAbstract;

class StepTransformer extends TransformerAbstract
{
    public function transform(Step $step)
    {
        return [
            'uuid' => $step->uuid,
            'order' => (float) $step->order,
            'title' => $step->title ?: '',
            'body' => $step->body ?: ''
        ];
    }
}

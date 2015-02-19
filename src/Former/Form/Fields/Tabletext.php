<?php
namespace Former\Form\Fields;
use Illuminate\Container\Container;
/**
 * Renders Plain Text Control
 */
class Tabletext extends Input
{

    protected $wrap = false;

    public function __construct(Container $app, $type, $name, $label, $value, $attributes)
    {
        $type = 'text';
        parent::__construct($app, $type, $name, $label, $value, $attributes);
    }



}




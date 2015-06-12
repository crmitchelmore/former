<?php
namespace Former\Form\Fields;
/*
 * My name is Bawksy you see
 */

use Former\Traits\Checkable;


class BootstrapSwitch extends Checkable
{

    /**
     * The current checkable type
     *
     * @var string
     */
    protected $checkable = 'checkbox';

    ////////////////////////////////////////////////////////////////////
    ////////////////////////// FIELD METHODS ///////////////////////////
    ////////////////////////////////////////////////////////////////////

    /**
     * Create a serie of checkboxes
     */
    public function checkboxes()
    {
        if ($this->isGrouped()) {
            // Remove any possible items added by the Populator.
            $this->items = array();
        }
        $this->items(func_get_args());

        return $this;
    }

    public function render()
    {
        return parent::render();
    }
}

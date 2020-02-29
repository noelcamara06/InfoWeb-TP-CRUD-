<?php

namespace projet_php;

/**
 * Class AbstractEntite
 * pour gérer l'attribut $persistant
 * @package CoupeDuMondeBasket
 */
abstract class AbstractEntite
{
    protected $persistant;

    /**
     * @return bool
     */
    public function getPersistant(): bool
    {
        return $this->persistant;
    }

    /**
     * @param bool $persistant
     * @return AbstractEntite
     */
    public function setPersistant(bool $persistant): AbstractEntite {
        $this->persistant = $persistant;
        return $this;
    }
}
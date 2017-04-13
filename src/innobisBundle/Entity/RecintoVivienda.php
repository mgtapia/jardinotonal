<?php

namespace innobisBundle\Entity;

/**
 * RecintoVivienda
 */
class RecintoVivienda
{
    /**
     * @var string
     */
    private $recinto;

    /**
     * @var integer
     */
    private $tipo;


    /**
     * Set recinto
     *
     * @param string $recinto
     *
     * @return RecintoVivienda
     */
    public function setRecinto($recinto)
    {
        $this->recinto = $recinto;

        return $this;
    }

    /**
     * Get recinto
     *
     * @return string
     */
    public function getRecinto()
    {
        return $this->recinto;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return RecintoVivienda
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}

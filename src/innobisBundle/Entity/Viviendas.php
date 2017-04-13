<?php

namespace innobisBundle\Entity;

/**
 * Viviendas
 */
class Viviendas
{
    /**
     * @var integer
     */
    private $tipo;

    /**
     * @var string
     */
    private $rutDueno;

    /**
     * @var integer
     */
    private $departamento;

    /**
     * @var string
     */
    private $torre;


    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Viviendas
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

    /**
     * Set rutDueno
     *
     * @param string $rutDueno
     *
     * @return Viviendas
     */
    public function setRutDueno($rutDueno)
    {
        $this->rutDueno = $rutDueno;

        return $this;
    }

    /**
     * Get rutDueno
     *
     * @return string
     */
    public function getRutDueno()
    {
        return $this->rutDueno;
    }

    /**
     * Set departamento
     *
     * @param integer $departamento
     *
     * @return Viviendas
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return integer
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set torre
     *
     * @param string $torre
     *
     * @return Viviendas
     */
    public function setTorre($torre)
    {
        $this->torre = $torre;

        return $this;
    }

    /**
     * Get torre
     *
     * @return string
     */
    public function getTorre()
    {
        return $this->torre;
    }
}

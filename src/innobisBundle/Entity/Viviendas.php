<?php

namespace innobisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Viviendas
 */
class Viviendas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

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

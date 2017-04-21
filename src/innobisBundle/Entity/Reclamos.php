<?php

namespace innobisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Reclamos
 *
 * @ORM\Table(name="reclamos")
 * @ORM\Entity(repositoryClass="innobisBundle\Repository\ReclamosRepository")
 */
class Reclamos
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
     * @var string
     *
     * @ORM\Column(name="rut", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $rut;

    /**
     * @var int
     *
     * @ORM\Column(name="departamento", type="integer")
     * @Assert\NotBlank()
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="torre", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $torre;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=255)
     */
    private $categoria;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_reclamo", type="date")
     */
    private $fechaReclamo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_solucion", type="date")
     */
    private $fechaSolucion;

    /**
     * @var int
     *
     * @ORM\Column(name="gravedad", type="integer")
     */
    private $gravedad;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="text")
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text")
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="recinto", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $recinto;


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
     * Set rut
     *
     * @param string $rut
     *
     * @return Reclamos
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set departamento
     *
     * @param integer $departamento
     *
     * @return Reclamos
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return int
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
     * @return Reclamos
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

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Reclamos
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set fechaReclamo
     *
     * @param \DateTime $fechaReclamo
     *
     * @return Reclamos
     */
    public function setFechaReclamo($fechaReclamo)
    {
        $this->fechaReclamo = $fechaReclamo;

        return $this;
    }

    /**
     * Get fechaReclamo
     *
     * @return \DateTime
     */
    public function getFechaReclamo()
    {
        return $this->fechaReclamo;
    }

    /**
     * Set fechaSolucion
     *
     * @param \DateTime $fechaSolucion
     *
     * @return Reclamos
     */
    public function setFechaSolucion($fechaSolucion)
    {
        $this->fechaSolucion = $fechaSolucion;

        return $this;
    }

    /**
     * Get fechaSolucion
     *
     * @return \DateTime
     */
    public function getFechaSolucion()
    {
        return $this->fechaSolucion;
    }

    /**
     * Set gravedad
     *
     * @param int $gravedad
     *
     * @return Reclamos
     */
    public function setGravedad($gravedad)
    {
        $this->gravedad = $gravedad;

        return $this;
    }

    /**
     * Get gravedad
     *
     * @return int
     */
    public function getGravedad()
    {
        return $this->gravedad;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     *
     * @return Reclamos
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Reclamos
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set recinto
     *
     * @param string $recinto
     *
     * @return Reclamos
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
}


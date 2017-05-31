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
     * @var int
     *
     */
    private $identificador;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_reclamo", type="date")
     * @Assert\NotBlank()
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
     * @var int
     *
     * @ORM\Column(name="lista", type="integer")
     */
    private $lista;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="text", length=80)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      max = 80,
     *      minMessage = "Tu mensaje debe tener al menos {{ limit }} caracteres",
     * )
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string")
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
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", length=255)
     */
    private $responsable;

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
     * Set identificador
     *
     * @param integer $identificador
     *
     * @return Reclamos
     */
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;

        return $this;
    }

    /**
     * Get identificador
     *
     * @return integer
     */
    public function getIdentificador()
    {
        return $this->identificador;
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
     * Set lista
     *
     * @param int $lista
     *
     * @return Reclamos
     */
    public function setLista($lista)
    {
        $this->lista = $lista;

        return $this;
    }

    /**
     * Get lista
     *
     * @return int
     */
    public function getLista()
    {
        return $this->lista;
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

    /**
     * Set responsable
     *
     * @param string $responsable
     *
     * @return Responsable
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    
     /**
     * @var string
     *
     * @ORM\Column(name="recinto2", type="string", length=255)
     */
    private $recinto2;       

    /**
     * Set recinto2
     *
     * @param string $recinto2
     *
     * @return Reclamos
     */
    public function setRecinto2($recinto2)
    {
        $this->recinto2 = $recinto2;

        return $this;
    }    

    /**
     * Get recinto2
     *
     * @return string
     */
    public function getRecinto2()
    {
        return $this->recinto2;
    }    

    /**
     * @var string
     *
     * @ORM\Column(name="detalle2", type="text")
     */
    private $detalle2;   

    /**
     * Set detalle2
     *
     * @param string $detalle2
     *
     * @return Reclamos
     */
    public function setDetalle2($detalle2)
    {
        $this->detalle2 = $detalle2;

        return $this;
    }    

    /**
     * Get detalle2
     *
     * @return string
     */
    public function getDetalle2()
    {
        return $this->detalle2;
    } 
 
    /**
     * @var string
     *
     * @ORM\Column(name="recinto3", type="string", length=255)
     */
    private $recinto3;       

    /**
     * Set recinto3
     *
     * @param string $recinto3
     *
     * @return Reclamos
     */
    public function setRecinto3($recinto3)
    {
        $this->recinto3 = $recinto3;

        return $this;
    }    /**
     * Get recinto3
     *
     * @return string
     */
    public function getRecinto3()
    {
        return $this->recinto3;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle3", type="text")
     */
    private $detalle3;   /**
     * Set detalle3
     *
     * @param string $detalle3
     *
     * @return Reclamos
     */
    public function setDetalle3($detalle3)
    {
        $this->detalle3 = $detalle3;

        return $this;
    }    /**
     * Get detalle3
     *
     * @return string
     */
    public function getDetalle3()
    {
        return $this->detalle3;
    } 
    /**
     * @var string
     *
     * @ORM\Column(name="recinto4", type="string", length=255)
     */
    private $recinto4;       /**
     * Set recinto4
     *
     * @param string $recinto4
     *
     * @return Reclamos
     */
    public function setRecinto4($recinto4)
    {
        $this->recinto4 = $recinto4;

        return $this;
    }    /**
     * Get recinto4
     *
     * @return string
     */
    public function getRecinto4()
    {
        return $this->recinto4;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle4", type="text")
     */
    private $detalle4;   /**
     * Set detalle4
     *
     * @param string $detalle4
     *
     * @return Reclamos
     */
    public function setDetalle4($detalle4)
    {
        $this->detalle4 = $detalle4;

        return $this;
    }    /**
     * Get detalle4
     *
     * @return string
     */
    public function getDetalle4()
    {
        return $this->detalle4;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto5", type="string", length=255)
     */
    private $recinto5;       /**
     * Set recinto5
     *
     * @param string $recinto5
     *
     * @return Reclamos
     */
    public function setRecinto5($recinto5)
    {
        $this->recinto5 = $recinto5;

        return $this;
    }    /**
     * Get recinto5
     *
     * @return string
     */
    public function getRecinto5()
    {
        return $this->recinto5;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle5", type="text")
     */
    private $detalle5;   /**
     * Set detalle5
     *
     * @param string $detalle5
     *
     * @return Reclamos
     */
    public function setDetalle5($detalle5)
    {
        $this->detalle5 = $detalle5;

        return $this;
    }    /**
     * Get detalle5
     *
     * @return string
     */
    public function getDetalle5()
    {
        return $this->detalle5;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto6", type="string", length=255)
     */
    private $recinto6;       /**
     * Set recinto6
     *
     * @param string $recinto6
     *
     * @return Reclamos
     */
    public function setRecinto6($recinto6)
    {
        $this->recinto6 = $recinto6;

        return $this;
    }    /**
     * Get recinto6
     *
     * @return string
     */
    public function getRecinto6()
    {
        return $this->recinto6;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle6", type="text")
     */
    private $detalle6;   /**
     * Set detalle6
     *
     * @param string $detalle6
     *
     * @return Reclamos
     */
    public function setDetalle6($detalle6)
    {
        $this->detalle6 = $detalle6;

        return $this;
    }    /**
     * Get detalle6
     *
     * @return string
     */
    public function getDetalle6()
    {
        return $this->detalle6;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto7", type="string", length=255)
     */
    private $recinto7;       /**
     * Set recinto7
     *
     * @param string $recinto7
     *
     * @return Reclamos
     */
    public function setRecinto7($recinto7)
    {
        $this->recinto7 = $recinto7;

        return $this;
    }    /**
     * Get recinto7
     *
     * @return string
     */
    public function getRecinto7()
    {
        return $this->recinto7;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle7", type="text")
     */
    private $detalle7;   /**
     * Set detalle7
     *
     * @param string $detalle7
     *
     * @return Reclamos
     */
    public function setDetalle7($detalle7)
    {
        $this->detalle7 = $detalle7;

        return $this;
    }    /**
     * Get detalle7
     *
     * @return string
     */
    public function getDetalle7()
    {
        return $this->detalle7;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto8", type="string", length=255)
     */
    private $recinto8;       /**
     * Set recinto8
     *
     * @param string $recinto8
     *
     * @return Reclamos
     */
    public function setRecinto8($recinto8)
    {
        $this->recinto8 = $recinto8;

        return $this;
    }    /**
     * Get recinto8
     *
     * @return string
     */
    public function getRecinto8()
    {
        return $this->recinto8;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle8", type="text")
     */
    private $detalle8;   /**
     * Set detalle8
     *
     * @param string $detalle8
     *
     * @return Reclamos
     */
    public function setDetalle8($detalle8)
    {
        $this->detalle8 = $detalle8;

        return $this;
    }    /**
     * Get detalle8
     *
     * @return string
     */
    public function getDetalle8()
    {
        return $this->detalle8;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto9", type="string", length=255)
     */
    private $recinto9;       /**
     * Set recinto9
     *
     * @param string $recinto9
     *
     * @return Reclamos
     */
    public function setRecinto9($recinto9)
    {
        $this->recinto9 = $recinto9;

        return $this;
    }    /**
     * Get recinto9
     *
     * @return string
     */
    public function getRecinto9()
    {
        return $this->recinto9;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle9", type="text")
     */
    private $detalle9;   /**
     * Set detalle9
     *
     * @param string $detalle9
     *
     * @return Reclamos
     */
    public function setDetalle9($detalle9)
    {
        $this->detalle9 = $detalle9;

        return $this;
    }    /**
     * Get detalle9
     *
     * @return string
     */
    public function getDetalle9()
    {
        return $this->detalle9;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto10", type="string", length=255)
     */
    private $recinto10;      /**
     * Set recinto10
     *
     * @param string $recinto10
     *
     * @return Reclamos
     */
    public function setRecinto10($recinto10)
    {
        $this->recinto10 = $recinto10;

        return $this;
    }    /**
     * Get recinto10
     *
     * @return string
     */
    public function getRecinto10()
    {
        return $this->recinto10;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle10", type="text")
     */
    private $detalle10;      /**
     * Set detalle10
     *
     * @param string $detalle10
     *
     * @return Reclamos
     */
    public function setDetalle10($detalle10)
    {
        $this->detalle10 = $detalle10;

        return $this;
    }    /**
     * Get detalle10
     *
     * @return string
     */
    public function getDetalle10()
    {
        return $this->detalle10;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto11", type="string", length=255)
     */
    private $recinto11;      /**
     * Set recinto11
     *
     * @param string $recinto11
     *
     * @return Reclamos
     */
    public function setRecinto11($recinto11)
    {
        $this->recinto11 = $recinto11;

        return $this;
    }    /**
     * Get recinto11
     *
     * @return string
     */
    public function getRecinto11()
    {
        return $this->recinto11;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle11", type="text")
     */
    private $detalle11;      /**
     * Set detalle11
     *
     * @param string $detalle11
     *
     * @return Reclamos
     */
    public function setDetalle11($detalle11)
    {
        $this->detalle11 = $detalle11;

        return $this;
    }    /**
     * Get detalle11
     *
     * @return string
     */
    public function getDetalle11()
    {
        return $this->detalle11;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto12", type="string", length=255)
     */
    private $recinto12;      /**
     * Set recinto12
     *
     * @param string $recinto12
     *
     * @return Reclamos
     */
    public function setRecinto12($recinto12)
    {
        $this->recinto12 = $recinto12;

        return $this;
    }    /**
     * Get recinto12
     *
     * @return string
     */
    public function getRecinto12()
    {
        return $this->recinto12;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle12", type="text")
     */
    private $detalle12;      /**
     * Set detalle12
     *
     * @param string $detalle12
     *
     * @return Reclamos
     */
    public function setDetalle12($detalle12)
    {
        $this->detalle12 = $detalle12;

        return $this;
    }    /**
     * Get detalle12
     *
     * @return string
     */
    public function getDetalle12()
    {
        return $this->detalle12;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto13", type="string", length=255)
     */
    private $recinto13;      /**
     * Set recinto13
     *
     * @param string $recinto13
     *
     * @return Reclamos
     */
    public function setRecinto13($recinto13)
    {
        $this->recinto13 = $recinto13;

        return $this;
    }    /**
     * Get recinto13
     *
     * @return string
     */
    public function getRecinto13()
    {
        return $this->recinto13;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle13", type="text")
     */
    private $detalle13;      /**
     * Set detalle13
     *
     * @param string $detalle13
     *
     * @return Reclamos
     */
    public function setDetalle13($detalle13)
    {
        $this->detalle13 = $detalle13;

        return $this;
    }    /**
     * Get detalle13
     *
     * @return string
     */
    public function getDetalle13()
    {
        return $this->detalle13;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto14", type="string", length=255)
     */
    private $recinto14;      /**
     * Set recinto14
     *
     * @param string $recinto14
     *
     * @return Reclamos
     */
    public function setRecinto14($recinto14)
    {
        $this->recinto14 = $recinto14;

        return $this;
    }    /**
     * Get recinto14
     *
     * @return string
     */
    public function getRecinto14()
    {
        return $this->recinto14;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle14", type="text")
     */
    private $detalle14;      /**
     * Set detalle14
     *
     * @param string $detalle14
     *
     * @return Reclamos
     */
    public function setDetalle14($detalle14)
    {
        $this->detalle14 = $detalle14;

        return $this;
    }    /**
     * Get detalle14
     *
     * @return string
     */
    public function getDetalle14()
    {
        return $this->detalle14;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto15", type="string", length=255)
     */
    private $recinto15;      /**
     * Set recinto15
     *
     * @param string $recinto15
     *
     * @return Reclamos
     */
    public function setRecinto15($recinto15)
    {
        $this->recinto15 = $recinto15;

        return $this;
    }    /**
     * Get recinto15
     *
     * @return string
     */
    public function getRecinto15()
    {
        return $this->recinto15;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle15", type="text")
     */
    private $detalle15;      /**
     * Set detalle15
     *
     * @param string $detalle15
     *
     * @return Reclamos
     */
    public function setDetalle15($detalle15)
    {
        $this->detalle15 = $detalle15;

        return $this;
    }    /**
     * Get detalle15
     *
     * @return string
     */
    public function getDetalle15()
    {
        return $this->detalle15;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto16", type="string", length=255)
     */
    private $recinto16;      /**
     * Set recinto16
     *
     * @param string $recinto16
     *
     * @return Reclamos
     */
    public function setRecinto16($recinto16)
    {
        $this->recinto16 = $recinto16;

        return $this;
    }    /**
     * Get recinto16
     *
     * @return string
     */
    public function getRecinto16()
    {
        return $this->recinto16;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle16", type="text")
     */
    private $detalle16;      /**
     * Set detalle16
     *
     * @param string $detalle16
     *
     * @return Reclamos
     */
    public function setDetalle16($detalle16)
    {
        $this->detalle16 = $detalle16;

        return $this;
    }    /**
     * Get detalle16
     *
     * @return string
     */
    public function getDetalle16()
    {
        return $this->detalle16;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto17", type="string", length=255)
     */
    private $recinto17;      /**
     * Set recinto17
     *
     * @param string $recinto17
     *
     * @return Reclamos
     */
    public function setRecinto17($recinto17)
    {
        $this->recinto17 = $recinto17;

        return $this;
    }    /**
     * Get recinto17
     *
     * @return string
     */
    public function getRecinto17()
    {
        return $this->recinto17;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle17", type="text")
     */
    private $detalle17;      /**
     * Set detalle17
     *
     * @param string $detalle17
     *
     * @return Reclamos
     */
    public function setDetalle17($detalle17)
    {
        $this->detalle17 = $detalle17;

        return $this;
    }    /**
     * Get detalle17
     *
     * @return string
     */
    public function getDetalle17()
    {
        return $this->detalle17;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto18", type="string", length=255)
     */
    private $recinto18;      /**
     * Set recinto18
     *
     * @param string $recinto18
     *
     * @return Reclamos
     */
    public function setRecinto18($recinto18)
    {
        $this->recinto18 = $recinto18;

        return $this;
    }    /**
     * Get recinto18
     *
     * @return string
     */
    public function getRecinto18()
    {
        return $this->recinto18;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle18", type="text")
     */
    private $detalle18;      /**
     * Set detalle18
     *
     * @param string $detalle18
     *
     * @return Reclamos
     */
    public function setDetalle18($detalle18)
    {
        $this->detalle18 = $detalle18;

        return $this;
    }    /**
     * Get detalle18
     *
     * @return string
     */
    public function getDetalle18()
    {
        return $this->detalle18;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto19", type="string", length=255)
     */
    private $recinto19;      /**
     * Set recinto19
     *
     * @param string $recinto19
     *
     * @return Reclamos
     */
    public function setRecinto19($recinto19)
    {
        $this->recinto19 = $recinto19;

        return $this;
    }    /**
     * Get recinto19
     *
     * @return string
     */
    public function getRecinto19()
    {
        return $this->recinto19;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle19", type="text")
     */
    private $detalle19;      /**
     * Set detalle19
     *
     * @param string $detalle19
     *
     * @return Reclamos
     */
    public function setDetalle19($detalle19)
    {
        $this->detalle19 = $detalle19;

        return $this;
    }    /**
     * Get detalle19
     *
     * @return string
     */
    public function getDetalle19()
    {
        return $this->detalle19;
    } 
 /**
     * @var string
     *
     * @ORM\Column(name="recinto20", type="string", length=255)
     */
    private $recinto20;      /**
     * Set recinto20
     *
     * @param string $recinto20
     *
     * @return Reclamos
     */
    public function setRecinto20($recinto20)
    {
        $this->recinto20 = $recinto20;

        return $this;
    }    /**
     * Get recinto20
     *
     * @return string
     */
    public function getRecinto20()
    {
        return $this->recinto20;
    }    /**
     * @var string
     *
     * @ORM\Column(name="detalle20", type="text")
     */
    private $detalle20;      /**
     * Set detalle20
     *
     * @param string $detalle20
     *
     * @return Reclamos
     */
    public function setDetalle20($detalle20)
    {
        $this->detalle20 = $detalle20;

        return $this;
    }    /**
     * Get detalle20
     *
     * @return string
     */
    public function getDetalle20()
    {
        return $this->detalle20;
    } 
 
}


<?php

namespace ProductosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="ProductosBundle\Entity\ProductoRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Producto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=20)
     * @Assert\Choice(choices = {"PERECEDERO", "NO PERECEDERO"})
     * @Assert\NotBlank()
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=10)
     * @Assert\NotBlank()
     */
    private $codigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavencimiento", type="datetimetz", nullable=true)
     */
    private $fechavencimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="observacioncodigo", type="string", length=200, nullable=true)
     */
    private $observacioncodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     * @Assert\NotBlank()
     */
    private $cantidad;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Producto
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Producto
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set fechavencimiento
     *
     * @param \DateTime $fechavencimiento
     * @return Producto
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    /**
     * Get fechavencimiento
     *
     * @return \DateTime 
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }

    /**
     * Set observacioncodigo
     *
     * @param string $observacioncodigo
     * @return Producto
     */
    public function setObservacioncodigo($observacioncodigo)
    {
        $this->observacioncodigo = $observacioncodigo;

        return $this;
    }

    /**
     * Get observacioncodigo
     *
     * @return string 
     */
    public function getObservacioncodigo()
    {
        return $this->observacioncodigo;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Producto
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}

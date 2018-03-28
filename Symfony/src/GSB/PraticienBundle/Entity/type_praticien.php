<?php

namespace GSB\PraticienBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * type_praticien
 *
 * @ORM\Table(name="type_praticien")
 * @ORM\Entity(repositoryClass="GSB\PraticienBundle\Repository\type_praticienRepository")
 */
class type_praticien
{
    /**
     * @var int
     *
     * @ORM\Column(name="typCode", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $typCode;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Typ_Libelle", type="string", length=255, nullable=true)
     */
    private $typLibelle;

    /**
     * Set typCode
     *
     * @param integer $typCode
     *
     * @return type_praticien
     */
    public function setTypCode($typCode)
    {
        $this->typCode = $typCode;

        return $this;
    }

    /**
     * Get typCode
     *
     * @return int
     */
    public function getTypCode()
    {
        return $this->typCode;
    }

    /**
     * Set typLibelle
     *
     * @param string $typLibelle
     *
     * @return type_praticien
     */
    public function setTypLibelle($typLibelle)
    {
        $this->typLibelle = $typLibelle;

        return $this;
    }

    /**
     * Get typLibelle
     *
     * @return string
     */
    public function getTypLibelle()
    {
        return $this->typLibelle;
    }

    public function __toString(){
        return $this->typLibelle;
    }
}

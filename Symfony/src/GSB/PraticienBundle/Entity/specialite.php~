<?php

namespace GSB\PraticienBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * specialite
 *
 * @ORM\Table(name="specialite")
 * @ORM\Entity(repositoryClass="GSB\PraticienBundle\Repository\specialiteRepository")
 */
class specialite
{
    /**
     * @var int
     *
     * @ORM\Column(name="Spe_Code", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $speCode;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Spe_libelle", type="string", length=255, nullable=true)
     */
    private $speLibelle;

    /**
     * Set speCode
     *
     * @param integer $speCode
     *
     * @return specialite
     */
    public function setSpeCode($speCode)
    {
        $this->speCode = $speCode;

        return $this;
    }

    /**
     * Get speCode
     *
     * @return int
     */
    public function getSpeCode()
    {
        return $this->speCode;
    }

    /**
     * Set speLibelle
     *
     * @param string $speLibelle
     *
     * @return specialite
     */
    public function setSpeLibelle($speLibelle)
    {
        $this->speLibelle = $speLibelle;

        return $this;
    }

    /**
     * Get speLibelle
     *
     * @return string
     */
    public function getSpeLibelle()
    {
        return $this->speLibelle;
    }
}

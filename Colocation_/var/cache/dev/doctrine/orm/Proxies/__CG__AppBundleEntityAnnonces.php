<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Annonces extends \AppBundle\Entity\Annonces implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'innitiateur', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'colocataires', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'adresse', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'prix', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'dateDebut', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'nombreDeChambre'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'innitiateur', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'colocataires', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'adresse', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'prix', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'dateDebut', '' . "\0" . 'AppBundle\\Entity\\Annonces' . "\0" . 'nombreDeChambre'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Annonces $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setInnitiateur($innitiateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInnitiateur', [$innitiateur]);

        return parent::setInnitiateur($innitiateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getInnitiateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInnitiateur', []);

        return parent::getInnitiateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebut($dateDebut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebut', [$dateDebut]);

        return parent::setDateDebut($dateDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebut', []);

        return parent::getDateDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreDeChambre($nombreDeChambre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreDeChambre', [$nombreDeChambre]);

        return parent::setNombreDeChambre($nombreDeChambre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreDeChambre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreDeChambre', []);

        return parent::getNombreDeChambre();
    }

    /**
     * {@inheritDoc}
     */
    public function decrNbChambres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'decrNbChambres', []);

        return parent::decrNbChambres();
    }

    /**
     * {@inheritDoc}
     */
    public function incrNbChambres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'incrNbChambres', []);

        return parent::incrNbChambres();
    }

    /**
     * {@inheritDoc}
     */
    public function addColocataire(\AppBundle\Entity\User $colocataire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addColocataire', [$colocataire]);

        return parent::addColocataire($colocataire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeColocataire(\AppBundle\Entity\User $colocataire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeColocataire', [$colocataire]);

        return parent::removeColocataire($colocataire);
    }

    /**
     * {@inheritDoc}
     */
    public function getColocataires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColocataires', []);

        return parent::getColocataires();
    }

}

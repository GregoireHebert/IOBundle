<?php

namespace Gheb\IOBundle\Inputs;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityNotFoundException;

/**
 * Class AbstractInput
 * @author  Grégoire Hébert <gregoire@opo.fr>
 * @package Gheb\IOBundle\Inputs
 */
abstract class AbstractInput
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * AbstractInput constructor.
     *
     * @param EntityManager $em
     *
     * @throws EntityNotFoundException
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Return the InputName for command retrieval
     * @return string
     */
    public abstract function getName();

    /**
     * Getting the value of the input
     * @return mixed
     */
    public abstract function getValue();
}

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Command\UpdateSchemaCommand' shared service.

return $this->services['PrestaShopBundle\\Command\\UpdateSchemaCommand'] = new \PrestaShopBundle\Command\UpdateSchemaCommand('sql8689732', 'ps_', ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

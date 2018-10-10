<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.registration.controller' shared service.

$this->services['fos_user.registration.controller'] = $instance = new \FOS\UserBundle\Controller\RegistrationController(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.registration.form.factory']) ? $this->services['fos_user.registration.form.factory'] : $this->load('getFosUser_Registration_Form_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load('getFosUser_UserManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});

$instance->setContainer($this);

return $instance;

<?php
// auto-generated by sfValidatorConfigHandler
// date: 2018/02/13 03:05:45

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
  $validators = array();
  $context->getRequest()->setAttribute('fillin', array (
), 'symfony/filter');
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $validators = array();
  $validators['userValidator'] = new sfGuardUserValidator();
  $validators['userValidator']->initialize($context, array (
  'password_field' => 'password',
  'remember_field' => 'remember',
));
  $validatorManager->registerName('username', 1, 'Username harus diisi', null, null, false);
  $validatorManager->registerValidator('username', $validators['userValidator'], null);
  $validatorManager->registerName('password', 1, 'Password harus diisi', null, null, false);
  $context->getRequest()->setAttribute('fillin', array (
), 'symfony/filter');
}

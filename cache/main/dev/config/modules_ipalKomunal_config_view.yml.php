<?php
// auto-generated by sfViewConfigHandler
// date: 2018/02/07 03:52:25
$context  = $this->getContext();
$response = $context->getResponse();


  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'symfony project', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'symfony project', false, false);
  $response->addMeta('keywords', 'symfony, project', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('bootstrap', '', array ());
  $response->addStylesheet('bootstrap.min', '', array ());
  $response->addStylesheet('sb-admin', '', array ());
  $response->addStylesheet('plugins/morris', '', array ());



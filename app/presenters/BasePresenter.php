<?php

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{


  protected function startup() {
    parent::startup();
    if (strpos($this->getHttpRequest()->getUrl(), "/spicenter/www") !== false)
      $this->redirectUrl('/spicenter');
  }
}

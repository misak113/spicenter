<?php

use Nette\Application\Routers\RouteList,
	Nette\Application\Routers\Route,
	Nette\Application\Routers\SimpleRouter;


/**
 * Router factory.
 */
class RouterFactory
{
    /** @var array  */
    protected $presenterTable = array(
        'spi-center' => 'SpiCenter',
    );
    /** @var array  */
    protected $actionTable = array(
        'nastroj' => 'tool',
        'nastroje' => 'tools',
        'metodika' => 'methodology',
        'metodiky' => 'methodologies',
        'predmet' => 'class',
    );
    /** @var array  */
    protected $idTable = array(
        'harmonogram' => 'schedule',
        'podminky' => 'conditions',
        'prace' => 'works',
        'publikace' => 'bibliography',
    );

	/**
	 * @return Nette\Application\IRouter
	 */
	public function createRouter()
	{
		$router = new RouteList();
        $router[] = new Route('<presenter>/<action>[/<id>]', array(
            'presenter' => array(
                Route::VALUE => 'SpiCenter',
                Route::FILTER_TABLE => $this->presenterTable,
            ),
            'action' => array(
                Route::VALUE => 'default',
                Route::FILTER_TABLE => $this->actionTable,
            ),
            'id' => array(
                Route::VALUE => 'default',
                Route::FILTER_TABLE => $this->idTable,
            ),
        ));
        $router[] = new Route('<presenter>/<action>[/<id>]', 'SpiCenter:default');
		$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
		return $router;
	}

}

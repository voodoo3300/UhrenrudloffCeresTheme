<?php
 
namespace UhrenrudloffCeresTheme\Providers;
 
use Plenty\Plugin\ServiceProvider;
 
class UhrenrudloffCeresThemeServiceProvider extends ServiceProvider
{
 
	/**
	 * Register the service provider.
	 */
	public function register()
	{
 
	}

	public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
		$this->overrideTemplate("Ceres::Widgets.Header.TopBarWidget", "MyTheme::Widgets.Header.CustomTopBarWidget");	
    }


}
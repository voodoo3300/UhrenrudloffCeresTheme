<?php
 
namespace UhrenrudloffCeresTheme\Providers;
 
//use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;
use IO\Helper\TemplateContainer;
use IO\Helper\ComponentContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\ConfigRepository;
//class UhrenrudloffCeresThemeServiceProvider extends ServiceProvider
class UhrenrudloffCeresThemeServiceProvider extends TemplateServiceProvider
{
	const PRIORITY = 0;
 	/**
	 * Register the service provider.
	 */
	public function register()
	{
 
	}

	public function boot(Twig $twig, Dispatcher $eventDispatcher, ConfigRepository $config)
    {
		$this->overrideTemplate("Ceres::Widgets.Header.TopBarWidget", "UhrenrudloffCeresTheme::Widgets.Header.CustomTopBarWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.OrderPropertyWidget", "UhrenrudloffCeresTheme::Widgets.Item.CustomOrderPropertyWidget");	
    }
}
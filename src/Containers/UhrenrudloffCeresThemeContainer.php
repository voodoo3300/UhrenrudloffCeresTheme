<?php
 
namespace UhrenrudloffCeresTheme\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class UhrenrudloffCeresThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('UhrenrudloffCeresTheme::content.UhrenrudloffCeresTheme');
    }
}
<?php
namespace Sovereign\Service;

use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;

class YoutubePlayerServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
    /**
     * The provides array is a way to let the container
     * know that a service is provided by this service
     * provider. Every service that is registered via
     * this service provider must have an alias added
     * to this array or it will be ignored.
     *
     * @var array
     */
    protected $provides = [];

    /**
     * In much the same way, this method has access to the container
     * itself and can interact with it however you wish, the difference
     * is that the boot method is invoked as soon as you register
     * the service provider with the container meaning that everything
     * in this method is eagerly loaded.
     *
     * If you wish to apply inflectors or register further service providers
     * from this one, it must be from a bootable service provider like
     * this one, otherwise they will be ignored.
     */
    public function boot()
    {
        $app = $this->getContainer()->get('app');
        
        $app->addPlugin('onVoice', 'youtube', "\\Sovereign\\Plugins\\onVoice\\youtube", 1, 'Plays whatever is linked in the youtube link', '<youtubeLink>', null);
        $app->addPlugin('onVoice', 'yt', "\\Sovereign\\Plugins\\onVoice\\youtube", 1, 'Plays whatever is linked in the youtube link', '<youtubeLink>', null);
    }

    /**
     * This is where the magic happens, within the method you can
     * access the container and register or retrieve anything
     * that you need to, but remember, every alias registered
     * within this method must be declared in the `$provides` array.
     */
    public function register() { }
}

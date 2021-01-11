<?php

namespace Container9uGTvOm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcChallenge_App_KernelTestDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'behat.service_container' => true,
            'kernel' => true,
        ];
        $this->methodMap = [
            'Challenge\\App\\Controller\\HealthCheck\\StatusGetController' => 'getStatusGetControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'Tests\\Shared\\Infrastructure\\Behat\\ApiContext' => 'getApiContextService',
            'Tests\\Shared\\Infrastructure\\Behat\\ApplicationFeatureContext' => 'getApplicationFeatureContextService',
            'behat.driver.service_container' => 'getBehat_Driver_ServiceContainerService',
            'behat.mink' => 'getBehat_MinkService',
            'behat.mink.default_session' => 'getBehat_Mink_DefaultSessionService',
            'behat.mink.parameters' => 'getBehat_Mink_ParametersService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'http_kernel' => 'getHttpKernelService',
            'message_bus' => 'getMessageBusService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'services_resetter' => 'getServicesResetterService',
            'test.client' => 'getTest_ClientService',
            'test.private_services_locator' => 'getTest_PrivateServicesLocatorService',
            'test.service_container' => 'getTest_ServiceContainerService',
            'translator' => 'getTranslatorService',
            'validator' => 'getValidatorService',
        ];
        $this->aliases = [
            'messenger.default_bus' => 'message_bus',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/KernelInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/RebootableInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Kernel.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Kernel.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/ErrorListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/AbstractTestSessionListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/TestSessionListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/AbstractLogger.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Log/Logger.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/DependencyInjection/CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Routing/Router.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || class_alias(__NAMESPACE__."\\$class", $class, false);

        return $factory();
    }

    /**
     * Gets the public 'Challenge\App\Controller\HealthCheck\StatusGetController' shared autowired service.
     *
     * @return \Challenge\App\Controller\HealthCheck\StatusGetController
     */
    protected function getStatusGetControllerService()
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/HealthCheck/StatusGetController.php';

        return $this->services['Challenge\\App\\Controller\\HealthCheck\\StatusGetController'] = new \Challenge\App\Controller\HealthCheck\StatusGetController();
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Controller/RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Controller/TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(NULL, NULL);
    }

    /**
     * Gets the public 'Tests\Shared\Infrastructure\Behat\ApiContext' shared autowired service.
     *
     * @return \Tests\Shared\Infrastructure\Behat\ApiContext
     */
    protected function getApiContextService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 6).'/vendor/behat/mink-extension/src/Behat/MinkExtension/Context/MinkAwareContext.php';
        include_once \dirname(__DIR__, 6).'/vendor/behat/mink-extension/src/Behat/MinkExtension/Context/RawMinkContext.php';
        include_once \dirname(__DIR__, 6).'/tests/src/Shared/Infrastructure/Behat/ApiContext.php';

        return $this->services['Tests\\Shared\\Infrastructure\\Behat\\ApiContext'] = new \Tests\Shared\Infrastructure\Behat\ApiContext(($this->services['behat.mink.default_session'] ?? $this->getBehat_Mink_DefaultSessionService()));
    }

    /**
     * Gets the public 'Tests\Shared\Infrastructure\Behat\ApplicationFeatureContext' shared autowired service.
     *
     * @return \Tests\Shared\Infrastructure\Behat\ApplicationFeatureContext
     */
    protected function getApplicationFeatureContextService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 6).'/tests/src/Shared/Infrastructure/Behat/ApplicationFeatureContext.php';

        return $this->services['Tests\\Shared\\Infrastructure\\Behat\\ApplicationFeatureContext'] = new \Tests\Shared\Infrastructure\Behat\ApplicationFeatureContext();
    }

    /**
     * Gets the public 'behat.driver.service_container' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected function getBehat_Driver_ServiceContainerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['behat.driver.service_container'] = $this->createProxy('ContainerInterface_7a5418d', function () {
                return \ContainerInterface_7a5418d::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getBehat_Driver_ServiceContainerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return [[($this->services['behat.service_container'] ?? $this->get('behat.service_container', 1))->get('fob_symfony.driver_kernel'), 'getContainer'](), 'get']('test.service_container');
    }

    /**
     * Gets the public 'behat.mink' shared service.
     *
     * @return \Behat\Mink\Mink
     */
    protected function getBehat_MinkService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['behat.mink'] = $this->createProxy('Mink_ecc9ff5', function () {
                return \Mink_ecc9ff5::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getBehat_MinkService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return ($this->services['behat.service_container'] ?? $this->get('behat.service_container', 1))->get('fob_symfony.mink');
    }

    /**
     * Gets the public 'behat.mink.default_session' shared service.
     *
     * @return \Behat\Mink\Session
     */
    protected function getBehat_Mink_DefaultSessionService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['behat.mink.default_session'] = $this->createProxy('Session_4e1eb92', function () {
                return \Session_4e1eb92::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getBehat_Mink_DefaultSessionService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return ($this->services['behat.mink'] ?? $this->getBehat_MinkService())->getSession();
    }

    /**
     * Gets the public 'behat.mink.parameters' shared service.
     *
     * @return \FriendsOfBehat\SymfonyExtension\Mink\MinkParameters
     */
    protected function getBehat_Mink_ParametersService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['behat.mink.parameters'] = $this->createProxy('MinkParameters_4b72c85', function () {
                return \MinkParameters_4b72c85::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getBehat_Mink_ParametersService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return ($this->services['behat.service_container'] ?? $this->get('behat.service_container', 1))->get('fob_symfony.mink.parameters');
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('s9LYSF6roM', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService())]);
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService())]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('A4LOEE4aqP', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 1 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 2 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
        }, 3), true, ($this->targetDir.''.'/srcChallenge_App_KernelTestDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.messenger_consume_messages' => ['privates', 'console.command.messenger_consume_messages', 'getConsole_Command_MessengerConsumeMessagesService', false],
            'console.command.messenger_debug' => ['privates', 'console.command.messenger_debug', 'getConsole_Command_MessengerDebugService', false],
            'console.command.messenger_setup_transports' => ['privates', 'console.command.messenger_setup_transports', 'getConsole_Command_MessengerSetupTransportsService', false],
            'console.command.messenger_stop_workers' => ['privates', 'console.command.messenger_stop_workers', 'getConsole_Command_MessengerStopWorkersService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
        ], [
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.messenger_consume_messages' => 'Symfony\\Component\\Messenger\\Command\\ConsumeMessagesCommand',
            'console.command.messenger_debug' => 'Symfony\\Component\\Messenger\\Command\\DebugCommand',
            'console.command.messenger_setup_transports' => 'Symfony\\Component\\Messenger\\Command\\SetupTransportsCommand',
            'console.command.messenger_stop_workers' => 'Symfony\\Component\\Messenger\\Command\\StopWorkersCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'messenger:consume' => 'console.command.messenger_consume_messages', 'messenger:consume-messages' => 'console.command.messenger_consume_messages', 'messenger:setup-transports' => 'console.command.messenger_setup_transports', 'debug:messenger' => 'console.command.messenger_debug', 'messenger:stop-workers' => 'console.command.messenger_stop_workers', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ErrorController.php';

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['Shared\\Infrastructure\\Symfony\\ApiExceptionListener'] ?? $this->getApiExceptionListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelRequest'], 192);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerMessageFailedEvent', [0 => function () {
            return ($this->privates['messenger.retry.send_failed_message_for_retry_listener'] ?? $this->getMessenger_Retry_SendFailedMessageForRetryListenerService());
        }, 1 => 'onMessageFailed'], 100);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerStartedEvent', [0 => function () {
            return ($this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] ?? $this->getMessenger_Listener_StopWorkerOnRestartSignalListenerService());
        }, 1 => 'onWorkerStarted'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerRunningEvent', [0 => function () {
            return ($this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] ?? $this->getMessenger_Listener_StopWorkerOnRestartSignalListenerService());
        }, 1 => 'onWorkerRunning'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['controller_resolver'] ?? $this->getControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['argument_resolver'] ?? $this->getArgumentResolverService()));
    }

    /**
     * Gets the public 'message_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\MessageBus
     */
    protected function getMessageBusService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/MessageBusInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/MessageBus.php';

        return $this->services['message_bus'] = new \Symfony\Component\Messenger\MessageBus(new RewindableGenerator(function () {
            yield 0 => ($this->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] ?? ($this->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] = new \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware('messenger.bus.default')));
            yield 1 => ($this->privates['messenger.middleware.reject_redelivered_message_middleware'] ?? ($this->privates['messenger.middleware.reject_redelivered_message_middleware'] = new \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware()));
            yield 2 => ($this->privates['messenger.middleware.dispatch_after_current_bus'] ?? ($this->privates['messenger.middleware.dispatch_after_current_bus'] = new \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware()));
            yield 3 => ($this->privates['messenger.middleware.failed_message_processing_middleware'] ?? ($this->privates['messenger.middleware.failed_message_processing_middleware'] = new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware()));
            yield 4 => ($this->privates['messenger.middleware.send_message'] ?? $this->getMessenger_Middleware_SendMessageService());
            yield 5 => ($this->privates['messenger.bus.default.middleware.handle_message'] ?? $this->getMessenger_Bus_Default_Middleware_HandleMessageService());
        }, 6));
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/DelegatingLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['routing.resolver'] ?? $this->getRouting_ResolverService()), [], ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))));
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (false) {
                yield 'cache.validator' => null;
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (false) {
                yield 'cache.annotations' => null;
            }
            if (false) {
                yield 'cache.property_info' => null;
            }
            if (isset($this->privates['cache.messenger.restart_workers_signal'])) {
                yield 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? null);
            }
            if (false) {
                yield 'messenger.transport.in_memory.factory' => null;
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (false) + (int) (false) + (int) (false) + (int) (false) + (int) (isset($this->privates['cache.messenger.restart_workers_signal'])) + (int) (false);
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'cache.messenger.restart_workers_signal' => [0 => 'reset'], 'messenger.transport.in_memory.factory' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'test.client' service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\KernelBrowser
     */
    protected function getTest_ClientService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/browser-kit/Client.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/browser-kit/AbstractBrowser.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Client.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/HttpKernelBrowser.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Client.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/KernelBrowser.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/browser-kit/History.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/browser-kit/CookieJar.php';

        return new \Symfony\Bundle\FrameworkBundle\KernelBrowser(($this->services['kernel'] ?? $this->get('kernel', 1)), [], (new \Symfony\Component\BrowserKit\History()), (new \Symfony\Component\BrowserKit\CookieJar()));
    }

    /**
     * Gets the public 'test.private_services_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getTest_PrivateServicesLocatorService()
    {
        return $this->services['test.private_services_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Behat\\Mink\\Mink' => ['services', 'behat.mink', 'getBehat_MinkService', false],
            'Behat\\Mink\\Session' => ['services', 'behat.mink.default_session', 'getBehat_Mink_DefaultSessionService', false],
            'FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters' => ['services', 'behat.mink.parameters', 'getBehat_Mink_ParametersService', false],
            'Psr\\Cache\\CacheItemPoolInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Psr\\Container\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Psr\\Container\\ContainerInterface $parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Psr\\Log\\LoggerInterface' => ['privates', 'logger', 'getLoggerService', false],
            'Shared\\Infrastructure\\Symfony\\ApiExceptionListener' => ['privates', 'Shared\\Infrastructure\\Symfony\\ApiExceptionListener', 'getApiExceptionListenerService', false],
            'Shared\\Infrastructure\\Symfony\\ApiExceptionsHttpStatusCodeMapping' => ['privates', 'Shared\\Infrastructure\\Symfony\\ApiExceptionsHttpStatusCodeMapping', 'getApiExceptionsHttpStatusCodeMappingService', false],
            'Symfony\\Bundle\\FrameworkBundle\\KernelBrowser' => [false, 'test.client', 'getTest_ClientService', false],
            'Symfony\\Component\\BrowserKit\\Client' => [false, 'test.client', 'getTest_ClientService', false],
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Symfony\\Component\\DependencyInjection\\ContainerInterface $driverContainer' => ['services', 'behat.driver.service_container', 'getBehat_Driver_ServiceContainerService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Component\\Filesystem\\Filesystem' => ['services', 'filesystem', 'getFilesystemService', false],
            'Symfony\\Component\\HttpFoundation\\RequestStack' => ['services', 'request_stack', 'getRequestStackService', false],
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'Symfony\\Component\\HttpKernel\\HttpKernelBrowser' => [false, 'test.client', 'getTest_ClientService', false],
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'Symfony\\Component\\HttpKernel\\KernelInterface' => ['services', 'kernel', 'getKernelService', false],
            'Symfony\\Component\\Messenger\\MessageBusInterface' => ['services', 'message_bus', 'getMessageBusService', false],
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RequestContext' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RouterInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => ['privates', 'translation.extractor', 'getTranslation_ExtractorService', false],
            'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => ['privates', 'translation.reader', 'getTranslation_ReaderService', false],
            'Symfony\\Component\\Translation\\TranslatorInterface' => ['services', 'translator', 'getTranslatorService', false],
            'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => ['privates', 'translation.writer', 'getTranslation_WriterService', false],
            'Symfony\\Component\\Validator\\Validator\\ValidatorInterface' => ['services', 'validator', 'getValidatorService', false],
            'Symfony\\Contracts\\Cache\\CacheInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Contracts\\Translation\\TranslatorInterface' => ['services', 'translator', 'getTranslatorService', false],
            'argument_metadata_factory' => ['privates', 'argument_metadata_factory', 'getArgumentMetadataFactoryService', false],
            'argument_resolver' => ['privates', 'argument_resolver', 'getArgumentResolverService', false],
            'argument_resolver.controller_locator' => ['privates', '.service_locator.I3K77mT', 'get_ServiceLocator_I3K77mTService', false],
            'argument_resolver.default' => ['privates', 'argument_resolver.default', 'getArgumentResolver_DefaultService', false],
            'argument_resolver.request' => ['privates', 'argument_resolver.request', 'getArgumentResolver_RequestService', false],
            'argument_resolver.request_attribute' => ['privates', 'argument_resolver.request_attribute', 'getArgumentResolver_RequestAttributeService', false],
            'argument_resolver.service' => ['privates', 'argument_resolver.service', 'getArgumentResolver_ServiceService', false],
            'argument_resolver.session' => ['privates', 'argument_resolver.session', 'getArgumentResolver_SessionService', false],
            'argument_resolver.variadic' => ['privates', 'argument_resolver.variadic', 'getArgumentResolver_VariadicService', false],
            'cache.default_clearer' => ['services', 'cache.app_clearer', 'getCache_AppClearerService', false],
            'cache.default_marshaller' => ['privates', 'cache.default_marshaller', 'getCache_DefaultMarshallerService', false],
            'cache.messenger.restart_workers_signal' => ['privates', 'cache.messenger.restart_workers_signal', 'getCache_Messenger_RestartWorkersSignalService', false],
            'config.resource.self_checking_resource_checker' => ['privates', 'config.resource.self_checking_resource_checker', 'getConfig_Resource_SelfCheckingResourceCheckerService', false],
            'config_cache_factory' => ['privates', 'config_cache_factory', 'getConfigCacheFactoryService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.messenger_consume_messages' => ['privates', 'console.command.messenger_consume_messages', 'getConsole_Command_MessengerConsumeMessagesService', false],
            'console.command.messenger_debug' => ['privates', 'console.command.messenger_debug', 'getConsole_Command_MessengerDebugService', false],
            'console.command.messenger_setup_transports' => ['privates', 'console.command.messenger_setup_transports', 'getConsole_Command_MessengerSetupTransportsService', false],
            'console.command.messenger_stop_workers' => ['privates', 'console.command.messenger_stop_workers', 'getConsole_Command_MessengerStopWorkersService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'console.error_listener' => ['privates', 'console.error_listener', 'getConsole_ErrorListenerService', false],
            'console.suggest_missing_package_subscriber' => ['privates', 'console.suggest_missing_package_subscriber', 'getConsole_SuggestMissingPackageSubscriberService', false],
            'container.env_var_processor' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'controller_name_converter' => ['privates', '.legacy_controller_name_converter', 'get_LegacyControllerNameConverterService', false],
            'controller_resolver' => ['privates', 'controller_resolver', 'getControllerResolverService', false],
            'debug.debug_handlers_listener' => ['privates', 'debug.debug_handlers_listener', 'getDebug_DebugHandlersListenerService', false],
            'debug.file_link_formatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'dependency_injection.config.container_parameters_resource_checker' => ['privates', 'dependency_injection.config.container_parameters_resource_checker', 'getDependencyInjection_Config_ContainerParametersResourceCheckerService', false],
            'disallow_search_engine_index_response_listener' => ['privates', 'disallow_search_engine_index_response_listener', 'getDisallowSearchEngineIndexResponseListenerService', false],
            'error_handler.error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'error_renderer' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'exception_listener' => ['privates', 'exception_listener', 'getExceptionListenerService', false],
            'file_locator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'identity_translator' => ['privates', 'identity_translator', 'getIdentityTranslatorService', false],
            'locale_aware_listener' => ['privates', 'locale_aware_listener', 'getLocaleAwareListenerService', false],
            'locale_listener' => ['privates', 'locale_listener', 'getLocaleListenerService', false],
            'logger' => ['privates', 'logger', 'getLoggerService', false],
            'messenger.bus.default' => ['services', 'message_bus', 'getMessageBusService', false],
            'messenger.bus.default.messenger.handlers_locator' => ['privates', 'messenger.bus.default.messenger.handlers_locator', 'getMessenger_Bus_Default_Messenger_HandlersLocatorService', false],
            'messenger.bus.default.middleware.add_bus_name_stamp_middleware' => ['privates', 'messenger.bus.default.middleware.add_bus_name_stamp_middleware', 'getMessenger_Bus_Default_Middleware_AddBusNameStampMiddlewareService', false],
            'messenger.bus.default.middleware.handle_message' => ['privates', 'messenger.bus.default.middleware.handle_message', 'getMessenger_Bus_Default_Middleware_HandleMessageService', false],
            'messenger.listener.stop_worker_on_restart_signal_listener' => ['privates', 'messenger.listener.stop_worker_on_restart_signal_listener', 'getMessenger_Listener_StopWorkerOnRestartSignalListenerService', false],
            'messenger.middleware.dispatch_after_current_bus' => ['privates', 'messenger.middleware.dispatch_after_current_bus', 'getMessenger_Middleware_DispatchAfterCurrentBusService', false],
            'messenger.middleware.failed_message_processing_middleware' => ['privates', 'messenger.middleware.failed_message_processing_middleware', 'getMessenger_Middleware_FailedMessageProcessingMiddlewareService', false],
            'messenger.middleware.reject_redelivered_message_middleware' => ['privates', 'messenger.middleware.reject_redelivered_message_middleware', 'getMessenger_Middleware_RejectRedeliveredMessageMiddlewareService', false],
            'messenger.middleware.send_message' => ['privates', 'messenger.middleware.send_message', 'getMessenger_Middleware_SendMessageService', false],
            'messenger.receiver_locator' => ['privates', 'messenger.receiver_locator', 'getMessenger_ReceiverLocatorService', false],
            'messenger.retry.send_failed_message_for_retry_listener' => ['privates', 'messenger.retry.send_failed_message_for_retry_listener', 'getMessenger_Retry_SendFailedMessageForRetryListenerService', false],
            'messenger.retry_strategy_locator' => ['privates', 'messenger.retry_strategy_locator', 'getMessenger_RetryStrategyLocatorService', false],
            'messenger.routable_message_bus' => ['privates', 'messenger.routable_message_bus', 'getMessenger_RoutableMessageBusService', false],
            'messenger.senders_locator' => ['privates', 'messenger.senders_locator', 'getMessenger_SendersLocatorService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'resolve_controller_name_subscriber' => ['privates', '.legacy_resolve_controller_name_subscriber', 'get_LegacyResolveControllerNameSubscriberService', false],
            'response_listener' => ['privates', 'response_listener', 'getResponseListenerService', false],
            'router.cache_warmer' => ['privates', 'router.cache_warmer', 'getRouter_CacheWarmerService', false],
            'router.default' => ['services', 'router', 'getRouterService', false],
            'router.request_context' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'router_listener' => ['privates', 'router_listener', 'getRouterListenerService', false],
            'routing.loader.container' => ['privates', 'routing.loader.container', 'getRouting_Loader_ContainerService', false],
            'routing.loader.directory' => ['privates', 'routing.loader.directory', 'getRouting_Loader_DirectoryService', false],
            'routing.loader.glob' => ['privates', 'routing.loader.glob', 'getRouting_Loader_GlobService', false],
            'routing.loader.php' => ['privates', 'routing.loader.php', 'getRouting_Loader_PhpService', false],
            'routing.loader.xml' => ['privates', 'routing.loader.xml', 'getRouting_Loader_XmlService', false],
            'routing.loader.yml' => ['privates', 'routing.loader.yml', 'getRouting_Loader_YmlService', false],
            'routing.resolver' => ['privates', 'routing.resolver', 'getRouting_ResolverService', false],
            'secrets.local_vault' => ['privates', 'secrets.local_vault', 'getSecrets_LocalVaultService', false],
            'secrets.vault' => ['privates', 'secrets.vault', 'getSecrets_VaultService', false],
            'streamed_response_listener' => ['privates', 'streamed_response_listener', 'getStreamedResponseListenerService', false],
            'test.client.cookiejar' => [false, 'test.client.cookiejar', 'getTest_Client_CookiejarService', false],
            'test.client.history' => [false, 'test.client.history', 'getTest_Client_HistoryService', false],
            'test.session.listener' => ['privates', 'test.session.listener', 'getTest_Session_ListenerService', false],
            'translation.dumper.csv' => ['privates', 'translation.dumper.csv', 'getTranslation_Dumper_CsvService', false],
            'translation.dumper.ini' => ['privates', 'translation.dumper.ini', 'getTranslation_Dumper_IniService', false],
            'translation.dumper.json' => ['privates', 'translation.dumper.json', 'getTranslation_Dumper_JsonService', false],
            'translation.dumper.mo' => ['privates', 'translation.dumper.mo', 'getTranslation_Dumper_MoService', false],
            'translation.dumper.php' => ['privates', 'translation.dumper.php', 'getTranslation_Dumper_PhpService', false],
            'translation.dumper.po' => ['privates', 'translation.dumper.po', 'getTranslation_Dumper_PoService', false],
            'translation.dumper.qt' => ['privates', 'translation.dumper.qt', 'getTranslation_Dumper_QtService', false],
            'translation.dumper.res' => ['privates', 'translation.dumper.res', 'getTranslation_Dumper_ResService', false],
            'translation.dumper.xliff' => ['privates', 'translation.dumper.xliff', 'getTranslation_Dumper_XliffService', false],
            'translation.dumper.yaml' => ['privates', 'translation.dumper.yaml', 'getTranslation_Dumper_YamlService', false],
            'translation.dumper.yml' => ['privates', 'translation.dumper.yml', 'getTranslation_Dumper_YmlService', false],
            'translation.extractor' => ['privates', 'translation.extractor', 'getTranslation_ExtractorService', false],
            'translation.extractor.php' => ['privates', 'translation.extractor.php', 'getTranslation_Extractor_PhpService', false],
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
            'translation.reader' => ['privates', 'translation.reader', 'getTranslation_ReaderService', false],
            'translation.warmer' => ['privates', 'translation.warmer', 'getTranslation_WarmerService', false],
            'translation.writer' => ['privates', 'translation.writer', 'getTranslation_WriterService', false],
            'translator.default' => ['services', 'translator', 'getTranslatorService', false],
            'translator.formatter' => ['privates', 'translator.formatter.default', 'getTranslator_Formatter_DefaultService', false],
            'translator.formatter.default' => ['privates', 'translator.formatter.default', 'getTranslator_Formatter_DefaultService', false],
            'validate_request_listener' => ['privates', 'validate_request_listener', 'getValidateRequestListenerService', false],
            'validator.builder' => ['privates', 'validator.builder', 'getValidator_BuilderService', false],
            'validator.email' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'validator.mapping.cache_warmer' => ['privates', 'validator.mapping.cache_warmer', 'getValidator_Mapping_CacheWarmerService', false],
            'validator.mapping.class_metadata_factory' => ['services', 'validator', 'getValidatorService', false],
            'validator.not_compromised_password' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'validator.validator_factory' => ['privates', 'validator.validator_factory', 'getValidator_ValidatorFactoryService', false],
        ], [
            'Behat\\Mink\\Mink' => '?',
            'Behat\\Mink\\Session' => '?',
            'FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters' => '?',
            'Psr\\Cache\\CacheItemPoolInterface' => '?',
            'Psr\\Container\\ContainerInterface' => '?',
            'Psr\\Container\\ContainerInterface $parameterBag' => '?',
            'Psr\\Log\\LoggerInterface' => '?',
            'Shared\\Infrastructure\\Symfony\\ApiExceptionListener' => '?',
            'Shared\\Infrastructure\\Symfony\\ApiExceptionsHttpStatusCodeMapping' => '?',
            'Symfony\\Bundle\\FrameworkBundle\\KernelBrowser' => '?',
            'Symfony\\Component\\BrowserKit\\Client' => '?',
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ContainerInterface $driverContainer' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => '?',
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Component\\Filesystem\\Filesystem' => '?',
            'Symfony\\Component\\HttpFoundation\\RequestStack' => '?',
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => '?',
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => '?',
            'Symfony\\Component\\HttpKernel\\HttpKernelBrowser' => '?',
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => '?',
            'Symfony\\Component\\HttpKernel\\KernelInterface' => '?',
            'Symfony\\Component\\Messenger\\MessageBusInterface' => '?',
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => '?',
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => '?',
            'Symfony\\Component\\Routing\\RequestContext' => '?',
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => '?',
            'Symfony\\Component\\Routing\\RouterInterface' => '?',
            'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => '?',
            'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => '?',
            'Symfony\\Component\\Translation\\TranslatorInterface' => '?',
            'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => '?',
            'Symfony\\Component\\Validator\\Validator\\ValidatorInterface' => '?',
            'Symfony\\Contracts\\Cache\\CacheInterface' => '?',
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Contracts\\Translation\\TranslatorInterface' => '?',
            'argument_metadata_factory' => '?',
            'argument_resolver' => '?',
            'argument_resolver.controller_locator' => '?',
            'argument_resolver.default' => '?',
            'argument_resolver.request' => '?',
            'argument_resolver.request_attribute' => '?',
            'argument_resolver.service' => '?',
            'argument_resolver.session' => '?',
            'argument_resolver.variadic' => '?',
            'cache.default_clearer' => '?',
            'cache.default_marshaller' => '?',
            'cache.messenger.restart_workers_signal' => '?',
            'config.resource.self_checking_resource_checker' => '?',
            'config_cache_factory' => '?',
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.messenger_consume_messages' => '?',
            'console.command.messenger_debug' => '?',
            'console.command.messenger_setup_transports' => '?',
            'console.command.messenger_stop_workers' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_set' => '?',
            'console.command.translation_debug' => '?',
            'console.command.translation_update' => '?',
            'console.command.xliff_lint' => '?',
            'console.command.yaml_lint' => '?',
            'console.error_listener' => '?',
            'console.suggest_missing_package_subscriber' => '?',
            'container.env_var_processor' => '?',
            'controller_name_converter' => '?',
            'controller_resolver' => '?',
            'debug.debug_handlers_listener' => '?',
            'debug.file_link_formatter' => '?',
            'dependency_injection.config.container_parameters_resource_checker' => '?',
            'disallow_search_engine_index_response_listener' => '?',
            'error_handler.error_renderer.html' => '?',
            'error_renderer' => '?',
            'error_renderer.html' => '?',
            'exception_listener' => '?',
            'file_locator' => '?',
            'identity_translator' => '?',
            'locale_aware_listener' => '?',
            'locale_listener' => '?',
            'logger' => '?',
            'messenger.bus.default' => '?',
            'messenger.bus.default.messenger.handlers_locator' => '?',
            'messenger.bus.default.middleware.add_bus_name_stamp_middleware' => '?',
            'messenger.bus.default.middleware.handle_message' => '?',
            'messenger.listener.stop_worker_on_restart_signal_listener' => '?',
            'messenger.middleware.dispatch_after_current_bus' => '?',
            'messenger.middleware.failed_message_processing_middleware' => '?',
            'messenger.middleware.reject_redelivered_message_middleware' => '?',
            'messenger.middleware.send_message' => '?',
            'messenger.receiver_locator' => '?',
            'messenger.retry.send_failed_message_for_retry_listener' => '?',
            'messenger.retry_strategy_locator' => '?',
            'messenger.routable_message_bus' => '?',
            'messenger.senders_locator' => '?',
            'parameter_bag' => '?',
            'resolve_controller_name_subscriber' => '?',
            'response_listener' => '?',
            'router.cache_warmer' => '?',
            'router.default' => '?',
            'router.request_context' => '?',
            'router_listener' => '?',
            'routing.loader.container' => '?',
            'routing.loader.directory' => '?',
            'routing.loader.glob' => '?',
            'routing.loader.php' => '?',
            'routing.loader.xml' => '?',
            'routing.loader.yml' => '?',
            'routing.resolver' => '?',
            'secrets.local_vault' => '?',
            'secrets.vault' => '?',
            'streamed_response_listener' => '?',
            'test.client.cookiejar' => '?',
            'test.client.history' => '?',
            'test.session.listener' => '?',
            'translation.dumper.csv' => '?',
            'translation.dumper.ini' => '?',
            'translation.dumper.json' => '?',
            'translation.dumper.mo' => '?',
            'translation.dumper.php' => '?',
            'translation.dumper.po' => '?',
            'translation.dumper.qt' => '?',
            'translation.dumper.res' => '?',
            'translation.dumper.xliff' => '?',
            'translation.dumper.yaml' => '?',
            'translation.dumper.yml' => '?',
            'translation.extractor' => '?',
            'translation.extractor.php' => '?',
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
            'translation.reader' => '?',
            'translation.warmer' => '?',
            'translation.writer' => '?',
            'translator.default' => '?',
            'translator.formatter' => '?',
            'translator.formatter.default' => '?',
            'validate_request_listener' => '?',
            'validator.builder' => '?',
            'validator.email' => '?',
            'validator.expression' => '?',
            'validator.mapping.cache_warmer' => '?',
            'validator.mapping.class_metadata_factory' => '?',
            'validator.not_compromised_password' => '?',
            'validator.validator_factory' => '?',
        ]);
    }

    /**
     * Gets the public 'test.service_container' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Test\TestContainer
     */
    protected function getTest_ServiceContainerService()
    {
        return $this->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($this->services['kernel'] ?? $this->get('kernel', 1)), 'test.private_services_locator');
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/TranslatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/TranslatorBagInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Translator.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Translation/Translator.php';

        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), ($this->privates['translator.formatter.default'] ?? $this->getTranslator_Formatter_DefaultService()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf')], 'az' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf')], 'bs' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.bs.xlf')], 'ca' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf')], 'cs' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf')], 'cy' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.da.xlf')], 'de' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.de.xlf')], 'el' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.en.xlf')], 'es' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.es.xlf')], 'et' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf')], 'fa' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf')], 'fi' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf')], 'fr' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf')], 'gl' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf')], 'hu' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf')], 'hy' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.id.xlf')], 'it' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.it.xlf')], 'ja' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf')], 'lb' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf')], 'lv' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf')], 'nn' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.no.xlf')], 'pl' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf')], 'pt' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf')], 'pt_BR' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf')], 'ro' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf')], 'ru' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf')], 'sk' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf')], 'sq' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf')], 'th' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf')], 'uk' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf')], 'vi' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf')], 'zh_TW' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/translations'), 2 => (\dirname(__DIR__, 4).'/src/Resources/FrameworkBundle/translations'), 3 => (\dirname(__DIR__, 6).'/vendor/friends-of-behat/symfony-extension/src/Bundle/translations'), 4 => (\dirname(__DIR__, 4).'/src/Resources/FriendsOfBehatSymfonyExtensionBundle/translations'), 5 => (\dirname(__DIR__, 4).'/translations'), 6 => (\dirname(__DIR__, 4).'/src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/translations'), 2 => 'src/Resources/FrameworkBundle/translations', 3 => (\dirname(__DIR__, 6).'/vendor/friends-of-behat/symfony-extension/src/Bundle/translations'), 4 => 'src/Resources/FriendsOfBehatSymfonyExtensionBundle/translations', 5 => 'translations', 6 => 'src/Resources/translations']]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/Validator/ValidatorInterface.php';

        return $this->services['validator'] = ($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator();
    }

    /**
     * Gets the private '.legacy_controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function get_LegacyControllerNameConverterService()
    {
        return $this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false);
    }

    /**
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /**
     * Gets the private '.service_locator.I3K77mT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_I3K77mTService()
    {
        return $this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []);
    }

    /**
     * Gets the private 'Shared\Infrastructure\Symfony\ApiExceptionListener' shared autowired service.
     *
     * @return \Shared\Infrastructure\Symfony\ApiExceptionListener
     */
    protected function getApiExceptionListenerService()
    {
        include_once \dirname(__DIR__, 6).'/src/Shared/Infrastructure/Symfony/ApiExceptionListener.php';
        include_once \dirname(__DIR__, 6).'/src/Shared/Infrastructure/Symfony/ApiExceptionsHttpStatusCodeMapping.php';

        return $this->privates['Shared\\Infrastructure\\Symfony\\ApiExceptionListener'] = new \Shared\Infrastructure\Symfony\ApiExceptionListener(($this->privates['Shared\\Infrastructure\\Symfony\\ApiExceptionsHttpStatusCodeMapping'] ?? ($this->privates['Shared\\Infrastructure\\Symfony\\ApiExceptionsHttpStatusCodeMapping'] = new \Shared\Infrastructure\Symfony\ApiExceptionsHttpStatusCodeMapping())));
    }

    /**
     * Gets the private 'Shared\Infrastructure\Symfony\ApiExceptionsHttpStatusCodeMapping' shared autowired service.
     *
     * @return \Shared\Infrastructure\Symfony\ApiExceptionsHttpStatusCodeMapping
     */
    protected function getApiExceptionsHttpStatusCodeMappingService()
    {
        include_once \dirname(__DIR__, 6).'/src/Shared/Infrastructure/Symfony/ApiExceptionsHttpStatusCodeMapping.php';

        return $this->privates['Shared\\Infrastructure\\Symfony\\ApiExceptionsHttpStatusCodeMapping'] = new \Shared\Infrastructure\Symfony\ApiExceptionsHttpStatusCodeMapping();
    }

    /**
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /**
     * Gets the private 'argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver
     */
    protected function getArgumentResolverService()
    {
        return $this->privates['argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['argument_resolver.service'] ?? $this->getArgumentResolver_ServiceService());
            yield 4 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 5 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 6));
    }

    /**
     * Gets the private 'argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getArgumentResolver_DefaultService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/DefaultValueResolver.php';

        return $this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getArgumentResolver_RequestService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestValueResolver.php';

        return $this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getArgumentResolver_RequestAttributeService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestAttributeValueResolver.php';

        return $this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))));
    }

    /**
     * Gets the private 'argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getArgumentResolver_SessionService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/SessionValueResolver.php';

        return $this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getArgumentResolver_VariadicService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/VariadicValueResolver.php';

        return $this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /**
     * Gets the private 'cache.default_marshaller' shared service.
     *
     * @return \Symfony\Component\Cache\Marshaller\DefaultMarshaller
     */
    protected function getCache_DefaultMarshallerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        return $this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL);
    }

    /**
     * Gets the private 'cache.messenger.restart_workers_signal' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_Messenger_RestartWorkersSignalService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $this->privates['cache.messenger.restart_workers_signal'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('2bPzcRc4Tb', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the private 'config.resource.self_checking_resource_checker' shared service.
     *
     * @return \Symfony\Component\Config\Resource\SelfCheckingResourceChecker
     */
    protected function getConfig_Resource_SelfCheckingResourceCheckerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/ResourceCheckerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Resource/SelfCheckingResourceChecker.php';

        return $this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CacheClearCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.messenger.restart_workers_signal']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService());
        }, 2));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_consume_messages' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\ConsumeMessagesCommand
     */
    protected function getConsole_Command_MessengerConsumeMessagesService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Command/ConsumeMessagesCommand.php';

        $this->privates['console.command.messenger_consume_messages'] = $instance = new \Symfony\Component\Messenger\Command\ConsumeMessagesCommand(($this->privates['messenger.routable_message_bus'] ?? $this->getMessenger_RoutableMessageBusService()), ($this->privates['messenger.receiver_locator'] ?? ($this->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), []);

        $instance->setName('messenger:consume');
        $instance->setAliases([0 => 'messenger:consume-messages']);

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    protected function getConsole_Command_MessengerDebugService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Command/DebugCommand.php';

        $this->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['messenger.bus.default' => []]);

        $instance->setName('debug:messenger');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_setup_transports' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\SetupTransportsCommand
     */
    protected function getConsole_Command_MessengerSetupTransportsService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Command/SetupTransportsCommand.php';

        $this->privates['console.command.messenger_setup_transports'] = $instance = new \Symfony\Component\Messenger\Command\SetupTransportsCommand(($this->privates['messenger.receiver_locator'] ?? ($this->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), []);

        $instance->setName('messenger:setup-transports');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_stop_workers' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\StopWorkersCommand
     */
    protected function getConsole_Command_MessengerStopWorkersService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Command/StopWorkersCommand.php';

        $this->privates['console.command.messenger_stop_workers'] = $instance = new \Symfony\Component\Messenger\Command\StopWorkersCommand(($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()));

        $instance->setName('messenger:stop-workers');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsListCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsSetCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), '', [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations')], [0 => (\dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), 1 => (\dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 2 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 3 => (\dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($this->privates['translation.writer'] ?? $this->getTranslation_WriterService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'en', (\dirname(__DIR__, 4).'/translations'), '', [0 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Resources/translations')], [0 => (\dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), 1 => (\dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 2 => (\dirname(__DIR__, 6).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 3 => (\dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /**
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Command/XliffLintCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/XliffLintCommand.php';

        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/yaml/Command/LintCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/EventListener/ErrorListener.php';

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'console.suggest_missing_package_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber
     */
    protected function getConsole_SuggestMissingPackageSubscriberService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/EventListener/SuggestMissingPackageSubscriber.php';

        return $this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber();
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /**
     * Gets the private 'controller_resolver' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getControllerResolverService()
    {
        return $this->privates['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /**
     * Gets the private 'dependency_injection.config.container_parameters_resource_checker' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    protected function getDependencyInjection_Config_ContainerParametersResourceCheckerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/ResourceCheckerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php';

        return $this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);
    }

    /**
     * Gets the private 'disallow_search_engine_index_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener
     */
    protected function getDisallowSearchEngineIndexResponseListenerService()
    {
        return $this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener();
    }

    /**
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/error-handler/ErrorRenderer/ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/error-handler/ErrorRenderer/HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true);
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/src/Resources'), [0 => (\dirname(__DIR__, 4).'/src')], false);
    }

    /**
     * Gets the private 'identity_translator' shared service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator
     */
    protected function getIdentityTranslatorService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/TranslatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/IdentityTranslator.php';

        return $this->privates['identity_translator'] = new \Symfony\Component\Translation\IdentityTranslator();
    }

    /**
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->services['translator'] ?? $this->getTranslatorService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Log\Logger
     */
    protected function getLoggerService()
    {
        return $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger();
    }

    /**
     * Gets the private 'messenger.bus.default.messenger.handlers_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlersLocator
     */
    protected function getMessenger_Bus_Default_Messenger_HandlersLocatorService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Handler/HandlersLocatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Handler/HandlersLocator.php';

        return $this->privates['messenger.bus.default.messenger.handlers_locator'] = new \Symfony\Component\Messenger\Handler\HandlersLocator([]);
    }

    /**
     * Gets the private 'messenger.bus.default.middleware.add_bus_name_stamp_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware
     */
    protected function getMessenger_Bus_Default_Middleware_AddBusNameStampMiddlewareService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/AddBusNameStampMiddleware.php';

        return $this->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] = new \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware('messenger.bus.default');
    }

    /**
     * Gets the private 'messenger.bus.default.middleware.handle_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware
     */
    protected function getMessenger_Bus_Default_Middleware_HandleMessageService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/HandleMessageMiddleware.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Handler/HandlersLocatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Handler/HandlersLocator.php';

        $this->privates['messenger.bus.default.middleware.handle_message'] = $instance = new \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware(($this->privates['messenger.bus.default.messenger.handlers_locator'] ?? ($this->privates['messenger.bus.default.messenger.handlers_locator'] = new \Symfony\Component\Messenger\Handler\HandlersLocator([]))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the private 'messenger.listener.stop_worker_on_restart_signal_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener
     */
    protected function getMessenger_Listener_StopWorkerOnRestartSignalListenerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/EventListener/StopWorkerOnRestartSignalListener.php';

        return $this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] = new \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener(($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'messenger.middleware.dispatch_after_current_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware
     */
    protected function getMessenger_Middleware_DispatchAfterCurrentBusService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/DispatchAfterCurrentBusMiddleware.php';

        return $this->privates['messenger.middleware.dispatch_after_current_bus'] = new \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware();
    }

    /**
     * Gets the private 'messenger.middleware.failed_message_processing_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware
     */
    protected function getMessenger_Middleware_FailedMessageProcessingMiddlewareService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/FailedMessageProcessingMiddleware.php';

        return $this->privates['messenger.middleware.failed_message_processing_middleware'] = new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware();
    }

    /**
     * Gets the private 'messenger.middleware.reject_redelivered_message_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware
     */
    protected function getMessenger_Middleware_RejectRedeliveredMessageMiddlewareService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/RejectRedeliveredMessageMiddleware.php';

        return $this->privates['messenger.middleware.reject_redelivered_message_middleware'] = new \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware();
    }

    /**
     * Gets the private 'messenger.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    protected function getMessenger_Middleware_SendMessageService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Middleware/SendMessageMiddleware.php';

        $this->privates['messenger.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(($this->privates['messenger.senders_locator'] ?? $this->getMessenger_SendersLocatorService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the private 'messenger.receiver_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getMessenger_ReceiverLocatorService()
    {
        return $this->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []);
    }

    /**
     * Gets the private 'messenger.retry.send_failed_message_for_retry_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener
     */
    protected function getMessenger_Retry_SendFailedMessageForRetryListenerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/EventListener/SendFailedMessageForRetryListener.php';

        return $this->privates['messenger.retry.send_failed_message_for_retry_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener(($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), ($this->privates['messenger.retry_strategy_locator'] ?? ($this->privates['messenger.retry_strategy_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'messenger.retry_strategy_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getMessenger_RetryStrategyLocatorService()
    {
        return $this->privates['messenger.retry_strategy_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []);
    }

    /**
     * Gets the private 'messenger.routable_message_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\RoutableMessageBus
     */
    protected function getMessenger_RoutableMessageBusService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/MessageBusInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/RoutableMessageBus.php';

        return $this->privates['messenger.routable_message_bus'] = new \Symfony\Component\Messenger\RoutableMessageBus(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'messenger.bus.default' => ['services', 'message_bus', 'getMessageBusService', false],
        ], [
            'messenger.bus.default' => '?',
        ]), ($this->services['message_bus'] ?? $this->getMessageBusService()));
    }

    /**
     * Gets the private 'messenger.senders_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Sender\SendersLocator
     */
    protected function getMessenger_SendersLocatorService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Transport/Sender/SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/messenger/Transport/Sender/SendersLocator.php';

        return $this->privates['messenger.senders_locator'] = new \Symfony\Component\Messenger\Transport\Sender\SendersLocator([], ($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))));
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'routing.loader.container' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\ContainerLoader
     */
    protected function getRouting_Loader_ContainerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/ContainerLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Routing/LegacyRouteLoaderContainer.php';

        return $this->privates['routing.loader.container'] = new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'Challenge\\App\\Kernel',
        ])));
    }

    /**
     * Gets the private 'routing.loader.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\DirectoryLoader
     */
    protected function getRouting_Loader_DirectoryService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/DirectoryLoader.php';

        return $this->privates['routing.loader.directory'] = new \Symfony\Component\Routing\Loader\DirectoryLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.glob' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\GlobFileLoader
     */
    protected function getRouting_Loader_GlobService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/GlobFileLoader.php';

        return $this->privates['routing.loader.glob'] = new \Symfony\Component\Routing\Loader\GlobFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.php' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\PhpFileLoader
     */
    protected function getRouting_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/PhpFileLoader.php';

        return $this->privates['routing.loader.php'] = new \Symfony\Component\Routing\Loader\PhpFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.xml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\XmlFileLoader
     */
    protected function getRouting_Loader_XmlService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/XmlFileLoader.php';

        return $this->privates['routing.loader.xml'] = new \Symfony\Component\Routing\Loader\XmlFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.yml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\YamlFileLoader
     */
    protected function getRouting_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/YamlFileLoader.php';

        return $this->privates['routing.loader.yml'] = new \Symfony\Component\Routing\Loader\YamlFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.resolver' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver
     */
    protected function getRouting_ResolverService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderResolver.php';

        $this->privates['routing.resolver'] = $instance = new \Symfony\Component\Config\Loader\LoaderResolver();

        $instance->addLoader(($this->privates['routing.loader.xml'] ?? $this->getRouting_Loader_XmlService()));
        $instance->addLoader(($this->privates['routing.loader.yml'] ?? $this->getRouting_Loader_YmlService()));
        $instance->addLoader(($this->privates['routing.loader.php'] ?? $this->getRouting_Loader_PhpService()));
        $instance->addLoader(($this->privates['routing.loader.glob'] ?? $this->getRouting_Loader_GlobService()));
        $instance->addLoader(($this->privates['routing.loader.directory'] ?? $this->getRouting_Loader_DirectoryService()));
        $instance->addLoader(($this->privates['routing.loader.container'] ?? $this->getRouting_Loader_ContainerService()));

        return $instance;
    }

    /**
     * Gets the private 'secrets.local_vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault
     */
    protected function getSecrets_LocalVaultService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        return $this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local'));
    }

    /**
     * Gets the private 'secrets.vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault
     */
    protected function getSecrets_VaultService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';

        return $this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'test.client.cookiejar' service.
     *
     * @return \Symfony\Component\BrowserKit\CookieJar
     */
    protected function getTest_Client_CookiejarService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/browser-kit/CookieJar.php';

        return new \Symfony\Component\BrowserKit\CookieJar();
    }

    /**
     * Gets the private 'test.client.history' service.
     *
     * @return \Symfony\Component\BrowserKit\History
     */
    protected function getTest_Client_HistoryService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/browser-kit/History.php';

        return new \Symfony\Component\BrowserKit\History();
    }

    /**
     * Gets the private 'test.session.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TestSessionListener
     */
    protected function getTest_Session_ListenerService()
    {
        return $this->privates['test.session.listener'] = new \Symfony\Component\HttpKernel\EventListener\TestSessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []));
    }

    /**
     * Gets the private 'translation.dumper.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper
     */
    protected function getTranslation_Dumper_CsvService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/CsvFileDumper.php';

        return $this->privates['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper
     */
    protected function getTranslation_Dumper_IniService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/IniFileDumper.php';

        return $this->privates['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.json' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper
     */
    protected function getTranslation_Dumper_JsonService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/JsonFileDumper.php';

        return $this->privates['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper
     */
    protected function getTranslation_Dumper_MoService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/MoFileDumper.php';

        return $this->privates['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    protected function getTranslation_Dumper_PhpService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/PhpFileDumper.php';

        return $this->privates['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    protected function getTranslation_Dumper_PoService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/PoFileDumper.php';

        return $this->privates['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    protected function getTranslation_Dumper_QtService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/QtFileDumper.php';

        return $this->privates['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    protected function getTranslation_Dumper_ResService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/IcuResFileDumper.php';

        return $this->privates['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper
     */
    protected function getTranslation_Dumper_XliffService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/XliffFileDumper.php';

        return $this->privates['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.yaml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YamlService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/YamlFileDumper.php';

        return $this->privates['translation.dumper.yaml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml');
    }

    /**
     * Gets the private 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YmlService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/YamlFileDumper.php';

        return $this->privates['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Extractor/ExtractorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Extractor/ChainExtractor.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Extractor/AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Extractor/PhpExtractor.php';

        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', ($this->privates['translation.extractor.php'] ?? ($this->privates['translation.extractor.php'] = new \Symfony\Component\Translation\Extractor\PhpExtractor())));

        return $instance;
    }

    /**
     * Gets the private 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\PhpExtractor
     */
    protected function getTranslation_Extractor_PhpService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Extractor/AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Extractor/ExtractorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Extractor/PhpExtractor.php';

        return $this->privates['translation.extractor.php'] = new \Symfony\Component\Translation\Extractor\PhpExtractor();
    }

    /**
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/CsvFileLoader.php';

        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';

        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/IniFileLoader.php';

        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/MoFileLoader.php';

        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/PhpFileLoader.php';

        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/PoFileLoader.php';

        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/QtFileLoader.php';

        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';

        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/XliffFileLoader.php';

        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/YamlFileLoader.php';

        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Reader/TranslationReaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Reader/TranslationReader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/XliffFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/PoFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/MoFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/QtFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/CsvFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/IniFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /**
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php';

        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /**
     * Gets the private 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Writer/TranslationWriterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Writer/TranslationWriter.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/PhpFileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/XliffFileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/PoFileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/MoFileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/YamlFileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/QtFileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/CsvFileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/IniFileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/JsonFileDumper.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Dumper/IcuResFileDumper.php';

        $this->privates['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', ($this->privates['translation.dumper.php'] ?? ($this->privates['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper())));
        $instance->addDumper('xlf', ($this->privates['translation.dumper.xliff'] ?? ($this->privates['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper())));
        $instance->addDumper('po', ($this->privates['translation.dumper.po'] ?? ($this->privates['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper())));
        $instance->addDumper('mo', ($this->privates['translation.dumper.mo'] ?? ($this->privates['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper())));
        $instance->addDumper('yml', ($this->privates['translation.dumper.yml'] ?? ($this->privates['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper())));
        $instance->addDumper('yaml', ($this->privates['translation.dumper.yaml'] ?? ($this->privates['translation.dumper.yaml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'))));
        $instance->addDumper('ts', ($this->privates['translation.dumper.qt'] ?? ($this->privates['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper())));
        $instance->addDumper('csv', ($this->privates['translation.dumper.csv'] ?? ($this->privates['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper())));
        $instance->addDumper('ini', ($this->privates['translation.dumper.ini'] ?? ($this->privates['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper())));
        $instance->addDumper('json', ($this->privates['translation.dumper.json'] ?? ($this->privates['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper())));
        $instance->addDumper('res', ($this->privates['translation.dumper.res'] ?? ($this->privates['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper())));

        return $instance;
    }

    /**
     * Gets the private 'translator.formatter.default' shared service.
     *
     * @return \Symfony\Component\Translation\Formatter\MessageFormatter
     */
    protected function getTranslator_Formatter_DefaultService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/TranslatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/IdentityTranslator.php';

        return $this->privates['translator.formatter.default'] = new \Symfony\Component\Translation\Formatter\MessageFormatter(($this->privates['identity_translator'] ?? ($this->privates['identity_translator'] = new \Symfony\Component\Translation\IdentityTranslator())));
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/ValidatorBuilderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/ValidatorBuilder.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/Validation.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation/TranslatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php';

        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([]);

        return $instance;
    }

    /**
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/Constraints/EmailValidator.php';

        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('loose');
    }

    /**
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/Constraints/ExpressionValidator.php';

        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php';

        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /**
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/Constraints/NotCompromisedPasswordValidator.php';

        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(NULL, 'UTF-8', true, NULL);
    }

    /**
     * Gets the private 'validator.validator_factory' shared service.
     *
     * @return \Symfony\Component\Validator\ContainerConstraintValidatorFactory
     */
    protected function getValidator_ValidatorFactoryService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';

        return $this->privates['validator.validator_factory'] = new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'validator.expression' => '?',
        ]));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'validator.mapping.cache.file' => false,
        'debug.container.dump' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/srcChallenge_App_KernelTestDebugContainer.xml'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'/src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'test',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'FriendsOfBehatSymfonyExtensionBundle' => 'FriendsOfBehat\\SymfonyExtension\\Bundle\\FriendsOfBehatSymfonyExtensionBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 6).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'FriendsOfBehatSymfonyExtensionBundle' => [
                    'path' => (\dirname(__DIR__, 6).'/vendor/friends-of-behat/symfony-extension/src/Bundle'),
                    'namespace' => 'FriendsOfBehat\\SymfonyExtension\\Bundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcChallenge_App_KernelTestDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
            ],
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'test.client.parameters' => [

            ],
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcChallenge_App_KernelTestDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'console.command.ids' => [

            ],
        ];
    }
}
include_once \dirname(__DIR__, 6).'/vendor/psr/container/src/ContainerInterface.php';
include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ContainerInterface.php';

class ContainerInterface_7a5418d implements \ProxyManager\Proxy\VirtualProxyInterface, \Symfony\Component\DependencyInjection\ContainerInterface
{
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf2651 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer16d33 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties99833 = [
        
    ];

    public function set($id, $service)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'set', array('id' => $id, 'service' => $service), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->set($id, $service);
    }

    public function get($id, $invalidBehavior = 1)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'get', array('id' => $id, 'invalidBehavior' => $invalidBehavior), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->get($id, $invalidBehavior);
    }

    public function has($id)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'has', array('id' => $id), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->has($id);
    }

    public function initialized($id)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'initialized', array('id' => $id), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->initialized($id);
    }

    public function getParameter($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getParameter', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getParameter($name);
    }

    public function hasParameter($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'hasParameter', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->hasParameter($name);
    }

    public function setParameter($name, $value)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'setParameter', array('name' => $name, 'value' => $value), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->setParameter($name, $value);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializer16d33 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderf2651) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');
            $this->valueHolderf2651 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__get', ['name' => $name], $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        if (isset(self::$publicProperties99833[$name])) {
            return $this->valueHolderf2651->$name;
        }

        $targetObject = $this->valueHolderf2651;

        $backtrace = debug_backtrace(false, 1);
        trigger_error(
            sprintf(
                'Undefined property: %s::$%s in %s on line %s',
                $realInstanceReflection->getName(),
                $name,
                $backtrace[0]['file'],
                $backtrace[0]['line']
            ),
            \E_USER_NOTICE
        );
        return $targetObject->$name;
    }

    public function __set($name, $value)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $targetObject = $this->valueHolderf2651;

        $targetObject->$name = $value;

        return $targetObject->$name;
    }

    public function __isset($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__isset', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $targetObject = $this->valueHolderf2651;

        return isset($targetObject->$name);
    }

    public function __unset($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__unset', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $targetObject = $this->valueHolderf2651;

        unset($targetObject->$name);

return;
    }

    public function __clone()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__clone', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $this->valueHolderf2651 = clone $this->valueHolderf2651;
    }

    public function __sleep()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__sleep', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return array('valueHolderf2651');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer16d33 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer16d33;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'initializeProxy', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2651;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderf2651;
    }
}
include_once \dirname(__DIR__, 6).'/vendor/behat/mink/src/Mink.php';

class Mink_ecc9ff5 extends \Behat\Mink\Mink implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Behat\Mink\Mink|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf2651 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer16d33 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties99833 = [
        
    ];

    public function __destruct()
    {
        $this->initializer16d33 || $this->valueHolderf2651->__destruct();
    }

    public function registerSession($name, \Behat\Mink\Session $session)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'registerSession', array('name' => $name, 'session' => $session), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->registerSession($name, $session);
    }

    public function hasSession($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'hasSession', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->hasSession($name);
    }

    public function setDefaultSessionName($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'setDefaultSessionName', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->setDefaultSessionName($name);
    }

    public function getDefaultSessionName()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getDefaultSessionName', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getDefaultSessionName();
    }

    public function getSession($name = null)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getSession', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getSession($name);
    }

    public function isSessionStarted($name = null)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'isSessionStarted', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->isSessionStarted($name);
    }

    public function assertSession($session = null)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'assertSession', array('session' => $session), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->assertSession($session);
    }

    public function resetSessions()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'resetSessions', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->resetSessions();
    }

    public function restartSessions()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'restartSessions', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->restartSessions();
    }

    public function stopSessions()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'stopSessions', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->stopSessions();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Behat\Mink\Mink $instance) {
            unset($instance->defaultSessionName, $instance->sessions);
        }, $instance, 'Behat\\Mink\\Mink')->__invoke($instance);

        $instance->initializer16d33 = $initializer;

        return $instance;
    }

    public function __construct(array $sessions = [])
    {
        static $reflection;

        if (! $this->valueHolderf2651) {
            $reflection = $reflection ?? new \ReflectionClass('Behat\\Mink\\Mink');
            $this->valueHolderf2651 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Behat\Mink\Mink $instance) {
            unset($instance->defaultSessionName, $instance->sessions);
        }, $this, 'Behat\\Mink\\Mink')->__invoke($this);

        }

        $this->valueHolderf2651->__construct($sessions);
    }

    public function & __get($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__get', ['name' => $name], $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        if (isset(self::$publicProperties99833[$name])) {
            return $this->valueHolderf2651->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Mink');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Mink');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__isset', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Mink');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__unset', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Mink');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__clone', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $this->valueHolderf2651 = clone $this->valueHolderf2651;
    }

    public function __sleep()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__sleep', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return array('valueHolderf2651');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Behat\Mink\Mink $instance) {
            unset($instance->defaultSessionName, $instance->sessions);
        }, $this, 'Behat\\Mink\\Mink')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer16d33 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer16d33;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'initializeProxy', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2651;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderf2651;
    }
}
include_once \dirname(__DIR__, 6).'/vendor/behat/mink/src/Session.php';

class Session_4e1eb92 extends \Behat\Mink\Session implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Behat\Mink\Session|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf2651 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer16d33 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties99833 = [
        
    ];

    public function isStarted()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'isStarted', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->isStarted();
    }

    public function start()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'start', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->start();
    }

    public function stop()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'stop', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->stop();
    }

    public function restart()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'restart', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->restart();
    }

    public function reset()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'reset', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->reset();
    }

    public function getDriver()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getDriver', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getDriver();
    }

    public function getPage()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getPage', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getPage();
    }

    public function getSelectorsHandler()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getSelectorsHandler', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getSelectorsHandler();
    }

    public function visit($url)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'visit', array('url' => $url), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->visit($url);
    }

    public function setBasicAuth($user, $password = '')
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'setBasicAuth', array('user' => $user, 'password' => $password), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->setBasicAuth($user, $password);
    }

    public function setRequestHeader($name, $value)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'setRequestHeader', array('name' => $name, 'value' => $value), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->setRequestHeader($name, $value);
    }

    public function getResponseHeaders()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getResponseHeaders', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getResponseHeaders();
    }

    public function getResponseHeader($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getResponseHeader', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getResponseHeader($name);
    }

    public function setCookie($name, $value = null)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'setCookie', array('name' => $name, 'value' => $value), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->setCookie($name, $value);
    }

    public function getCookie($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getCookie', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getCookie($name);
    }

    public function getStatusCode()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getStatusCode', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getStatusCode();
    }

    public function getCurrentUrl()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getCurrentUrl', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getCurrentUrl();
    }

    public function getScreenshot()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getScreenshot', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getScreenshot();
    }

    public function getWindowNames()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getWindowNames', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getWindowNames();
    }

    public function getWindowName()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getWindowName', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getWindowName();
    }

    public function reload()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'reload', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->reload();
    }

    public function back()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'back', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->back();
    }

    public function forward()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'forward', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->forward();
    }

    public function switchToWindow($name = null)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'switchToWindow', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->switchToWindow($name);
    }

    public function switchToIFrame($name = null)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'switchToIFrame', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->switchToIFrame($name);
    }

    public function executeScript($script)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'executeScript', array('script' => $script), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->executeScript($script);
    }

    public function evaluateScript($script)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'evaluateScript', array('script' => $script), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->evaluateScript($script);
    }

    public function wait($time, $condition = 'false')
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'wait', array('time' => $time, 'condition' => $condition), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->wait($time, $condition);
    }

    public function resizeWindow($width, $height, $name = null)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'resizeWindow', array('width' => $width, 'height' => $height, 'name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->resizeWindow($width, $height, $name);
    }

    public function maximizeWindow($name = null)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'maximizeWindow', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->maximizeWindow($name);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Behat\Mink\Session $instance) {
            unset($instance->driver, $instance->page, $instance->selectorsHandler);
        }, $instance, 'Behat\\Mink\\Session')->__invoke($instance);

        $instance->initializer16d33 = $initializer;

        return $instance;
    }

    public function __construct(\Behat\Mink\Driver\DriverInterface $driver, ?\Behat\Mink\Selector\SelectorsHandler $selectorsHandler = null)
    {
        static $reflection;

        if (! $this->valueHolderf2651) {
            $reflection = $reflection ?? new \ReflectionClass('Behat\\Mink\\Session');
            $this->valueHolderf2651 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Behat\Mink\Session $instance) {
            unset($instance->driver, $instance->page, $instance->selectorsHandler);
        }, $this, 'Behat\\Mink\\Session')->__invoke($this);

        }

        $this->valueHolderf2651->__construct($driver, $selectorsHandler);
    }

    public function & __get($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__get', ['name' => $name], $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        if (isset(self::$publicProperties99833[$name])) {
            return $this->valueHolderf2651->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Session');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Session');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__isset', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Session');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__unset', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Session');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__clone', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $this->valueHolderf2651 = clone $this->valueHolderf2651;
    }

    public function __sleep()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__sleep', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return array('valueHolderf2651');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Behat\Mink\Session $instance) {
            unset($instance->driver, $instance->page, $instance->selectorsHandler);
        }, $this, 'Behat\\Mink\\Session')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer16d33 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer16d33;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'initializeProxy', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2651;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderf2651;
    }
}
include_once \dirname(__DIR__, 6).'/vendor/friends-of-behat/symfony-extension/src/Mink/MinkParameters.php';

class MinkParameters_4b72c85 extends \FriendsOfBehat\SymfonyExtension\Mink\MinkParameters implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \FriendsOfBehat\SymfonyExtension\Mink\MinkParameters|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf2651 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer16d33 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties99833 = [
        
    ];

    public function getIterator() : \Traversable
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'getIterator', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->getIterator();
    }

    public function offsetExists($offset) : bool
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'offsetExists', array('offset' => $offset), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->offsetExists($offset);
    }

    public function offsetGet($offset)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'offsetGet', array('offset' => $offset), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->offsetGet($offset);
    }

    public function offsetSet($offset, $value) : void
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'offsetSet', array('offset' => $offset, 'value' => $value), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $this->valueHolderf2651->offsetSet($offset, $value);
return;
    }

    public function offsetUnset($offset) : void
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'offsetUnset', array('offset' => $offset), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $this->valueHolderf2651->offsetUnset($offset);
return;
    }

    public function count() : int
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'count', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return $this->valueHolderf2651->count();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\FriendsOfBehat\SymfonyExtension\Mink\MinkParameters $instance) {
            unset($instance->minkParameters);
        }, $instance, 'FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters')->__invoke($instance);

        $instance->initializer16d33 = $initializer;

        return $instance;
    }

    public function __construct(array $minkParameters)
    {
        static $reflection;

        if (! $this->valueHolderf2651) {
            $reflection = $reflection ?? new \ReflectionClass('FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters');
            $this->valueHolderf2651 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FriendsOfBehat\SymfonyExtension\Mink\MinkParameters $instance) {
            unset($instance->minkParameters);
        }, $this, 'FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters')->__invoke($this);

        }

        $this->valueHolderf2651->__construct($minkParameters);
    }

    public function & __get($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__get', ['name' => $name], $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        if (isset(self::$publicProperties99833[$name])) {
            return $this->valueHolderf2651->$name;
        }

        $realInstanceReflection = new \ReflectionClass('FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $realInstanceReflection = new \ReflectionClass('FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__isset', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $realInstanceReflection = new \ReflectionClass('FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__unset', array('name' => $name), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $realInstanceReflection = new \ReflectionClass('FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2651;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf2651;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__clone', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        $this->valueHolderf2651 = clone $this->valueHolderf2651;
    }

    public function __sleep()
    {
        $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, '__sleep', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;

        return array('valueHolderf2651');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\FriendsOfBehat\SymfonyExtension\Mink\MinkParameters $instance) {
            unset($instance->minkParameters);
        }, $this, 'FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer16d33 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer16d33;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer16d33 && ($this->initializer16d33->__invoke($valueHolderf2651, $this, 'initializeProxy', array(), $this->initializer16d33) || 1) && $this->valueHolderf2651 = $valueHolderf2651;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2651;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderf2651;
    }
}

<?php

namespace cf47\plugin\realtyspace\module\property\currency\exchangerate;

use cf47\themecore\TransientsManager;
use Ivory\HttpAdapter\FileGetContentsHttpAdapter;
use Swap\Exception\Exception;
use Swap\Model\CurrencyPair;
use Swap\Provider\ChainProvider;
use Swap\Provider\GoogleFinanceProvider;
use Swap\Provider\YahooFinanceProvider;
use Swap\Swap;

class Service
{
    private $service;
    /**
     * @var ExchangeErrorHandler
     */
    private $error_handler;

    public function __construct(TransientsManager $transients_manager, ExchangeErrorHandler $error_handler)
    {
        $http_adapter = new FileGetContentsHttpAdapter();
        $provider = new ChainProvider([
            new GoogleFinanceProvider($http_adapter),
            new YahooFinanceProvider($http_adapter)
        ]);
        $cache = new WpTransientCache($transients_manager, DAY_IN_SECONDS);
        $this->service = new Swap($provider, $cache);
        $this->error_handler = $error_handler;
    }

    public function get_rate($primary_currency, $target_currency)
    {
        try {
            return $this->service->quote(
                new CurrencyPair(
                    $primary_currency,
                    $target_currency
                )
            );
        } catch (Exception $e) {
            $this->error_handler->handle();
        }
    }
}

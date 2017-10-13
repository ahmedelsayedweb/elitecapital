<?php

namespace cf47\plugin\realtyspace\module\property\currency\exchangerate;

use cf47\themecore\TransientsManager;
use Swap\CacheInterface;
use Swap\Model\CurrencyPair;
use Swap\Model\Rate;

class WpTransientCache implements CacheInterface
{

    /**
     * @var TransientsManager
     */
    private $cache;
    /**
     * @var
     */
    private $ttl;

    public function __construct(TransientsManager $cache, $ttl)
    {
        $this->cache = $cache;
        $this->ttl = $ttl;
    }

    /**
     * Fetches the rate.
     *
     * @param CurrencyPair $currencyPair
     *
     * @return Rate|null
     */
    public function fetchRate(CurrencyPair $currencyPair)
    {
        $rate = $this->cache->get($currencyPair->toString());

        return false === $rate ? null : $rate;
    }

    /**
     * Stores the rate.
     *
     * @param CurrencyPair $currencyPair
     * @param Rate $rate
     */
    public function storeRate(CurrencyPair $currencyPair, Rate $rate)
    {
        $this->cache->set($currencyPair->toString(), $rate, $this->ttl);
    }
}

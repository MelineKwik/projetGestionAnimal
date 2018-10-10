<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache_warmer' shared service.

return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['kernel.class_cache.cache_warmer']) ? $this->services['kernel.class_cache.cache_warmer'] : $this->load('getKernel_ClassCache_CacheWarmerService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['validator.mapping.cache_warmer']) ? $this->services['validator.mapping.cache_warmer'] : $this->load('getValidator_Mapping_CacheWarmerService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['translation.warmer']) ? $this->services['translation.warmer'] : $this->load('getTranslation_WarmerService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['router.cache_warmer']) ? $this->services['router.cache_warmer'] : $this->load('getRouter_CacheWarmerService.php')) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['annotations.cache_warmer']) ? $this->services['annotations.cache_warmer'] : $this->load('getAnnotations_CacheWarmerService.php')) && false ?: '_'};
    yield 5 => ${($_ = isset($this->services['twig.cache_warmer']) ? $this->services['twig.cache_warmer'] : $this->load('getTwig_CacheWarmerService.php')) && false ?: '_'};
    yield 6 => ${($_ = isset($this->services['twig.template_cache_warmer']) ? $this->services['twig.template_cache_warmer'] : $this->load('getTwig_TemplateCacheWarmerService.php')) && false ?: '_'};
    yield 7 => ${($_ = isset($this->services['doctrine.orm.proxy_cache_warmer']) ? $this->services['doctrine.orm.proxy_cache_warmer'] : $this->load('getDoctrine_Orm_ProxyCacheWarmerService.php')) && false ?: '_'};
}, 8));

<?php 

namespace Zuni\MenuBundle\Config\Loader;

use Symfony\Component\Config\Loader\FileLoader;
use Symfony\Component\Yaml\Yaml;


class YamlMenuLoader extends FileLoader
{
    
    public function load($resource, $type = null)
    {
        return Yaml::parse($resource);
    }

     public function supports($resource, $type = null)
    {
        return is_string($resource) && 'yml' === pathinfo(
            $resource,
            PATHINFO_EXTENSION
        );
    }
    
}
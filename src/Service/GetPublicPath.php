<?php

namespace  App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class GetPublicPath {

    private  $parameterBag;

    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
    }

    public function getPublicPath() {
        return $this->parameterBag->get("project_dir");
    }

    public function __toString()
    {
        return "";
    }
}


//https://stackoverflow.com/questions/48585265/symfony-4-how-to-get-public-from-rootdir
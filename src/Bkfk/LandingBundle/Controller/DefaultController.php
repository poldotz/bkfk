<?php

namespace Bkfk\LandingBundle\Controller;


use Bkfk\StoreBundle\Entity\Location;
use Bkfk\StoreBundle\Entity\Point;
use Bkfk\StoreBundle\Entity\Resource;
use Geocoder\Geocoder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {


        $adapter = new \Geocoder\HttpAdapter\BuzzHttpAdapter();
        $geocoder = new Geocoder();
        $geocoder->registerProvider(new \Geocoder\Provider\GoogleMapsProvider($adapter,'it_IT','it_IT'));
        $result =  $geocoder->geocode('Viale colombo, Quartu sant\'Elena');
        //$loc = new Location(array($result->getLatitude(),$result->getLongitude()));

        $point = new Point($result->getLatitude(),$result->getLongitude());
        $resource = new Resource();
        $resource->setLocation($point);


        return $this->render('BkfkLandingBundle:Default:index.html.twig');
    }
}

<?php

namespace Bkfk\LandingBundle\Controller;


use Bkfk\StoreBundle\Entity\Location;
use Bkfk\StoreBundle\Entity\Resource;
use CrEOF\Spatial\DBAL\Types\Geography\PointType;
use CrEOF\Spatial\PHP\Types\Geography\Point;
use CrEOF\Spatial\Tests\Fixtures\PointEntity;
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
        var_dump($result);
        //$loc = new Location(array($result->getLatitude(),$result->getLongitude()));


        $resource = new Resource();
        //$loc = new Location(array($result->getLatitude(),$result->getLongitude()));
        $point = new
        $resource->setLocation($point);





        return $this->render('BkfkLandingBundle:Default:index.html.twig');
    }
}

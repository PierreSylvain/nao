<?php

namespace AppBundle\Controller\API;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class BlogController
 * @package AppBundle\Controller
 * @Route("/api/newsletter")
 */
class NewsletterController extends Controller
{

    /**
     * @Route("/subscribe", name="newsletter.subscribe")
     * @Method({"POST"})
     */
    public function subscribeAction(Request $request)
    {
        $email = $request->get('ng_email');
        $response = $this->container->get('app.news')->subscribe($email);
        return new JsonResponse($response);
    }


}

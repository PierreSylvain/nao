<?php
namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Comment;
use AppBundle\Form\Type\CommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


/**
 * Class CommentController
 *
 * @Route("/admin/coment")
 *
 * @package AppBundle\Controller\Admin
 */
class CommentController extends Controller
{

    /**
     * List Comment to moderate
     *
     * @Route("/{page}", requirements={"page" = "\d+"} , defaults={"page" = 1}, name="admin_comment_index")
     * @Method({"GET"})
     *
     * @param Request $request  Httpd request
     * @param int $page         Page number
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $page = 1)
    {
        /*
        $em = $this->getDoctrine()->getManager();
        $c = $this->get('security.token_storage')->getToken()->getUser();
        $posts = $em->getRepository('AppBundle:Post')->getPostsByStatus($page,$status,$this->getParameter('list_limit'));

        return $this->render('@AdminPost/index.html.twig', [
            'token' => $this->container->get('lexik_jwt_authentication.jwt_manager')->create($c),
            'paginate' => $this->container->get('app.post')->getPagination($posts,$page),
            'postlist' => $posts->getIterator()
        ]);
        */
    }


}

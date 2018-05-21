<?php

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use AppBundle\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;


class ReviewController extends Controller
{
    /**
     * List review with user
     *
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/review/", name="review_index")
     * @Method("GET")
     */
    public function indexAction(Review $review, User $user)
    {
        return $this->render('review/index.html.twig', array(
            'review' => $review,
            'user' => $user
        ));
    }
    /**
     * new review
     *
     * @Route ("/review/new", name="new_review")
     * @Method("POST")
     */
    public function newAction()
    {
        return $this->render('review/new.html.twig', array());
    }
}

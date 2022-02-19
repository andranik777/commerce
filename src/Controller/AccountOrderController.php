<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\Order;
use App\Service\PdfGeneratorService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccountOrderController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/compte/mes-commandes", name="account_order")
     */
    public function index()
    {
        $orders = $this->entityManager->getRepository(Order::class)->findSuccessOrders($this->getUser());

        return $this->render('account/order.html.twig', [
            'orders' => $orders
        ]);
    }

    /**
     * @Route("/compte/mes-commandes/{reference}", name="account_order_show")
     */
    public function show($reference)
    {
        $order = $this->entityManager->getRepository(Order::class)->findOneByReference($reference);

        $content = $this->render('account/order_show.html.twig', [
            'order' => $order
        ])->getContent();

        if (!$order || $order->getUser() != $this->getUser()) {

            return $this->redirectToRoute('account_order');

        }

        return $this->render('account/order_show.html.twig', [
            'order' => $order
        ]);
    }

    /**
     * @Route("/compte/mes-commandes/{reference}/download", name="account_order_download")
     */

    public function download($reference, PdfGeneratorService $generatorService) {

        $user = $this->getUser() ;
        $address = $this->entityManager->getRepository(Address::class)->findOneBy(["user"=>$user]);
        $order = $this->entityManager->getRepository(Order::class)->findOneByReference($reference);
        $html=  $this->renderView('account/order_download.html.twig', [
           'order' => $order,
           'user'=> $user,
           'user_address'=>$address
        ]);

        $generatorService->showPdfFile($html);

        die();






    }
}

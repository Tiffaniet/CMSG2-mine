<?php
namespace Controller;

use Model\PageRepository;


class PageController
{
    private $repository;

    public function __construct(\PDO $PDO)
    {
        $this->repository = new PageRepository($PDO);
    }

    public function ajoutAction()
    {
    }

    public function supprimerAction()
    {
    }

    public function modifierAction()
    {
    }

    public function detailsAction()
    {
    }

    public function listeAction()
    {
    }

    public function displayAction()
    {
//      $slug = $_GET['p'] ?? $_POST['p'] ?? 'teletubbies';
        if(isset($_GET['p'])){
            $slug = $_GET['p'];
        } else {
            $slug = 'teletubbies';
        }
        $page = $this->repository->getSlug($slug);
        if(!$page){
            include "Views/404.php";
            return;
        }
        include "Views/page.php";
    }

}
<?php

namespace App\Controller;
use App\Entity\Author;
use App\Form\AuthorType;
use App\Repository\AuthorRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    #[Route('/showauthor/{name}', name: 'showauthor')]
    public function showAuthor($name): Response
    {
        return $this->render('author/author.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route('/list', name: 'list')]
    public function list(): Response
    {
        $authors = array(
            array('id' => 1, 'picture' => '../images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' =>
            'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '../images/william-shakespeare.jpg','username' => ' William Shakespeare', 'email' =>
            ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '../images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' =>
            'taha.hussein@gmail.com', 'nb_books' => 300),
            );
        return $this->render('author/list.html.twig', [
            'a' => $authors,
        ]);
    }
    #[Route('/authorDetails/{id}', name: 'authorDetails')]
public function authorDetails($id): Response
{ $authors = array(
    array('id' => 1, 'picture' => '../images/Victor-Hugo.jpg','username' => ' Victor
    Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
    array('id' => 2, 'picture' => '../images/william-shakespeare.jpg','username' => '
    William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' =>
    200 ),
    array('id' => 3, 'picture' => '../images/Taha_Hussein.jpg','username' => ' Taha
    Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),);
    return $this->render('author/showAuthor.html.twig', [
        'd' => $id,
        'a' => $authors
    ]);
}
#[Route('/listAuth',name :'listAuth')]
public function fetchAuthor(AuthorRepository $repo){
    $Authors=$repo->findAll();
    return $this->render('author/listAuthor.html.twig',[
        'result'=>$Authors]);
}
#[Route('/addAuthorForm', name: 'addAuthorForm')]
public function addAuthorForm(ManagerRegistry $mr, Request $request): Response
{
    // Création d'une nouvelle instance de l'entité Author
    $author = new Author();

    // Création du formulaire avec le formulaire AuthorType
    $form = $this->createForm(AuthorType::class, $author);

    // Traitement du formulaire lors de la soumission
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Sauvegarde de l'auteur dans la base de données
        $em = $mr->getManager();
        $em->persist($author);
        $em->flush();

        // Redirection vers la page listAuthor après l'ajout
        return $this->redirectToRoute('list_auth');
    }

    // Affichage du formulaire dans le template
    return $this->render('author\addAuthorForm.html.twig', [
        'form' => $form->createView(),
    ]);
}
#[Route('/editAuthor/{id}', name: 'edit_author')]
public function editAuthor(ManagerRegistry $mr, Request $request, $id): Response
{
    $em = $mr->getManager();
    $author = $em->getRepository(Author::class)->find($id);

    if (!$author) {
        throw $this->createNotFoundException('Author not found');
    }

    // Create the edit form
    $form = $this->createForm(AuthorType::class, $author);

    // Handle the form submission
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Save the edited author to the database
        $em->flush();

        // Redirect to the list of authors
        return $this->redirectToRoute('list_auth');
    }

    // Render the edit form
    return $this->render('author/editAuthor.html.twig', [
        'form' => $form->createView(),
        'author' => $author,
    ]);
}
#[Route('/deleteAuthor/{id}', name: 'delete_author')]
public function deleteAuthor(ManagerRegistry $mr, $id): Response
{
    $em = $mr->getManager();
    $author = $em->getRepository(Author::class)->find($id);

    if (!$author) {
        throw $this->createNotFoundException('Author not found');
    }

    // Remove the author from the database
    $em->remove($author);
    $em->flush();

    // Redirect to the list of authors
    return $this->redirectToRoute('list_auth');
}



/*
#[Route('/addAuth',name:'addauth')]
public function addAuthor(ManagerRegistry $mr){
$author=new Author();
$author->setUsername('dina');
$author->setEmail('dina@esprit.tn');
$em=$mr->getManager();
$em->persist($author);
$em->flush();
return $this->redirectToRoute('listAuth');

}

*/





}

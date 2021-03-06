<?php

namespace SRVDV\ServerBundle\Controller;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\AbstractType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityRepository;

use SRVDV\ServerBundle\Entity\User;
use SRVDV\ServerBundle\Entity\Annee;
use SRVDV\ServerBundle\Entity\Filiere;
use SRVDV\ServerBundle\Entity\Matiere;
use SRVDV\ServerBundle\Entity\TypeEnseignant;
use SRVDV\ServerBundle\Entity\TypeUtilisateur;

use SRVDV\ServerBundle\Entity\Inscription;


class AnneeSuivanteController extends Controller
{
    /**
     * @Route("/admin/anneeSuivante",name="annee_suivante")
     * @Template()
     */
    public function indexAction(Request $req){         
          
         
                $Annee = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findAll();          
                 return $this->render('SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig', array(                  
                  'Annee' => $Annee,
                  ) );       
    
     }



     


      /**
     * @Route("/admin/generateUsers/{id}",name="generate_Annee_users")
     * @Template()
     */
    public function generateUsersAction(Annee $annee , Request $req){         
          
                 $annee_actuelle= $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy( array('etat' => 1)); 

                foreach ($annee_actuelle as $key => $value) {
                    $idAnnee=$value->getId();
                }

                $annee_filiere_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy( array('anneeFiliere' =>  $idAnnee )); 
                  


                  foreach ($annee_filiere_actuelle as $key => $value) {
                    

                    $filiere = new Filiere();
                    $filiere->setDateFiliere(new \Datetime("Y")); 
                    $filiere->setNom($value->getNom());
                      $filiere->setUser($value->getUser());
                      $filiere->setNiveau($value->getNiveau());

                       $filiere->setAnneeFiliere($annee);

                        $em = $this->getDoctrine()->getManager();
                        $em->persist($filiere);
                       $em->flush();

                          $Matiere_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findBy( array('Filiere' => $value->getId() )); 
                


                            foreach ($Matiere_actuelle as $key => $val) {
                               $matiere= new Matiere();
                                  $matiere->setNom($val->getNom());
                                   $matiere->setNbrHeurGroupe($val->getNbrHeurGroupe());
                                    $matiere->setNombreGroupe($val->getNombreGroupe());
                                     $matiere->setFiliere($filiere);
                                     $matiere->setTypeEnseignant($val->getTypeEnseignant());
                                     $matiere->setSemestre($val->getSemestre());
                                   $em = $this->getDoctrine()->getManager();
                                    $em->persist($matiere);
                                   $em->flush();
                            } 

                       

                }

                  $filiere_annee_Suivante = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy( array('anneeFiliere' =>  $annee->getId() )); 
                  
                 return $this->render('SRVDVServerBundle:admin:NouveauxUsersAdmin.html.twig', array(                  
                  'filiere_annee_Suivante' => $filiere_annee_Suivante
                  ) );       
    
     }

 }
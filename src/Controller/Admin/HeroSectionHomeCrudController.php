<?php

namespace App\Controller\Admin;

use App\Entity\HeroSectionHome;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HeroSectionHomeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HeroSectionHome::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        // Primeni prilagođene oznake na akcije na više stranica
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL) // Add DETAIL action to the index page
            ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $action) {
                return $action->setLabel('Dodaj'); // Change label for NEW action
            })
            ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $action) {
                return $action->setLabel('Izmjeni'); // Change label for EDIT action
            })
            ->update(Crud::PAGE_INDEX, Action::DETAIL, function (Action $action) {
                return $action->setLabel('Prikaži'); // Change label for DETAIL action
            })
            ->update(Crud::PAGE_DETAIL, Action::EDIT, function (Action $action) {
                return $action->setLabel('Edituj');
            })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE, function (Action $action) {
                return $action->setLabel('Sačuvaj i nastavi uređivanje');
            })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN, function (Action $action) {
                return $action->setLabel('Sačuvaj i vrati se');
            })
            ->update(Crud::PAGE_NEW, Action::SAVE_AND_ADD_ANOTHER, function (Action $action) {
                return $action->setLabel('Sačuvaj i dodaj');
            })
            ->update(Crud::PAGE_NEW, Action::SAVE_AND_RETURN, function (Action $action) {
                return $action->setLabel('Sačuvaj i vrati se');
            });
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Pregled')
            ->setPageTitle(Crud::PAGE_NEW, 'Kreiraj')
            ->setPageTitle(Crud::PAGE_EDIT, 'Edituj')
            ->setPageTitle(Crud::PAGE_DETAIL, 'Detalji');
        // ->setEntityLabelInSingular('Kategorije linkovi')
        //->setEntityLabelInPlural('Kategorije link');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('mainTitlePreText', 'Prethodni tekst glavnog naslova'),
            TextField::new('mainTitle', 'Glavni naslov'),
            TextEditorField::new('paragraph', 'Paragraf'),

            TextField::new('cta1Link', 'Prvi CTA link')->setHelp('Ostavite prazno polje za naziv dugme ako ne zelite da se dugme prikaze '),
            TextField::new('cta1Title', 'Naslov prvog CTA')->setHelp('Ostavite prazno polje za naziv dugme ako ne zelite da se dugme prikaze '),

            TextField::new('cta2Link', 'Drugi CTA link')->setHelp('Ostavite prazno polje za naziv dugme ako ne zelite da se dugme prikaze '),
            TextField::new('cta2LinkText', 'Tekst drugog CTA linka')->setHelp('Ostavite prazno polje za naziv dugme ako ne zelite da se dugme prikaze '),

            BooleanField::new('type', 'Tip')->setHelp('Ukoliko je checkirano, dva dugmeta iznad ce biti prikazana na stranici'),

            ImageField::new('backgroundImage', 'Pozadinska slika')
                ->setBasePath('media/')
                ->setUploadDir('public/media')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)
                ->setHelp('Preporučen je webp format slike zbog automatske optimizacije'),
        ];
    }

}

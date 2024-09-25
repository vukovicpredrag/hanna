<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductCrudController extends AbstractCrudController
{

    private $entityManager;

    // Inject Doctrine EntityManager into the constructor
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public static function getEntityFqcn(): string
    {
        return Product::class;
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
                return $action->setLabel('Edituj proizvod'); // Prilagođena oznaka za dugme "Izmeni" na stranici detalja
            })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE, function (Action $action) {
                return $action->setLabel('Sačuvaj i nastavi uređivanje'); // Prilagođena oznaka za "Sačuvaj i nastavi"
            })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN, function (Action $action) {
                return $action->setLabel('Sačuvaj i vrati se'); // Prilagođena oznaka za "Sačuvaj i vrati se"
            })
            ->update(Crud::PAGE_NEW, Action::SAVE_AND_ADD_ANOTHER, function (Action $action) {
                return $action->setLabel('Sačuvaj i dodaj novi'); // Prilagođena oznaka za "Sačuvaj i dodaj novi" na stranici za dodavanje
            })
            ->update(Crud::PAGE_NEW, Action::SAVE_AND_RETURN, function (Action $action) {
                return $action->setLabel('Sačuvaj i vrati se'); // Prilagođena oznaka za "Sačuvaj i vrati se" na stranici za dodavanje
            });
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Lista proizvoda')
            ->setPageTitle(Crud::PAGE_NEW, 'Kreiraj novi proizvod') // Prilagođena oznaka za "Dodaj proizvod" dugme
            ->setPageTitle(Crud::PAGE_EDIT, 'Edituj proizvod')
            ->setPageTitle(Crud::PAGE_DETAIL, 'Detalji o proizvodu')
            ->setEntityLabelInSingular('Proizvod')
            ->setEntityLabelInPlural('Proizvodi');
    }

    public function configureFields(string $pageName): iterable
    {

        // Fetch the categories from the database
        $categories = $this->entityManager->getRepository(Categories::class)->findAll();

        // Create an array of choices with 'name' as the display value and 'id' as the value
        $categoryChoices = [];
        foreach ($categories as $category) {
            $categoryChoices[$category->getName()] = $category->getId();
        }

        return [
            TextField::new('title', 'Naslov'),
            ImageField::new('mainImage', 'Glavna slika')
                ->setBasePath('media/')
                ->setUploadDir('public/media')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            ChoiceField::new('category', 'Kategorija')
                ->setChoices($categoryChoices) // Set the dynamically fetched categories as choices
                ->renderExpanded(false) // Render as a dropdown (false for select, true for radio buttons)
                ->allowMultipleChoices(false),

            TextareaField::new('shortDescription', 'Kratak opis'),
            TextareaField::new('mainDescription', 'Glavni opis')->hideOnIndex(),
            TextField::new('slug'),
            TextField::new('ribbonIndicator', 'Indikator trake')->hideOnIndex(),
            TextField::new('ribbonIndicatorText', 'Tekst indikatora trake')->hideOnIndex(),
            IntegerField::new('mainPrice', 'Glavna cena'),
            IntegerField::new('discoutedPrice', 'Cena sa popustom')->hideOnIndex(),
            TextEditorField::new('singeProductTermsBox1Text1', 'Tekst prve stavke uslova 1')->hideOnIndex(),
            TextEditorField::new('singeProductTermsBox1Text2', 'Tekst prve stavke uslova 2')->hideOnIndex(),
            TextField::new('singeProductTermsBox2Icon', 'Ikona druge stavke uslova')->hideOnIndex(),
            TextEditorField::new('singeProductTermsBox2Text1', 'Tekst druge stavke uslova 1')->hideOnIndex(),
            TextEditorField::new('singeProductTermsBox2Text2', 'Tekst druge stavke uslova 2')->hideOnIndex(),
            TextField::new('singeProductTermsBox3Icon', 'Ikona treće stavke uslova')->hideOnIndex(),
            TextEditorField::new('singeProductTermsBox3Text1', 'Tekst treće stavke uslova 1')->hideOnIndex(),
            TextEditorField::new('singeProductTermsBox3Text2', 'Tekst treće stavke uslova 2')->hideOnIndex(),
            TextareaField::new('singleProductAvailabilityText', 'Tekst o dostupnosti proizvoda')->hideOnIndex(),

            ImageField::new('image1', 'Slika 1')
                ->setBasePath('media/')
                ->setUploadDir('public/media')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)->hideOnIndex(),
            ImageField::new('image2', 'Slika 2')
                ->setBasePath('media/')
                ->setUploadDir('public/media')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)->hideOnIndex(),
            ImageField::new('image3', 'Slika 3')
                ->setBasePath('media/')
                ->setUploadDir('public/media')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)->hideOnIndex(),
            ImageField::new('image4', 'Slika 4')
                ->setBasePath('media/')
                ->setUploadDir('public/media')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)->hideOnIndex(),

            ArrayField::new('keywords', 'Ključne reči')->hideOnIndex(),

        ];
    }

}
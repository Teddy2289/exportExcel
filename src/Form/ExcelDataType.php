<?php

namespace App\Form;

use App\Entity\ExcelData;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExcelDataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('compteAffaire', TextType::class, [
                'label' => 'Compte Affaire',
            ])
            ->add('compteEvenement', TextType::class, [
                'label' => 'Compte évènement (Veh)',
            ])
            ->add('compteDernierEvenement', TextType::class, [
                'label' => 'Compte dernier évènement (Veh)',
            ])
            ->add('numeroFiche', IntegerType::class, [
                'label' => 'Numéro de fiche',
            ])
            ->add('civilite', TextType::class, [
                'label' => 'Civilité',
                'required' => false,
            ])
            ->add('proprietaireVehicule', TextType::class, [
                'label' => 'Propriétaire actuel du véhicule',
                'required' => false,
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => false,
            ])
            ->add('numeroEtNomVoie', TextType::class, [
                'label' => 'N° et Nom de la voie',
                'required' => false,
            ])
            ->add('complementAdresse1', TextType::class, [
                'label' => 'Complément adresse 1',
                'required' => false,
            ])
            ->add('codePostal', IntegerType::class, [
                'label' => 'Code postal',
            ])
            ->add('ville', TextType::class, [
                'label' => 'Ville',
            ])
            ->add('telephoneDomicile', IntegerType::class, [
                'label' => 'Téléphone domicile',
                'required' => false,
            ])
            ->add('telephonePortable', IntegerType::class, [
                'label' => 'Téléphone portable',
            ])
            ->add('telephoneJob', IntegerType::class, [
                'label' => 'Téléphone job',
                'required' => false,
            ])
            ->add('emailP1', EmailType::class, [
                'label' => 'Email',
                'required' => false,
            ])
            ->add('dateMiseCirculation', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de mise en circulation',
            ])
            ->add('dateAchat', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date achat (date de livraison)',
            ])
            ->add('dateDernierEvenement', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date dernier évènement (Veh)',
            ])
            ->add('marque', TextType::class, [
                'label' => 'Libellé marque (Mrq)',
            ])
            ->add('modele', TextType::class, [
                'label' => 'Libellé modèle (Mod)',
                'required' => false,
            ])
            ->add('version', TextType::class, [
                'label' => 'Version',
                'required' => false,
            ])
            ->add('vin', TextType::class, [
                'label' => 'VIN',
            ])
            ->add('immatriculation', TextType::class, [
                'label' => 'Immatriculation',
            ])
            ->add('typeProspect', ChoiceType::class, [
                'label' => 'Type de prospect',
                'choices' => [
                    'SOCIETE' => 'SOCIETE',
                    'PARTICULIER' => 'PARTICULIER',
                ],
            ])
            ->add('kilometrage', TextType::class, [
                'label' => 'Kilométrage',
            ])
            ->add('energie', TextType::class, [
                'label' => 'Libellé énergie (Energ)',
            ])
            ->add('vendeurVN', TextType::class, [
                'label' => 'Vendeur VN',
                'required' => false,
            ])
            ->add('vendeurVo', TextType::class, [
                'label' => 'Vendeur VO',
                'required' => false,
            ])
            ->add('commentaireFacture', TextType::class, [
                'label' => 'Commentaire de facturation (Veh)',
                'required' => false,
            ])
            ->add('typeVNVO', ChoiceType::class, [
                'label' => 'Type VN VO',
                'choices' => [
                    'VN' => 'VN',
                    'VO' => 'VO',
                ],
            ])
            ->add('numeroDossierVNVO', TextType::class, [
                'label' => 'Numéro de dossier VN VO',
                'required' => false,
            ])
            ->add('intermadiareVenteVN', TextType::class, [
                'label' => 'Intermediaire de vente VN',
                'required' => false,
            ])
            ->add('dateEvenement', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date évènement (Veh)',
            ])
            ->add('origineEvenement', ChoiceType::class, [
                'label' => 'Origine évènement (Veh)',
                'choices' => [
                    'Atelier' => 'Atelier',
                    'Véhicule neuf' => 'Véhicule neuf',
                    'Véhicule d\'occasion' => 'Véhicule d\'occasion',
                    'Magasin' => 'Magasin',
                ],
            ])
            ->add('enregistrer', SubmitType::class, [
                'label' => 'Enregistrer',
                'attr' => ['class' => 'btn-sm btn-outline-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ExcelData::class,
        ]);
    }
}

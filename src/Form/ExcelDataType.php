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
                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('compteEvenement', TextType::class, [
                'label' => 'Compte évènement (Veh)',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('compteDernierEvenement', TextType::class, [
                'label' => 'Compte dernier évènement (Veh)',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('numeroFiche', IntegerType::class, [
                'label' => 'Numéro de fiche',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('civilite', TextType::class, [
                'label' => 'Civilité',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('proprietaireVehicule', TextType::class, [
                'label' => 'Propriétaire actuel du véhicule',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('numeroEtNomVoie', TextType::class, [
                'label' => 'N° et Nom de la voie',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('complementAdresse1', TextType::class, [
                'label' => 'Complément adresse 1',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('codePostal', IntegerType::class, [
                'label' => 'Code postal',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('ville', TextType::class, [
                'label' => 'Ville',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('telephoneDomicile', IntegerType::class, [
                'label' => 'Téléphone domicile',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('telephonePortable', IntegerType::class, [
                'label' => 'Téléphone portable',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('telephoneJob', IntegerType::class, [
                'label' => 'Téléphone job',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('emailP1', EmailType::class, [
                'label' => 'Email',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('dateMiseCirculation', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de mise en circulation',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('dateAchat', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date achat (date de livraison)',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('dateDernierEvenement', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date dernier évènement (Veh)',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('marque', TextType::class, [
                'label' => 'Libellé marque (Mrq)',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('modele', TextType::class, [
                'label' => 'Libellé modèle (Mod)',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('version', TextType::class, [
                'label' => 'Version',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('vin', TextType::class, [
                'label' => 'VIN',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('immatriculation', TextType::class, [
                'label' => 'Immatriculation',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('typeProspect', ChoiceType::class, [
                'label' => 'Type de prospect',
                'choices' => [
                    'SOCIETE' => 'SOCIETE',
                    'PARTICULIER' => 'PARTICULIER',
                ],
                                'attr' => ['class' => 'form-select form-select-sm'],
            ])
            ->add('kilometrage', TextType::class, [
                'label' => 'Kilométrage',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('energie', TextType::class, [
                'label' => 'Libellé énergie (Energ)',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('vendeurVN', TextType::class, [
                'label' => 'Vendeur VN',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('vendeurVo', TextType::class, [
                'label' => 'Vendeur VO',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('commentaireFacture', TextType::class, [
                'label' => 'Commentaire de facturation (Veh)',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('typeVNVO', ChoiceType::class, [
                'label' => 'Type VN VO',
                'choices' => [
                    'VN' => 'VN',
                    'VO' => 'VO',
                ],
                                'attr' => ['class' => 'form-select form-select-sm'],
            ])
            ->add('numeroDossierVNVO', TextType::class, [
                'label' => 'Numéro de dossier VN VO',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('intermadiareVenteVN', TextType::class, [
                'label' => 'Intermediaire de vente VN',
                'required' => false,
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('dateEvenement', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date évènement (Veh)',
                                'attr' => ['class' => 'form-control-sm'],
            ])
            ->add('origineEvenement', ChoiceType::class, [
                'label' => 'Origine évènement (Veh)',
                'choices' => [
                    'Atelier' => 'Atelier',
                    'Véhicule neuf' => 'Véhicule neuf',
                    'Véhicule d\'occasion' => 'Véhicule d\'occasion',
                    'Magasin' => 'Magasin',
                ],
                                'attr' => ['class' => 'form-select form-select-sm'],
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

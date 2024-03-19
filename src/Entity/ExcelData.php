<?php

namespace App\Entity;

use App\Repository\ExcelDataRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ExcelDataRepository::class)]
class ExcelData
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    #[Assert\Length(min: 5,minMessage: "Le compte compte Affaire au moins {{ limit }} caractères.")]
    private ?string $compteAffaire = null;

    #[ORM\Column(length: 128)]
    #[Assert\Length(min: 5,minMessage: "Le compte évènement (Veh) au moins {{ limit }} caractères.")]
    private ?string $compteEvenement = null;

    #[ORM\Column(length: 128)]
    #[Assert\Length(min: 5,minMessage: "Le compte dernier événement doit contenir au moins {{ limit }} caractères.")]
    private ?string $compteDernierEvenement = null;

    #[ORM\Column]
    #[Assert\Length(min: 3,minMessage: 'Le Numéro de fiche doit contenir minumum 3 chiffres')]
    #[Assert\Regex('/^\d{1,5}$/',message: 'Le Numéro de fiche doit contenir entre 1 et 5 chiffres.')]
    private ?int $numeroFiche = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $civilite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proprietaireVehicule = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $numeroEtNomVoie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $complementAdresse1 = null;

    #[ORM\Column]
    #[Assert\Regex('/^\d{5,}$/',message: 'Le Code postal doit contenir 5 chiffres.')]
    private ?int $codePostal = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Regex('/^\d{0,9}$/', message: 'Numéro de téléphone domicile invalide.')]
    private ?int $telephoneDomicile = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Regex('/^\d{0,9}$/', message: 'Numéro de téléphone invalide.')]
    private ?int $telephonePortable = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Regex('/^\d{0,9}$/', message: 'Numéro de téléphone invalide.')]
    private ?int $telephoneJob = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $emailP1 = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateMiseCirculation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateAchat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDernierEvenement = null;

    #[ORM\Column(length: 255)]
    private ?string $marque = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $modele = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $version = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex('/^[A-Z0-9]{17}$/',message: 'le VIN  n\'est pas valide.')]
    private ?string $vin = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Regex('/^[A-Z]{2}-\d{3}-[A-Z]{2}$/',message: 'Matricule est inavlide ')]
    private ?string $immatriculation = null;

    #[ORM\Column(length: 255)]
    private ?string $typeProspect = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Regex('/^\d{5,}$/',message: 'Le Kilométrage doit contenir 5 chiffres.')]
    private ?string $kilometrage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $energie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vendeurVN = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vendeurVo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentaireFacture = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeVNVO = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numeroDossierVNVO = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $intermadiareVenteVN = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateEvenement = null;

    #[ORM\Column(length: 128)]
    private ?string $origineEvenement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteAffaire(): ?string
    {
        return $this->compteAffaire;
    }

    public function setCompteAffaire(string $compteAffaire): static
    {
        $this->compteAffaire = $compteAffaire;

        return $this;
    }

    public function getCompteEvenement(): ?string
    {
        return $this->compteEvenement;
    }

    public function setCompteEvenement(string $compteEvenement): static
    {
        $this->compteEvenement = $compteEvenement;

        return $this;
    }

    public function getCompteDernierEvenement(): ?string
    {
        return $this->compteDernierEvenement;
    }

    public function setCompteDernierEvenement(string $compteDernierEvenement): static
    {
        $this->compteDernierEvenement = $compteDernierEvenement;

        return $this;
    }

    public function getNumeroFiche(): ?int
    {
        return $this->numeroFiche;
    }

    public function setNumeroFiche(int $numeroFiche): static
    {
        $this->numeroFiche = $numeroFiche;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(?string $civilite): static
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getProprietaireVehicule(): ?string
    {
        return $this->proprietaireVehicule;
    }

    public function setProprietaireVehicule(?string $proprietaireVehicule): static
    {
        $this->proprietaireVehicule = $proprietaireVehicule;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumeroEtNomVoie(): ?string
    {
        return $this->numeroEtNomVoie;
    }

    public function setNumeroEtNomVoie(string $numeroEtNomVoie): static
    {
        $this->numeroEtNomVoie = $numeroEtNomVoie;

        return $this;
    }

    public function getComplementAdresse1(): ?string
    {
        return $this->complementAdresse1;
    }

    public function setComplementAdresse1(?string $complementAdresse1): static
    {
        $this->complementAdresse1 = $complementAdresse1;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephoneDomicile(): ?int
    {
        return $this->telephoneDomicile;
    }

    public function setTelephoneDomicile(?int $telephoneDomicile): static
    {
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    public function getTelephonePortable(): ?int
    {
        return $this->telephonePortable;
    }

    public function setTelephonePortable(?int $telephonePortable): static
    {
        $this->telephonePortable = $telephonePortable;

        return $this;
    }

    public function getTelephoneJob(): ?int
    {
        return $this->telephoneJob;
    }

    public function setTelephoneJob(?int $telephoneJob): static
    {
        $this->telephoneJob = $telephoneJob;

        return $this;
    }

    public function getEmailP1(): ?string
    {
        return $this->emailP1;
    }

    public function setEmailP1(?string $emailP1): static
    {
        $this->emailP1 = $emailP1;

        return $this;
    }

    public function getDateMiseCirculation(): ?\DateTimeInterface
    {
        return $this->dateMiseCirculation;
    }

    public function setDateMiseCirculation(?\DateTimeInterface $dateMiseCirculation): static
    {
        $this->dateMiseCirculation = $dateMiseCirculation;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $dateAchat): static
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getDateDernierEvenement(): ?\DateTimeInterface
    {
        return $this->dateDernierEvenement;
    }

    public function setDateDernierEvenement(\DateTimeInterface $dateDernierEvenement): static
    {
        $this->dateDernierEvenement = $dateDernierEvenement;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(?string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(string $vin): static
    {
        $this->vin = $vin;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): static
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getTypeProspect(): ?string
    {
        return $this->typeProspect;
    }

    public function setTypeProspect(string $typeProspect): static
    {
        $this->typeProspect = $typeProspect;

        return $this;
    }

    public function getKilometrage(): ?string
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?string $kilometrage): static
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getEnergie(): ?string
    {
        return $this->energie;
    }

    public function setEnergie(?string $energie): static
    {
        $this->energie = $energie;

        return $this;
    }

    public function getVendeurVN(): ?string
    {
        return $this->vendeurVN;
    }

    public function setVendeurVN(?string $vendeurVN): static
    {
        $this->vendeurVN = $vendeurVN;

        return $this;
    }

    public function getVendeurVo(): ?string
    {
        return $this->vendeurVo;
    }

    public function setVendeurVo(?string $vendeurVo): static
    {
        $this->vendeurVo = $vendeurVo;

        return $this;
    }

    public function getCommentaireFacture(): ?string
    {
        return $this->commentaireFacture;
    }

    public function setCommentaireFacture(?string $commentaireFacture): static
    {
        $this->commentaireFacture = $commentaireFacture;

        return $this;
    }

    public function getTypeVNVO(): ?string
    {
        return $this->typeVNVO;
    }

    public function setTypeVNVO(?string $typeVNVO): static
    {
        $this->typeVNVO = $typeVNVO;

        return $this;
    }

    public function getNumeroDossierVNVO(): ?string
    {
        return $this->numeroDossierVNVO;
    }

    public function setNumeroDossierVNVO(?string $numeroDossierVNVO): static
    {
        $this->numeroDossierVNVO = $numeroDossierVNVO;

        return $this;
    }

    public function getIntermadiareVenteVN(): ?string
    {
        return $this->intermadiareVenteVN;
    }

    public function setIntermadiareVenteVN(?string $intermadiareVenteVN): static
    {
        $this->intermadiareVenteVN = $intermadiareVenteVN;

        return $this;
    }

    public function getDateEvenement(): ?\DateTimeInterface
    {
        return $this->dateEvenement;
    }

    public function setDateEvenement(\DateTimeInterface $dateEvenement): static
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }

    public function getOrigineEvenement(): ?string
    {
        return $this->origineEvenement;
    }

    public function setOrigineEvenement(string $origineEvenement): static
    {
        $this->origineEvenement = $origineEvenement;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240316063153 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE excel_data (id INT AUTO_INCREMENT NOT NULL, compte_affaire VARCHAR(128) NOT NULL, compte_evenement VARCHAR(128) NOT NULL, compte_dernier_evenement VARCHAR(128) NOT NULL, numero_fiche INT NOT NULL, civilite VARCHAR(128) DEFAULT NULL, proprietaire_vehicule VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) DEFAULT NULL, numero_et_nom_voie VARCHAR(255) NOT NULL, complement_adresse1 VARCHAR(255) DEFAULT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, telephone_domicile INT DEFAULT NULL, telephone_portable INT DEFAULT NULL, telephone_job INT DEFAULT NULL, email_p1 VARCHAR(255) DEFAULT NULL, date_mise_circulation DATE DEFAULT NULL, date_achat DATE DEFAULT NULL, date_dernier_evenement DATE NOT NULL, marque VARCHAR(255) NOT NULL, modele VARCHAR(255) DEFAULT NULL, version VARCHAR(255) DEFAULT NULL, vin VARCHAR(255) NOT NULL, immatriculation VARCHAR(255) DEFAULT NULL, type_prospect VARCHAR(255) NOT NULL, kilometrage VARCHAR(255) DEFAULT NULL, energie VARCHAR(255) DEFAULT NULL, vendeur_vn VARCHAR(255) DEFAULT NULL, vendeur_vo VARCHAR(255) DEFAULT NULL, commentaire_facture VARCHAR(255) DEFAULT NULL, type_vnvo VARCHAR(255) DEFAULT NULL, numero_dossier_vnvo VARCHAR(255) DEFAULT NULL, intermadiare_vente_vn VARCHAR(255) DEFAULT NULL, date_evenement DATE NOT NULL, origine_evenement VARCHAR(128) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE excel_data');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240508185211 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adresse_facture CHANGE rue_facture rue_facture VARCHAR(100) NOT NULL, CHANGE ville_facture ville_facture VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE adresse_livraison CHANGE rue_livraison rue_livraison VARCHAR(100) NOT NULL, CHANGE ville_livraison ville_livraison VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE auteur CHANGE prenom prenom VARCHAR(70) NOT NULL, CHANGE nom_auteur nom_auteur VARCHAR(70) NOT NULL');
        $this->addSql('ALTER TABLE collection CHANGE categorie_collection categorie_collection VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE commande CHANGE mode_paiement mode_paiement VARCHAR(20) NOT NULL, CHANGE statut_de_la_commande statut_de_la_commande VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE genre CHANGE categorie_genre categorie_genre VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE livre CHANGE titre titre VARCHAR(150) NOT NULL, CHANGE isbn isbn VARCHAR(13) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AC634F99CC1CF4E6 ON livre (isbn)');
        $this->addSql('ALTER TABLE theme CHANGE categorie_theme categorie_theme VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE prenom_user prenom_user VARCHAR(70) NOT NULL, CHANGE nom_user nom_user VARCHAR(70) NOT NULL, CHANGE email_user email_user VARCHAR(80) NOT NULL, CHANGE role_user role_user VARCHAR(15) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_AC634F99CC1CF4E6 ON livre');
        $this->addSql('ALTER TABLE livre CHANGE titre titre VARCHAR(255) NOT NULL, CHANGE isbn isbn INT NOT NULL');
        $this->addSql('ALTER TABLE adresse_facture CHANGE rue_facture rue_facture VARCHAR(255) NOT NULL, CHANGE ville_facture ville_facture VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE commande CHANGE mode_paiement mode_paiement VARCHAR(255) NOT NULL, CHANGE statut_de_la_commande statut_de_la_commande VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE theme CHANGE categorie_theme categorie_theme VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE adresse_livraison CHANGE rue_livraison rue_livraison VARCHAR(255) NOT NULL, CHANGE ville_livraison ville_livraison VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE auteur CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE nom_auteur nom_auteur VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE genre CHANGE categorie_genre categorie_genre VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE collection CHANGE categorie_collection categorie_collection VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE prenom_user prenom_user VARCHAR(255) NOT NULL, CHANGE nom_user nom_user VARCHAR(255) NOT NULL, CHANGE email_user email_user VARCHAR(255) NOT NULL, CHANGE role_user role_user VARCHAR(255) NOT NULL');
    }
}

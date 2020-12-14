<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201214134146 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie ADD libelle_categorie VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE listes ADD libelle_liste VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE mots ADD libelle_mots VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE theme ADD libelle_theme VARCHAR(30) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie DROP libelle_categorie');
        $this->addSql('ALTER TABLE listes DROP libelle_liste');
        $this->addSql('ALTER TABLE mots DROP libelle_mots');
        $this->addSql('ALTER TABLE theme DROP libelle_theme');
    }
}

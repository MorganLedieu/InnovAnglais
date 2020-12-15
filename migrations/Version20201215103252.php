<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201215103252 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mots ADD c_ategorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mots ADD CONSTRAINT FK_29DCE0AB6A4EAAD5 FOREIGN KEY (c_ategorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_29DCE0AB6A4EAAD5 ON mots (c_ategorie_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mots DROP FOREIGN KEY FK_29DCE0AB6A4EAAD5');
        $this->addSql('DROP INDEX IDX_29DCE0AB6A4EAAD5 ON mots');
        $this->addSql('ALTER TABLE mots DROP c_ategorie_id');
    }
}

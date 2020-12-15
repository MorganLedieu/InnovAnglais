<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201215093442 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE listes ADD m_ots_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listes ADD CONSTRAINT FK_A1220B24EE2B1B8D FOREIGN KEY (m_ots_id) REFERENCES mots (id)');
        $this->addSql('CREATE INDEX IDX_A1220B24EE2B1B8D ON listes (m_ots_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE listes DROP FOREIGN KEY FK_A1220B24EE2B1B8D');
        $this->addSql('DROP INDEX IDX_A1220B24EE2B1B8D ON listes');
        $this->addSql('ALTER TABLE listes DROP m_ots_id');
    }
}

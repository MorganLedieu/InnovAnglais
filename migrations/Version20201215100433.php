<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201215100433 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resultattest ADD t_est_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE resultattest ADD CONSTRAINT FK_9CCF21533B3F642 FOREIGN KEY (t_est_id) REFERENCES test (id)');
        $this->addSql('CREATE INDEX IDX_9CCF21533B3F642 ON resultattest (t_est_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resultattest DROP FOREIGN KEY FK_9CCF21533B3F642');
        $this->addSql('DROP INDEX IDX_9CCF21533B3F642 ON resultattest');
        $this->addSql('ALTER TABLE resultattest DROP t_est_id');
    }
}

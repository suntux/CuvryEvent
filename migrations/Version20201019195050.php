<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201019195050 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE membres_sections (id INT AUTO_INCREMENT NOT NULL, section_id INT NOT NULL, membres_id INT NOT NULL, type_membres_section_id INT NOT NULL, UNIQUE INDEX UNIQ_EF52E658D823E37A (section_id), UNIQUE INDEX UNIQ_EF52E65871128C5C (membres_id), UNIQUE INDEX UNIQ_EF52E658D204DC47 (type_membres_section_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE membres_sections ADD CONSTRAINT FK_EF52E658D823E37A FOREIGN KEY (section_id) REFERENCES sections (id)');
        $this->addSql('ALTER TABLE membres_sections ADD CONSTRAINT FK_EF52E65871128C5C FOREIGN KEY (membres_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE membres_sections ADD CONSTRAINT FK_EF52E658D204DC47 FOREIGN KEY (type_membres_section_id) REFERENCES type_membres_section (id)');
        $this->addSql('ALTER TABLE presences ADD seances_id INT NOT NULL, ADD membres_id INT NOT NULL');
        $this->addSql('ALTER TABLE presences ADD CONSTRAINT FK_BDDBEFAB10F09302 FOREIGN KEY (seances_id) REFERENCES seances (id)');
        $this->addSql('ALTER TABLE presences ADD CONSTRAINT FK_BDDBEFAB71128C5C FOREIGN KEY (membres_id) REFERENCES membres (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BDDBEFAB10F09302 ON presences (seances_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BDDBEFAB71128C5C ON presences (membres_id)');
        $this->addSql('ALTER TABLE rq_seances ADD seance_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rq_seances ADD CONSTRAINT FK_1BED4BA0E3797A94 FOREIGN KEY (seance_id) REFERENCES seances (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1BED4BA0E3797A94 ON rq_seances (seance_id)');
        $this->addSql('ALTER TABLE seances ADD sections_id INT NOT NULL');
        $this->addSql('ALTER TABLE seances ADD CONSTRAINT FK_FC699FF1577906E4 FOREIGN KEY (sections_id) REFERENCES sections (id)');
        $this->addSql('CREATE INDEX IDX_FC699FF1577906E4 ON seances (sections_id)');
        $this->addSql('ALTER TABLE sections ADD structures_id INT NOT NULL');
        $this->addSql('ALTER TABLE sections ADD CONSTRAINT FK_2B9643989D3ED38D FOREIGN KEY (structures_id) REFERENCES structures (id)');
        $this->addSql('CREATE INDEX IDX_2B9643989D3ED38D ON sections (structures_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE membres_sections');
        $this->addSql('ALTER TABLE presences DROP FOREIGN KEY FK_BDDBEFAB10F09302');
        $this->addSql('ALTER TABLE presences DROP FOREIGN KEY FK_BDDBEFAB71128C5C');
        $this->addSql('DROP INDEX UNIQ_BDDBEFAB10F09302 ON presences');
        $this->addSql('DROP INDEX UNIQ_BDDBEFAB71128C5C ON presences');
        $this->addSql('ALTER TABLE presences DROP seances_id, DROP membres_id');
        $this->addSql('ALTER TABLE rq_seances DROP FOREIGN KEY FK_1BED4BA0E3797A94');
        $this->addSql('DROP INDEX UNIQ_1BED4BA0E3797A94 ON rq_seances');
        $this->addSql('ALTER TABLE rq_seances DROP seance_id');
        $this->addSql('ALTER TABLE seances DROP FOREIGN KEY FK_FC699FF1577906E4');
        $this->addSql('DROP INDEX IDX_FC699FF1577906E4 ON seances');
        $this->addSql('ALTER TABLE seances DROP sections_id');
        $this->addSql('ALTER TABLE sections DROP FOREIGN KEY FK_2B9643989D3ED38D');
        $this->addSql('DROP INDEX IDX_2B9643989D3ED38D ON sections');
        $this->addSql('ALTER TABLE sections DROP structures_id');
    }
}

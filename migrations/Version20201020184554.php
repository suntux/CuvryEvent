<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201020184554 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membres DROP FOREIGN KEY FK_594AE39C8183C513');
        $this->addSql('ALTER TABLE membres DROP FOREIGN KEY FK_594AE39C93366AFD');
        $this->addSql('ALTER TABLE membres DROP FOREIGN KEY FK_594AE39C9B6B5FBA');
        $this->addSql('DROP INDEX UNIQ_594AE39C93366AFD ON membres');
        $this->addSql('DROP INDEX UNIQ_594AE39C9B6B5FBA ON membres');
        $this->addSql('DROP INDEX UNIQ_594AE39C8183C513 ON membres');
        $this->addSql('ALTER TABLE membres DROP account_id, DROP tuteur_1_id, DROP tuteur_2_id');
        $this->addSql('ALTER TABLE membres_sections DROP FOREIGN KEY FK_EF52E65871128C5C');
        $this->addSql('ALTER TABLE membres_sections DROP FOREIGN KEY FK_EF52E658D204DC47');
        $this->addSql('ALTER TABLE membres_sections DROP FOREIGN KEY FK_EF52E658D823E37A');
        $this->addSql('DROP INDEX UNIQ_EF52E65871128C5C ON membres_sections');
        $this->addSql('DROP INDEX UNIQ_EF52E658D823E37A ON membres_sections');
        $this->addSql('DROP INDEX UNIQ_EF52E658D204DC47 ON membres_sections');
        $this->addSql('ALTER TABLE membres_sections DROP section_id, DROP membres_id, DROP type_membres_section_id');
        $this->addSql('ALTER TABLE presences DROP FOREIGN KEY FK_BDDBEFAB10F09302');
        $this->addSql('ALTER TABLE presences DROP FOREIGN KEY FK_BDDBEFAB71128C5C');
        $this->addSql('DROP INDEX UNIQ_BDDBEFAB71128C5C ON presences');
        $this->addSql('DROP INDEX UNIQ_BDDBEFAB10F09302 ON presences');
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
        $this->addSql('ALTER TABLE structures_membres DROP FOREIGN KEY FK_18C2D11C6C115A79');
        $this->addSql('ALTER TABLE structures_membres DROP FOREIGN KEY FK_18C2D11C71128C5C');
        $this->addSql('ALTER TABLE structures_membres DROP FOREIGN KEY FK_18C2D11C9D3ED38D');
        $this->addSql('DROP INDEX UNIQ_18C2D11C9D3ED38D ON structures_membres');
        $this->addSql('DROP INDEX UNIQ_18C2D11C71128C5C ON structures_membres');
        $this->addSql('DROP INDEX UNIQ_18C2D11C6C115A79 ON structures_membres');
        $this->addSql('ALTER TABLE structures_membres DROP membres_id, DROP structures_id, DROP type_membres_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membres ADD account_id INT DEFAULT NULL, ADD tuteur_1_id INT DEFAULT NULL, ADD tuteur_2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39C8183C513 FOREIGN KEY (tuteur_2_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39C93366AFD FOREIGN KEY (tuteur_1_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39C9B6B5FBA FOREIGN KEY (account_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_594AE39C93366AFD ON membres (tuteur_1_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_594AE39C9B6B5FBA ON membres (account_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_594AE39C8183C513 ON membres (tuteur_2_id)');
        $this->addSql('ALTER TABLE membres_sections ADD section_id INT NOT NULL, ADD membres_id INT NOT NULL, ADD type_membres_section_id INT NOT NULL');
        $this->addSql('ALTER TABLE membres_sections ADD CONSTRAINT FK_EF52E65871128C5C FOREIGN KEY (membres_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE membres_sections ADD CONSTRAINT FK_EF52E658D204DC47 FOREIGN KEY (type_membres_section_id) REFERENCES type_membres_section (id)');
        $this->addSql('ALTER TABLE membres_sections ADD CONSTRAINT FK_EF52E658D823E37A FOREIGN KEY (section_id) REFERENCES sections (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EF52E65871128C5C ON membres_sections (membres_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EF52E658D823E37A ON membres_sections (section_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EF52E658D204DC47 ON membres_sections (type_membres_section_id)');
        $this->addSql('ALTER TABLE presences ADD seances_id INT NOT NULL, ADD membres_id INT NOT NULL');
        $this->addSql('ALTER TABLE presences ADD CONSTRAINT FK_BDDBEFAB10F09302 FOREIGN KEY (seances_id) REFERENCES seances (id)');
        $this->addSql('ALTER TABLE presences ADD CONSTRAINT FK_BDDBEFAB71128C5C FOREIGN KEY (membres_id) REFERENCES membres (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BDDBEFAB71128C5C ON presences (membres_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BDDBEFAB10F09302 ON presences (seances_id)');
        $this->addSql('ALTER TABLE rq_seances ADD seance_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rq_seances ADD CONSTRAINT FK_1BED4BA0E3797A94 FOREIGN KEY (seance_id) REFERENCES seances (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1BED4BA0E3797A94 ON rq_seances (seance_id)');
        $this->addSql('ALTER TABLE seances ADD sections_id INT NOT NULL');
        $this->addSql('ALTER TABLE seances ADD CONSTRAINT FK_FC699FF1577906E4 FOREIGN KEY (sections_id) REFERENCES sections (id)');
        $this->addSql('CREATE INDEX IDX_FC699FF1577906E4 ON seances (sections_id)');
        $this->addSql('ALTER TABLE sections ADD structures_id INT NOT NULL');
        $this->addSql('ALTER TABLE sections ADD CONSTRAINT FK_2B9643989D3ED38D FOREIGN KEY (structures_id) REFERENCES structures (id)');
        $this->addSql('CREATE INDEX IDX_2B9643989D3ED38D ON sections (structures_id)');
        $this->addSql('ALTER TABLE structures_membres ADD membres_id INT NOT NULL, ADD structures_id INT NOT NULL, ADD type_membres_id INT NOT NULL');
        $this->addSql('ALTER TABLE structures_membres ADD CONSTRAINT FK_18C2D11C6C115A79 FOREIGN KEY (type_membres_id) REFERENCES type_membres (id)');
        $this->addSql('ALTER TABLE structures_membres ADD CONSTRAINT FK_18C2D11C71128C5C FOREIGN KEY (membres_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE structures_membres ADD CONSTRAINT FK_18C2D11C9D3ED38D FOREIGN KEY (structures_id) REFERENCES structures (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_18C2D11C9D3ED38D ON structures_membres (structures_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_18C2D11C71128C5C ON structures_membres (membres_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_18C2D11C6C115A79 ON structures_membres (type_membres_id)');
    }
}

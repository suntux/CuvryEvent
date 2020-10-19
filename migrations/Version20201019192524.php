<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201019192524 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membres ADD account_id INT DEFAULT NULL, ADD tuteur_1_id INT DEFAULT NULL, ADD tuteur_2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39C9B6B5FBA FOREIGN KEY (account_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39C93366AFD FOREIGN KEY (tuteur_1_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39C8183C513 FOREIGN KEY (tuteur_2_id) REFERENCES membres (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_594AE39C9B6B5FBA ON membres (account_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_594AE39C93366AFD ON membres (tuteur_1_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_594AE39C8183C513 ON membres (tuteur_2_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membres DROP FOREIGN KEY FK_594AE39C9B6B5FBA');
        $this->addSql('ALTER TABLE membres DROP FOREIGN KEY FK_594AE39C93366AFD');
        $this->addSql('ALTER TABLE membres DROP FOREIGN KEY FK_594AE39C8183C513');
        $this->addSql('DROP INDEX UNIQ_594AE39C9B6B5FBA ON membres');
        $this->addSql('DROP INDEX UNIQ_594AE39C93366AFD ON membres');
        $this->addSql('DROP INDEX UNIQ_594AE39C8183C513 ON membres');
        $this->addSql('ALTER TABLE membres DROP account_id, DROP tuteur_1_id, DROP tuteur_2_id');
    }
}

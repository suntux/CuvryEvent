<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201019193731 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE structures_membres (id INT AUTO_INCREMENT NOT NULL, membres_id INT NOT NULL, structures_id INT NOT NULL, type_membres_id INT NOT NULL, UNIQUE INDEX UNIQ_18C2D11C71128C5C (membres_id), UNIQUE INDEX UNIQ_18C2D11C9D3ED38D (structures_id), UNIQUE INDEX UNIQ_18C2D11C6C115A79 (type_membres_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE structures_membres ADD CONSTRAINT FK_18C2D11C71128C5C FOREIGN KEY (membres_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE structures_membres ADD CONSTRAINT FK_18C2D11C9D3ED38D FOREIGN KEY (structures_id) REFERENCES structures (id)');
        $this->addSql('ALTER TABLE structures_membres ADD CONSTRAINT FK_18C2D11C6C115A79 FOREIGN KEY (type_membres_id) REFERENCES type_membres (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE structures_membres');
    }
}

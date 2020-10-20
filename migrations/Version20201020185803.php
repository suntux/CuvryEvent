<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201020185803 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures_membres ADD membres_id INT NOT NULL, ADD structures_id INT NOT NULL, ADD type_id INT NOT NULL');
        $this->addSql('ALTER TABLE structures_membres ADD CONSTRAINT FK_18C2D11C71128C5C FOREIGN KEY (membres_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE structures_membres ADD CONSTRAINT FK_18C2D11C9D3ED38D FOREIGN KEY (structures_id) REFERENCES structures (id)');
        $this->addSql('ALTER TABLE structures_membres ADD CONSTRAINT FK_18C2D11CC54C8C93 FOREIGN KEY (type_id) REFERENCES type_membres (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_18C2D11C71128C5C ON structures_membres (membres_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_18C2D11C9D3ED38D ON structures_membres (structures_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_18C2D11CC54C8C93 ON structures_membres (type_id)');
        $this->addSql('ALTER TABLE user ADD profil_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649275ED078 FOREIGN KEY (profil_id) REFERENCES membres (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649275ED078 ON user (profil_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures_membres DROP FOREIGN KEY FK_18C2D11C71128C5C');
        $this->addSql('ALTER TABLE structures_membres DROP FOREIGN KEY FK_18C2D11C9D3ED38D');
        $this->addSql('ALTER TABLE structures_membres DROP FOREIGN KEY FK_18C2D11CC54C8C93');
        $this->addSql('DROP INDEX UNIQ_18C2D11C71128C5C ON structures_membres');
        $this->addSql('DROP INDEX UNIQ_18C2D11C9D3ED38D ON structures_membres');
        $this->addSql('DROP INDEX UNIQ_18C2D11CC54C8C93 ON structures_membres');
        $this->addSql('ALTER TABLE structures_membres DROP membres_id, DROP structures_id, DROP type_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649275ED078');
        $this->addSql('DROP INDEX UNIQ_8D93D649275ED078 ON user');
        $this->addSql('ALTER TABLE user DROP profil_id');
    }
}

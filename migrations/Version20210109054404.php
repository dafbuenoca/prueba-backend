<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210109054404 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD26122B23');
        $this->addSql('DROP INDEX IDX_D34A04AD26122B23 ON product');
        $this->addSql('ALTER TABLE product ADD provider_id INT DEFAULT NULL, DROP provider_id_id');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADA53A8AA FOREIGN KEY (provider_id) REFERENCES provider (id)');
        $this->addSql('CREATE INDEX IDX_D34A04ADA53A8AA ON product (provider_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADA53A8AA');
        $this->addSql('DROP INDEX IDX_D34A04ADA53A8AA ON product');
        $this->addSql('ALTER TABLE product ADD provider_id_id INT NOT NULL, DROP provider_id');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD26122B23 FOREIGN KEY (provider_id_id) REFERENCES provider (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_D34A04AD26122B23 ON product (provider_id_id)');
    }
}

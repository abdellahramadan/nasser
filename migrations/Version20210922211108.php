<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210922211108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        //$this->addSql('ALTER TABLE transaction DROP INDEX IDX_723705D1A76ED395, ADD UNIQUE INDEX UNIQ_723705D1A76ED395 (user_id)');
        //$this->addSql('ALTER TABLE transaction CHANGE user_id user_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transaction DROP INDEX UNIQ_723705D1A76ED395, ADD INDEX IDX_723705D1A76ED395 (user_id)');
        $this->addSql('ALTER TABLE transaction CHANGE user_id user_id INT NOT NULL');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221214143202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE consulation (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE travel_form (id INT AUTO_INCREMENT NOT NULL, feeling_well TINYINT(1) NOT NULL, past_medical_history VARCHAR(300) NOT NULL, current_medicines VARCHAR(300) NOT NULL, allergies VARCHAR(200) NOT NULL, hypersensitive VARCHAR(100) NOT NULL, epilepsy VARCHAR(200) NOT NULL, black_water VARCHAR(255) NOT NULL, liver_function VARCHAR(200) NOT NULL, therapy VARCHAR(200) NOT NULL, history VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vaccines (id INT AUTO_INCREMENT NOT NULL, batch_number VARCHAR(100) NOT NULL, expirery DATE NOT NULL, type VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE consulation');
        $this->addSql('DROP TABLE travel_form');
        $this->addSql('DROP TABLE vaccines');
    }
}

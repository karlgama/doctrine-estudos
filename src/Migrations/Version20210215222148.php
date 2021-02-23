<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210215222148 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE alunos (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nome VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE telefones (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, aluno_id INTEGER DEFAULT NULL, numero VARCHAR(20) NOT NULL)');
        $this->addSql('CREATE INDEX IDX_219AAC26B2DDF7F4 ON telefones (aluno_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE alunos');
        $this->addSql('DROP TABLE telefones');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220720135533 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add Admin paul into user';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO user (email, roles, password) VALUES ('strentz.paul@gmail.com', '[\"ROLE_ADMIN\"]', '\$2y\$13\$4ADu.DOOZsQAsMIdLTbMlu07y2Ck8hPOQa4CXMozBh3pxsqkJ4DIG')");

    }

    public function down(Schema $schema): void
    {
        $this->addSql("DELETE FROM user WHERE email = 'strentz.paul@gmail.com'");
    }
}

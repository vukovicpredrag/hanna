<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240913112710 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE below_intro (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, text LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE about CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE shor_description shor_description VARCHAR(255) DEFAULT NULL, CHANGE long_description long_description VARCHAR(2000) DEFAULT NULL');
        $this->addSql('ALTER TABLE article CHANGE picture picture VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE category_link CHANGE link_to link_to VARCHAR(255) DEFAULT NULL, CHANGE category_title category_title VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE category_section CHANGE main_categories_section_heading main_categories_section_heading VARCHAR(500) DEFAULT NULL, CHANGE main_categories_section_subheading main_categories_section_subheading VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE contact CHANGE info_text info_text VARCHAR(2000) DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE address address VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hero_section CHANGE main_title_pre_text main_title_pre_text VARCHAR(255) DEFAULT NULL, CHANGE main_title main_title VARCHAR(255) DEFAULT NULL, CHANGE cta1_link cta1_link VARCHAR(255) DEFAULT NULL, CHANGE cta1_title cta1_title VARCHAR(255) DEFAULT NULL, CHANGE cta2_link cta2_link VARCHAR(500) DEFAULT NULL, CHANGE cta2_link_text cta2_link_text VARCHAR(255) DEFAULT NULL, CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE background_image background_image VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE intro_section CHANGE h2_text h2_text VARCHAR(500) DEFAULT NULL, CHANGE sub_h2_text sub_h2_text VARCHAR(1000) DEFAULT NULL, CHANGE image1_src image1_src VARCHAR(500) DEFAULT NULL, CHANGE image2_src image2_src VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE media_object CHANGE file_path file_path VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE meet_hanna CHANGE meet_hanna_section_title meet_hanna_section_title VARCHAR(500) DEFAULT NULL, CHANGE meet_hanna_section_subtitle meet_hanna_section_subtitle VARCHAR(500) DEFAULT NULL, CHANGE meet_hanna_image1 meet_hanna_image1 VARCHAR(500) DEFAULT NULL, CHANGE meet_hanna_image2 meet_hanna_image2 VARCHAR(500) DEFAULT NULL, CHANGE meet_hanna_cta_title meet_hanna_cta_title VARCHAR(255) DEFAULT NULL, CHANGE meet_hanna_cta_link meet_hanna_cta_link VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE product CHANGE main_image main_image VARCHAR(500) DEFAULT NULL, CHANGE keywords keywords JSON DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL, CHANGE ribbon_indicator ribbon_indicator VARCHAR(255) DEFAULT NULL, CHANGE ribbon_indicator_text ribbon_indicator_text VARCHAR(255) DEFAULT NULL, CHANGE main_price main_price VARCHAR(255) DEFAULT NULL, CHANGE discouted_price discouted_price VARCHAR(255) DEFAULT NULL, CHANGE singe_product_terms_box1_icon singe_product_terms_box1_icon VARCHAR(500) DEFAULT NULL, CHANGE singe_product_terms_box1_text2 singe_product_terms_box1_text2 VARCHAR(500) DEFAULT NULL, CHANGE singe_product_terms_box2_icon singe_product_terms_box2_icon VARCHAR(500) DEFAULT NULL, CHANGE short_description short_description VARCHAR(1000) DEFAULT NULL, CHANGE singe_product_terms_box3_text2 singe_product_terms_box3_text2 VARCHAR(250) DEFAULT NULL, CHANGE single_product_availability_text single_product_availability_text VARCHAR(250) DEFAULT NULL, CHANGE image1 image1 VARCHAR(250) DEFAULT NULL, CHANGE image2 image2 VARCHAR(250) DEFAULT NULL, CHANGE image3 image3 VARCHAR(250) DEFAULT NULL, CHANGE image4 image4 VARCHAR(250) DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE sale_section CHANGE sale_section_title sale_section_title VARCHAR(255) DEFAULT NULL, CHANGE sale_section_paragraph sale_section_paragraph VARCHAR(1000) DEFAULT NULL, CHANGE sale_section_link sale_section_link VARCHAR(500) DEFAULT NULL, CHANGE sale_section_link_title sale_section_link_title VARCHAR(500) DEFAULT NULL, CHANGE image1 image1 VARCHAR(500) DEFAULT NULL, CHANGE image2 image2 VARCHAR(500) DEFAULT NULL, CHANGE image3 image3 VARCHAR(500) DEFAULT NULL, CHANGE image4 image4 VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE tabs_section_tabs_data CHANGE label label VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(500) DEFAULT NULL, CHANGE slide_image slide_image VARCHAR(500) DEFAULT NULL, CHANGE link_to link_to VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE tabs_section_text CHANGE tab_section_title tab_section_title VARCHAR(255) DEFAULT NULL, CHANGE tab_section_subtitle tab_section_subtitle VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE below_intro');
        $this->addSql('ALTER TABLE about CHANGE name name VARCHAR(255) DEFAULT \'NULL\', CHANGE shor_description shor_description VARCHAR(255) DEFAULT \'NULL\', CHANGE long_description long_description VARCHAR(2000) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE article CHANGE picture picture VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE category_link CHANGE link_to link_to VARCHAR(255) DEFAULT \'NULL\', CHANGE category_title category_title VARCHAR(255) DEFAULT \'NULL\', CHANGE image image VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE category_section CHANGE main_categories_section_heading main_categories_section_heading VARCHAR(500) DEFAULT \'NULL\', CHANGE main_categories_section_subheading main_categories_section_subheading VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE contact CHANGE info_text info_text VARCHAR(2000) DEFAULT \'NULL\', CHANGE phone phone VARCHAR(255) DEFAULT \'NULL\', CHANGE email email VARCHAR(255) DEFAULT \'NULL\', CHANGE address address VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE hero_section CHANGE main_title_pre_text main_title_pre_text VARCHAR(255) DEFAULT \'NULL\', CHANGE main_title main_title VARCHAR(255) DEFAULT \'NULL\', CHANGE cta1_link cta1_link VARCHAR(255) DEFAULT \'NULL\', CHANGE cta1_title cta1_title VARCHAR(255) DEFAULT \'NULL\', CHANGE cta2_link cta2_link VARCHAR(500) DEFAULT \'NULL\', CHANGE cta2_link_text cta2_link_text VARCHAR(255) DEFAULT \'NULL\', CHANGE type type VARCHAR(255) DEFAULT \'NULL\', CHANGE background_image background_image VARCHAR(1000) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE intro_section CHANGE h2_text h2_text VARCHAR(500) DEFAULT \'NULL\', CHANGE sub_h2_text sub_h2_text VARCHAR(1000) DEFAULT \'NULL\', CHANGE image1_src image1_src VARCHAR(500) DEFAULT \'NULL\', CHANGE image2_src image2_src VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE media_object CHANGE file_path file_path VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE meet_hanna CHANGE meet_hanna_section_title meet_hanna_section_title VARCHAR(500) DEFAULT \'NULL\', CHANGE meet_hanna_section_subtitle meet_hanna_section_subtitle VARCHAR(500) DEFAULT \'NULL\', CHANGE meet_hanna_image1 meet_hanna_image1 VARCHAR(500) DEFAULT \'NULL\', CHANGE meet_hanna_image2 meet_hanna_image2 VARCHAR(500) DEFAULT \'NULL\', CHANGE meet_hanna_cta_title meet_hanna_cta_title VARCHAR(255) DEFAULT \'NULL\', CHANGE meet_hanna_cta_link meet_hanna_cta_link VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE product CHANGE main_image main_image VARCHAR(500) DEFAULT \'NULL\', CHANGE keywords keywords LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`, CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\', CHANGE ribbon_indicator ribbon_indicator VARCHAR(255) DEFAULT \'NULL\', CHANGE ribbon_indicator_text ribbon_indicator_text VARCHAR(255) DEFAULT \'NULL\', CHANGE main_price main_price VARCHAR(255) DEFAULT \'NULL\', CHANGE discouted_price discouted_price VARCHAR(255) DEFAULT \'NULL\', CHANGE singe_product_terms_box1_icon singe_product_terms_box1_icon VARCHAR(500) DEFAULT \'NULL\', CHANGE singe_product_terms_box1_text2 singe_product_terms_box1_text2 VARCHAR(500) DEFAULT \'NULL\', CHANGE singe_product_terms_box2_icon singe_product_terms_box2_icon VARCHAR(500) DEFAULT \'NULL\', CHANGE short_description short_description VARCHAR(1000) DEFAULT \'NULL\', CHANGE singe_product_terms_box3_text2 singe_product_terms_box3_text2 VARCHAR(250) DEFAULT \'NULL\', CHANGE single_product_availability_text single_product_availability_text VARCHAR(250) DEFAULT \'NULL\', CHANGE image1 image1 VARCHAR(250) DEFAULT \'NULL\', CHANGE image2 image2 VARCHAR(250) DEFAULT \'NULL\', CHANGE image3 image3 VARCHAR(250) DEFAULT \'NULL\', CHANGE image4 image4 VARCHAR(250) DEFAULT \'NULL\', CHANGE title title VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE sale_section CHANGE sale_section_title sale_section_title VARCHAR(255) DEFAULT \'NULL\', CHANGE sale_section_paragraph sale_section_paragraph VARCHAR(1000) DEFAULT \'NULL\', CHANGE sale_section_link sale_section_link VARCHAR(500) DEFAULT \'NULL\', CHANGE sale_section_link_title sale_section_link_title VARCHAR(500) DEFAULT \'NULL\', CHANGE image1 image1 VARCHAR(500) DEFAULT \'NULL\', CHANGE image2 image2 VARCHAR(500) DEFAULT \'NULL\', CHANGE image3 image3 VARCHAR(500) DEFAULT \'NULL\', CHANGE image4 image4 VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE tabs_section_tabs_data CHANGE label label VARCHAR(255) DEFAULT \'NULL\', CHANGE image image VARCHAR(500) DEFAULT \'NULL\', CHANGE slide_image slide_image VARCHAR(500) DEFAULT \'NULL\', CHANGE link_to link_to VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE tabs_section_text CHANGE tab_section_title tab_section_title VARCHAR(255) DEFAULT \'NULL\', CHANGE tab_section_subtitle tab_section_subtitle VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241024095244 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE below_intro CHANGE label label VARCHAR(255) DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE blog CHANGE pre_h1_text pre_h1_text VARCHAR(1000) DEFAULT NULL, CHANGE blog_title blog_title VARCHAR(255) DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL, CHANGE category category VARCHAR(255) DEFAULT NULL, CHANGE featured_image featured_image VARCHAR(500) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE meta_description meta_description VARCHAR(255) DEFAULT NULL, CHANGE keywords keywords JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE blog_overview CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE subititle subititle VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE blog_sections CHANGE section_title section_title VARCHAR(255) DEFAULT NULL, CHANGE first_paragraph first_paragraph VARCHAR(1000) DEFAULT NULL, CHANGE blog_section_img blog_section_img VARCHAR(500) DEFAULT NULL, CHANGE blog_section_img_description blog_section_img_description VARCHAR(1000) DEFAULT NULL, CHANGE cta_section_title cta_section_title VARCHAR(500) DEFAULT NULL, CHANGE cta_btn_link cta_btn_link VARCHAR(255) DEFAULT NULL, CHANGE cta_btn_title cta_btn_title VARCHAR(255) DEFAULT NULL, CHANGE quote_section_text quote_section_text VARCHAR(5000) DEFAULT NULL');
        $this->addSql('ALTER TABLE category_link CHANGE link_to link_to VARCHAR(255) DEFAULT NULL, CHANGE category_title category_title VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE category_section CHANGE main_categories_section_heading main_categories_section_heading VARCHAR(500) DEFAULT NULL, CHANGE main_categories_section_subheading main_categories_section_subheading VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE contact CHANGE phone phone VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE main_title main_title VARCHAR(255) DEFAULT NULL, CHANGE location location VARCHAR(255) DEFAULT NULL, CHANGE map_link map_link VARCHAR(500) DEFAULT NULL, CHANGE map_section_pre_text map_section_pre_text VARCHAR(255) DEFAULT NULL, CHANGE map_section_title map_section_title VARCHAR(255) DEFAULT NULL, CHANGE how_can_we_help how_can_we_help VARCHAR(1000) DEFAULT NULL, CHANGE directions_to_us directions_to_us VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE contact_us CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE subject subject VARCHAR(255) DEFAULT NULL, CHANGE message message VARCHAR(2000) DEFAULT NULL');
        $this->addSql('ALTER TABLE footer CHANGE footer_heading footer_heading VARCHAR(500) DEFAULT NULL, CHANGE cta1_link cta1_link VARCHAR(255) DEFAULT NULL, CHANGE footer_box1_icon footer_box1_icon VARCHAR(255) DEFAULT NULL, CHANGE footer_box1_text1 footer_box1_text1 VARCHAR(500) DEFAULT NULL, CHANGE footer_box1_text2 footer_box1_text2 VARCHAR(500) DEFAULT NULL, CHANGE footer_box2_icon footer_box2_icon VARCHAR(500) DEFAULT NULL, CHANGE footer_box2_text1 footer_box2_text1 VARCHAR(500) DEFAULT NULL, CHANGE footer_box2_text2 footer_box2_text2 VARCHAR(500) DEFAULT NULL, CHANGE footer_box3_icon footer_box3_icon VARCHAR(500) DEFAULT NULL, CHANGE footer_box3_text1 footer_box3_text1 VARCHAR(500) DEFAULT NULL, CHANGE footer_box3_text2 footer_box3_text2 VARCHAR(500) DEFAULT NULL, CHANGE footer_box4_icon footer_box4_icon VARCHAR(500) DEFAULT NULL, CHANGE footer_box4_text1 footer_box4_text1 VARCHAR(500) DEFAULT NULL, CHANGE footer_box4_text2 footer_box4_text2 VARCHAR(500) DEFAULT NULL, CHANGE facebook_link facebook_link VARCHAR(255) DEFAULT NULL, CHANGE instagram_link instagram_link VARCHAR(255) DEFAULT NULL, CHANGE linkedin_link linkedin_link VARCHAR(255) DEFAULT NULL, CHANGE youtube_link youtube_link VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hero_section CHANGE main_title_pre_text main_title_pre_text VARCHAR(255) DEFAULT NULL, CHANGE main_title main_title VARCHAR(255) DEFAULT NULL, CHANGE cta1_link cta1_link VARCHAR(255) DEFAULT NULL, CHANGE cta1_title cta1_title VARCHAR(255) DEFAULT NULL, CHANGE cta2_link cta2_link VARCHAR(500) DEFAULT NULL, CHANGE cta2_link_text cta2_link_text VARCHAR(255) DEFAULT NULL, CHANGE background_image background_image VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE hero_section_about_us CHANGE main_title_pre_text main_title_pre_text VARCHAR(255) DEFAULT NULL, CHANGE main_title main_title VARCHAR(255) DEFAULT NULL, CHANGE cta1_link cta1_link VARCHAR(255) DEFAULT NULL, CHANGE cta1_title cta1_title VARCHAR(255) DEFAULT NULL, CHANGE cta2_link cta2_link VARCHAR(500) DEFAULT NULL, CHANGE cta2_link_text cta2_link_text VARCHAR(255) DEFAULT NULL, CHANGE background_image background_image VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE hero_section_home CHANGE main_title_pre_text main_title_pre_text VARCHAR(255) DEFAULT NULL, CHANGE main_title main_title VARCHAR(255) DEFAULT NULL, CHANGE cta1_link cta1_link VARCHAR(255) DEFAULT NULL, CHANGE cta1_title cta1_title VARCHAR(255) DEFAULT NULL, CHANGE cta2_link cta2_link VARCHAR(500) DEFAULT NULL, CHANGE cta2_link_text cta2_link_text VARCHAR(255) DEFAULT NULL, CHANGE background_image background_image VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE home_page_slider CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE subtitle subtitle VARCHAR(255) DEFAULT NULL, CHANGE cta_title cta_title VARCHAR(255) DEFAULT NULL, CHANGE cta_link cta_link VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE insurance_box CHANGE icon icon VARCHAR(255) DEFAULT NULL, CHANGE text1 text1 VARCHAR(255) DEFAULT NULL, CHANGE text2 text2 VARCHAR(1000) DEFAULT NULL, CHANGE icon2 icon2 VARCHAR(255) DEFAULT NULL, CHANGE text3 text3 VARCHAR(1000) DEFAULT NULL, CHANGE icon3 icon3 VARCHAR(500) DEFAULT NULL, CHANGE cta_title cta_title VARCHAR(500) DEFAULT NULL, CHANGE cta_link cta_link VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE intro_section CHANGE h2_text h2_text VARCHAR(500) DEFAULT NULL, CHANGE sub_h2_text sub_h2_text VARCHAR(1000) DEFAULT NULL, CHANGE image1_src image1_src VARCHAR(500) DEFAULT NULL, CHANGE image2_src image2_src VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE media_object CHANGE file_path file_path VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE meet_hanna CHANGE meet_hanna_section_title meet_hanna_section_title VARCHAR(500) DEFAULT NULL, CHANGE meet_hanna_section_subtitle meet_hanna_section_subtitle VARCHAR(500) DEFAULT NULL, CHANGE meet_hanna_image1 meet_hanna_image1 VARCHAR(500) DEFAULT NULL, CHANGE meet_hanna_image2 meet_hanna_image2 VARCHAR(500) DEFAULT NULL, CHANGE meet_hanna_cta_title meet_hanna_cta_title VARCHAR(255) DEFAULT NULL, CHANGE meet_hanna_cta_link meet_hanna_cta_link VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE newsletter CHANGE email email VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE our_goals_data CHANGE our_goals_title our_goals_title VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE product CHANGE main_image main_image VARCHAR(500) DEFAULT NULL, CHANGE keywords keywords JSON DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL, CHANGE ribbon_indicator ribbon_indicator VARCHAR(255) DEFAULT NULL, CHANGE ribbon_indicator_text ribbon_indicator_text VARCHAR(255) DEFAULT NULL, CHANGE main_price main_price VARCHAR(255) DEFAULT NULL, CHANGE singe_product_terms_box1_icon singe_product_terms_box1_icon VARCHAR(500) DEFAULT NULL, CHANGE singe_product_terms_box1_text2 singe_product_terms_box1_text2 VARCHAR(500) DEFAULT NULL, CHANGE singe_product_terms_box2_icon singe_product_terms_box2_icon VARCHAR(500) DEFAULT NULL, CHANGE short_description short_description VARCHAR(1000) DEFAULT NULL, CHANGE singe_product_terms_box3_text2 singe_product_terms_box3_text2 VARCHAR(250) DEFAULT NULL, CHANGE single_product_availability_text single_product_availability_text VARCHAR(250) DEFAULT NULL, CHANGE image1 image1 VARCHAR(250) DEFAULT NULL, CHANGE image2 image2 VARCHAR(250) DEFAULT NULL, CHANGE image3 image3 VARCHAR(250) DEFAULT NULL, CHANGE image4 image4 VARCHAR(250) DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE category category JSON DEFAULT NULL, CHANGE image5 image5 VARCHAR(255) DEFAULT NULL, CHANGE image6 image6 VARCHAR(255) DEFAULT NULL, CHANGE image7 image7 VARCHAR(255) DEFAULT NULL, CHANGE image8 image8 VARCHAR(255) DEFAULT NULL, CHANGE image9 image9 VARCHAR(255) DEFAULT NULL, CHANGE image10 image10 VARCHAR(255) DEFAULT NULL, CHANGE meta_description meta_description VARCHAR(255) DEFAULT NULL, CHANGE learn_more_text learn_more_text VARCHAR(1000) DEFAULT NULL, CHANGE learn_more_link learn_more_link VARCHAR(500) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE discounted_price discounted_price VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE promotions CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE sale_section CHANGE sale_section_title sale_section_title VARCHAR(255) DEFAULT NULL, CHANGE sale_section_paragraph sale_section_paragraph VARCHAR(1000) DEFAULT NULL, CHANGE sale_section_link sale_section_link VARCHAR(500) DEFAULT NULL, CHANGE sale_section_link_title sale_section_link_title VARCHAR(500) DEFAULT NULL, CHANGE image1 image1 VARCHAR(500) DEFAULT NULL, CHANGE image2 image2 VARCHAR(500) DEFAULT NULL, CHANGE image3 image3 VARCHAR(500) DEFAULT NULL, CHANGE image4 image4 VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE seo CHANGE page page VARCHAR(255) DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(1000) DEFAULT NULL, CHANGE keywords keywords JSON DEFAULT NULL, CHANGE meta_description meta_description VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE tabs_section_tabs_data CHANGE label label VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(500) DEFAULT NULL, CHANGE slide_image slide_image VARCHAR(500) DEFAULT NULL, CHANGE link_to link_to VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE tabs_section_text CHANGE tab_section_title tab_section_title VARCHAR(255) DEFAULT NULL, CHANGE tab_section_subtitle tab_section_subtitle VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE below_intro CHANGE label label VARCHAR(255) DEFAULT \'NULL\', CHANGE title title VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE blog CHANGE pre_h1_text pre_h1_text VARCHAR(1000) DEFAULT \'NULL\', CHANGE blog_title blog_title VARCHAR(255) DEFAULT \'NULL\', CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\', CHANGE category category VARCHAR(255) DEFAULT \'NULL\', CHANGE featured_image featured_image VARCHAR(500) DEFAULT \'NULL\', CHANGE meta_description meta_description VARCHAR(255) DEFAULT \'NULL\', CHANGE keywords keywords LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE blog_overview CHANGE title title VARCHAR(255) DEFAULT \'NULL\', CHANGE subititle subititle VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE blog_sections CHANGE section_title section_title VARCHAR(255) DEFAULT \'NULL\', CHANGE first_paragraph first_paragraph VARCHAR(1000) DEFAULT \'NULL\', CHANGE blog_section_img blog_section_img VARCHAR(500) DEFAULT \'NULL\', CHANGE blog_section_img_description blog_section_img_description VARCHAR(1000) DEFAULT \'NULL\', CHANGE cta_section_title cta_section_title VARCHAR(500) DEFAULT \'NULL\', CHANGE cta_btn_link cta_btn_link VARCHAR(255) DEFAULT \'NULL\', CHANGE cta_btn_title cta_btn_title VARCHAR(255) DEFAULT \'NULL\', CHANGE quote_section_text quote_section_text VARCHAR(5000) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE category_link CHANGE link_to link_to VARCHAR(255) DEFAULT \'NULL\', CHANGE category_title category_title VARCHAR(255) DEFAULT \'NULL\', CHANGE image image VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE category_section CHANGE main_categories_section_heading main_categories_section_heading VARCHAR(500) DEFAULT \'NULL\', CHANGE main_categories_section_subheading main_categories_section_subheading VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE contact CHANGE main_title main_title VARCHAR(255) DEFAULT \'NULL\', CHANGE phone phone VARCHAR(255) DEFAULT \'NULL\', CHANGE email email VARCHAR(255) DEFAULT \'NULL\', CHANGE location location VARCHAR(255) DEFAULT \'NULL\', CHANGE map_link map_link VARCHAR(500) DEFAULT \'NULL\', CHANGE map_section_pre_text map_section_pre_text VARCHAR(255) DEFAULT \'NULL\', CHANGE map_section_title map_section_title VARCHAR(255) DEFAULT \'NULL\', CHANGE how_can_we_help how_can_we_help VARCHAR(1000) DEFAULT \'NULL\', CHANGE directions_to_us directions_to_us VARCHAR(1000) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE contact_us CHANGE name name VARCHAR(255) DEFAULT \'NULL\', CHANGE email email VARCHAR(255) DEFAULT \'NULL\', CHANGE subject subject VARCHAR(255) DEFAULT \'NULL\', CHANGE message message VARCHAR(2000) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE footer CHANGE footer_heading footer_heading VARCHAR(500) DEFAULT \'NULL\', CHANGE cta1_link cta1_link VARCHAR(255) DEFAULT \'NULL\', CHANGE footer_box1_icon footer_box1_icon VARCHAR(255) DEFAULT \'NULL\', CHANGE footer_box1_text1 footer_box1_text1 VARCHAR(500) DEFAULT \'NULL\', CHANGE footer_box1_text2 footer_box1_text2 VARCHAR(500) DEFAULT \'NULL\', CHANGE footer_box2_icon footer_box2_icon VARCHAR(500) DEFAULT \'NULL\', CHANGE footer_box2_text1 footer_box2_text1 VARCHAR(500) DEFAULT \'NULL\', CHANGE footer_box2_text2 footer_box2_text2 VARCHAR(500) DEFAULT \'NULL\', CHANGE footer_box3_icon footer_box3_icon VARCHAR(500) DEFAULT \'NULL\', CHANGE footer_box3_text1 footer_box3_text1 VARCHAR(500) DEFAULT \'NULL\', CHANGE footer_box3_text2 footer_box3_text2 VARCHAR(500) DEFAULT \'NULL\', CHANGE footer_box4_icon footer_box4_icon VARCHAR(500) DEFAULT \'NULL\', CHANGE footer_box4_text1 footer_box4_text1 VARCHAR(500) DEFAULT \'NULL\', CHANGE footer_box4_text2 footer_box4_text2 VARCHAR(500) DEFAULT \'NULL\', CHANGE facebook_link facebook_link VARCHAR(255) DEFAULT \'NULL\', CHANGE instagram_link instagram_link VARCHAR(255) DEFAULT \'NULL\', CHANGE linkedin_link linkedin_link VARCHAR(255) DEFAULT \'NULL\', CHANGE youtube_link youtube_link VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE hero_section CHANGE main_title_pre_text main_title_pre_text VARCHAR(255) DEFAULT \'NULL\', CHANGE main_title main_title VARCHAR(255) DEFAULT \'NULL\', CHANGE cta1_link cta1_link VARCHAR(255) DEFAULT \'NULL\', CHANGE cta1_title cta1_title VARCHAR(255) DEFAULT \'NULL\', CHANGE cta2_link cta2_link VARCHAR(500) DEFAULT \'NULL\', CHANGE cta2_link_text cta2_link_text VARCHAR(255) DEFAULT \'NULL\', CHANGE background_image background_image VARCHAR(1000) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE hero_section_about_us CHANGE main_title_pre_text main_title_pre_text VARCHAR(255) DEFAULT \'NULL\', CHANGE main_title main_title VARCHAR(255) DEFAULT \'NULL\', CHANGE cta1_link cta1_link VARCHAR(255) DEFAULT \'NULL\', CHANGE cta1_title cta1_title VARCHAR(255) DEFAULT \'NULL\', CHANGE cta2_link cta2_link VARCHAR(500) DEFAULT \'NULL\', CHANGE cta2_link_text cta2_link_text VARCHAR(255) DEFAULT \'NULL\', CHANGE background_image background_image VARCHAR(1000) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE hero_section_home CHANGE main_title_pre_text main_title_pre_text VARCHAR(255) DEFAULT \'NULL\', CHANGE main_title main_title VARCHAR(255) DEFAULT \'NULL\', CHANGE cta1_link cta1_link VARCHAR(255) DEFAULT \'NULL\', CHANGE cta1_title cta1_title VARCHAR(255) DEFAULT \'NULL\', CHANGE cta2_link cta2_link VARCHAR(500) DEFAULT \'NULL\', CHANGE cta2_link_text cta2_link_text VARCHAR(255) DEFAULT \'NULL\', CHANGE background_image background_image VARCHAR(1000) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE home_page_slider CHANGE title title VARCHAR(255) DEFAULT \'NULL\', CHANGE subtitle subtitle VARCHAR(255) DEFAULT \'NULL\', CHANGE cta_title cta_title VARCHAR(255) DEFAULT \'NULL\', CHANGE cta_link cta_link VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE insurance_box CHANGE icon icon VARCHAR(255) DEFAULT \'NULL\', CHANGE text1 text1 VARCHAR(255) DEFAULT \'NULL\', CHANGE icon2 icon2 VARCHAR(255) DEFAULT \'NULL\', CHANGE text2 text2 VARCHAR(1000) DEFAULT \'NULL\', CHANGE icon3 icon3 VARCHAR(500) DEFAULT \'NULL\', CHANGE text3 text3 VARCHAR(1000) DEFAULT \'NULL\', CHANGE cta_title cta_title VARCHAR(500) DEFAULT \'NULL\', CHANGE cta_link cta_link VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE intro_section CHANGE h2_text h2_text VARCHAR(500) DEFAULT \'NULL\', CHANGE sub_h2_text sub_h2_text VARCHAR(1000) DEFAULT \'NULL\', CHANGE image1_src image1_src VARCHAR(500) DEFAULT \'NULL\', CHANGE image2_src image2_src VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE media_object CHANGE file_path file_path VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE meet_hanna CHANGE meet_hanna_section_title meet_hanna_section_title VARCHAR(500) DEFAULT \'NULL\', CHANGE meet_hanna_section_subtitle meet_hanna_section_subtitle VARCHAR(500) DEFAULT \'NULL\', CHANGE meet_hanna_image1 meet_hanna_image1 VARCHAR(500) DEFAULT \'NULL\', CHANGE meet_hanna_image2 meet_hanna_image2 VARCHAR(500) DEFAULT \'NULL\', CHANGE meet_hanna_cta_title meet_hanna_cta_title VARCHAR(255) DEFAULT \'NULL\', CHANGE meet_hanna_cta_link meet_hanna_cta_link VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE newsletter CHANGE email email VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE our_goals_data CHANGE our_goals_title our_goals_title VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE product CHANGE main_image main_image VARCHAR(500) DEFAULT \'NULL\', CHANGE keywords keywords LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`, CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\', CHANGE ribbon_indicator ribbon_indicator VARCHAR(255) DEFAULT \'NULL\', CHANGE ribbon_indicator_text ribbon_indicator_text VARCHAR(255) DEFAULT \'NULL\', CHANGE main_price main_price VARCHAR(255) DEFAULT \'NULL\', CHANGE discounted_price discounted_price VARCHAR(255) DEFAULT \'NULL\', CHANGE singe_product_terms_box1_icon singe_product_terms_box1_icon VARCHAR(500) DEFAULT \'NULL\', CHANGE singe_product_terms_box1_text2 singe_product_terms_box1_text2 VARCHAR(500) DEFAULT \'NULL\', CHANGE singe_product_terms_box2_icon singe_product_terms_box2_icon VARCHAR(500) DEFAULT \'NULL\', CHANGE short_description short_description VARCHAR(1000) DEFAULT \'NULL\', CHANGE singe_product_terms_box3_text2 singe_product_terms_box3_text2 VARCHAR(250) DEFAULT \'NULL\', CHANGE single_product_availability_text single_product_availability_text VARCHAR(250) DEFAULT \'NULL\', CHANGE image1 image1 VARCHAR(250) DEFAULT \'NULL\', CHANGE image2 image2 VARCHAR(250) DEFAULT \'NULL\', CHANGE image3 image3 VARCHAR(250) DEFAULT \'NULL\', CHANGE image4 image4 VARCHAR(250) DEFAULT \'NULL\', CHANGE title title VARCHAR(255) DEFAULT \'NULL\', CHANGE category category LONGTEXT DEFAULT NULL, CHANGE image5 image5 VARCHAR(255) DEFAULT \'NULL\', CHANGE image6 image6 VARCHAR(255) DEFAULT \'NULL\', CHANGE image7 image7 VARCHAR(255) DEFAULT \'NULL\', CHANGE image8 image8 VARCHAR(255) DEFAULT \'NULL\', CHANGE image9 image9 VARCHAR(255) DEFAULT \'NULL\', CHANGE image10 image10 VARCHAR(255) DEFAULT \'NULL\', CHANGE meta_description meta_description VARCHAR(255) DEFAULT \'NULL\', CHANGE learn_more_text learn_more_text VARCHAR(1000) DEFAULT \'NULL\', CHANGE learn_more_link learn_more_link VARCHAR(500) DEFAULT \'NULL\', CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE promotions CHANGE text text VARCHAR(1000) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE sale_section CHANGE sale_section_title sale_section_title VARCHAR(255) DEFAULT \'NULL\', CHANGE sale_section_paragraph sale_section_paragraph VARCHAR(1000) DEFAULT \'NULL\', CHANGE sale_section_link sale_section_link VARCHAR(500) DEFAULT \'NULL\', CHANGE sale_section_link_title sale_section_link_title VARCHAR(500) DEFAULT \'NULL\', CHANGE image1 image1 VARCHAR(500) DEFAULT \'NULL\', CHANGE image2 image2 VARCHAR(500) DEFAULT \'NULL\', CHANGE image3 image3 VARCHAR(500) DEFAULT \'NULL\', CHANGE image4 image4 VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE seo CHANGE page page VARCHAR(255) DEFAULT \'NULL\', CHANGE title title VARCHAR(255) DEFAULT \'NULL\', CHANGE description description VARCHAR(1000) DEFAULT \'NULL\', CHANGE keywords keywords LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`, CHANGE meta_description meta_description VARCHAR(1000) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE tabs_section_tabs_data CHANGE label label VARCHAR(255) DEFAULT \'NULL\', CHANGE image image VARCHAR(500) DEFAULT \'NULL\', CHANGE slide_image slide_image VARCHAR(500) DEFAULT \'NULL\', CHANGE link_to link_to VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE tabs_section_text CHANGE tab_section_title tab_section_title VARCHAR(255) DEFAULT \'NULL\', CHANGE tab_section_subtitle tab_section_subtitle VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}

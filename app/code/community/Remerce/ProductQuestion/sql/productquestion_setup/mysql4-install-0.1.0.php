<?php
$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$installer->run("
INSERT INTO {$this->getTable('core_email_template')} (`template_code`, `template_text`, `template_type`, `template_subject`, `template_sender_name`, `template_sender_email`, `added_at`, `modified_at`) VALUES
('Productquestion Form (Plain)', 'Name: {{var data.name}}\r\nE-mail: {{var data.email}}\r\nTelephone: {{var data.telephone}}\r\nComment: {{var data.comment}}', 1, 'Question about: {{var data.productname}} - {{var data.productsku}}', NULL, NULL, NOW(), NOW());
");
$installer->endSetup();
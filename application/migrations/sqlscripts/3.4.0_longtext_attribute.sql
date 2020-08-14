#attribute_values table
ALTER TABLE `ospos_attribute_values` DROP INDEX `attribute_value`;
ALTER TABLE `ospos_attribute_values` MODIFY `attribute_value` VARCHAR(10000);
ALTER TABLE `ospos_attribute_values` ADD UNIQUE INDEX `attribute_value` (`attribute_value`(255));

#items table
ALTER TABLE `ospos_items` MODIFY `description` VARCHAR(10000) NOT NULL;
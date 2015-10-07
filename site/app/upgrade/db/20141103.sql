ALTER TABLE `[#DB_PREFIX#]weixin_accounts` DROP COLUMN `HeavenSpree_access_token`, DROP COLUMN `HeavenSpree_access_secret`;

DELETE FROM `[#DB_PREFIX#]system_setting` WHERE `varname` = 'HeavenSpree_access_token';
DELETE FROM `[#DB_PREFIX#]system_setting` WHERE `varname` = 'HeavenSpree_access_secret';
DELETE FROM `[#DB_PREFIX#]system_setting` WHERE `varname` = 'HeavenSpree_mp_notification_once';

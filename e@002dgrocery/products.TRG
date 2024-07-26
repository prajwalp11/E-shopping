TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `after_product_insert` AFTER INSERT ON `products` FOR EACH ROW insert into activity VALUES(NEW.id,\'Inserted\',NOW())' 'CREATE DEFINER=`root`@`localhost` TRIGGER `updated_product_insert` AFTER UPDATE ON `products` FOR EACH ROW INSERT INTO activity VALUES (NEW.id, \'Updated\', NOW())' 'CREATE DEFINER=`root`@`localhost` TRIGGER `delete_product_insert` AFTER DELETE ON `products` FOR EACH ROW insert into activity VALUES(OLD.id,\'Deleted\',NOW())'
sql_modes=1098907648 1098907648 1098907648
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci'
created=1701907957620321 1701908012404546 1701908039991605

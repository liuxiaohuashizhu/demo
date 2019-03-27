<?php

/*
 *
 * 明星表
CREATE TABLE `star` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `star_name` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '明星真实名字',
  `star_nike_name` VARCHAR(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '昵称 可多个 \分隔',
` created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `star_name` (`star_name`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='明星表';






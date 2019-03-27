<?php

/*
CREATE TABLE `user` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_name` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '用户名',
  `user_pwd` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '用户密码',
  `sex` TINYINT(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 3 COMMENT '性别 1 女; 2 男 3保密',
  `age` int(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 0 COMMENT '年龄',
  `education` int(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 1 COMMENT '学历 1保密 2小学 3初中 4高中 5大学 6硕士 7博士 8博士后 9MBA',
  `location` VARCHAR(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '保密' COMMENT '所在地',
  `pic_url` VARCHAR(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 0 COMMENT '用户头像',
  `auth_token` VARCHAR(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '授权',
  `product_line` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '产品线',
  `email` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '用户邮箱',
  `tel` VARCHAR(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '电话',
  `wx_id` VARCHAR(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '微信_id',
  `qq_id` VARCHAR(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'qq_id',
  `sina_id` VARCHAR(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '新浪_id',
  `last_login_location` VARCHAR(132) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '最后登陆地',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  `last_login_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP  COMMENT '最后登录时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `tel` (`tel`),
  KEY `u_tel` (`tel`),
  KEY `u_name` (`user_name`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='用户表';

 */
/**
 * Created by PhpStorm.
 * User: liuyingxia
 * Date: 2018/11/13
 * Time: 17:00
 */


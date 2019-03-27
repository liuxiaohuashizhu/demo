<?php

/*
 * 头条
CREATE TABLE `today_headline` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `star_id` int(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '明星id',
  `title` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '标题',
  `left_pic_urls` text COLLATE utf8mb4_unicode_ci COMMENT '左侧图片url，可多个 json格式',
  `nike_name` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '头条用户昵称',
  `publish_date` Date NOT NULL DEFAULT '0000-00-00' COMMENT '该新闻发布日期',
  `video_flag` TINYINT(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 2 COMMENT '详情页是否有视频标识 1有 2没有',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '抓取日期',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '抓取更新日期',
  PRIMARY KEY (`id`),
  KEY `star_id` (`star_id`),
  KEY `publish_date` (`publish_date`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='今日头条数据';

 */
/**
 * Created by PhpStorm.
 * User: liuyingxia
 * Date: 2018/11/13
 * Time: 17:00
 */


CREATE TABLE `cartentry` (
  `id` int(11) UNSIGNED NOT NULL,
  `article_id` int(11) UNSIGNED NOT NULL,
  `amount` int(5) UNSIGNED NOT NULL DEFAULT '1',
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `cartentry`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `cartentry`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

CREATE TABLE `usercart` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `usercart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_usercart_user` (`user_id`);

ALTER TABLE `usercart`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

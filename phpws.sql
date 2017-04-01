-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) DEFAULT NULL,
  `post_description` text,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `posts` (`id`, `post_title`, `post_description`, `user_id`, `created_at`, `updated_at`) VALUES
(3,	'Hello Everyone',	'hi',	6,	'2017-03-23 10:23:54',	'2017-03-24 20:25:30'),
(4,	'There is no one who loves pain itself, who seeks after it and wants to have it',	'Nam ligula lorem, fringilla maximus tellus ut, fringilla aliquet libero. In nunc mauris, interdum et efficitur ac, tempus vel nunc. Fusce mollis volutpat risus, nec scelerisque odio accumsan eu. Vivamus ipsum enim, varius at scelerisque ut, efficitur eu ex. Aliquam nisl dui, efficitur id maximus eu, vulputate id nisi. Aenean elit nisl, vulputate eget nisl nec, elementum maximus elit. Nullam ipsum augue, ullamcorper congue tincidunt in, varius ut massa.\r\n\r\nNullam finibus tellus ipsum, quis dictum lectus euismod eget. In consequat dui auctor, vehicula ipsum id, elementum nunc. Donec finibus, magna cursus aliquet condimentum, lorem lacus consequat lacus, sit amet vehicula magna elit ut nunc. Aliquam accumsan dui quis luctus fermentum. Ut vel tellus sed neque dignissim faucibus. Aliquam eu pretium libero. Proin venenatis massa mi, quis maximus justo interdum at. Cras bibendum est non nisi pharetra bibendum.\r\n\r\nMauris ac laoreet nunc, sed ornare lacus. Duis feugiat venenatis metus. Vivamus sed risus in ligula sodales dapibus a eu sapien. Ut sed erat tristique, tempor est et, tristique ligula. Phasellus vulputate mollis molestie. Praesent ut scelerisque purus, nec scelerisque felis. Vestibulum non nisl at nunc pulvinar pretium lobortis a felis. Duis eget urna nisl.\r\n\r\nProin quis convallis nisl, sed sodales urna. Aenean at aliquet urna. Morbi quis nibh nec magna blandit consectetur. Suspendisse laoreet neque nec tortor finibus suscipit. Fusce varius nulla augue, eu feugiat sapien rhoncus eget. In libero lacus, blandit tempor sollicitudin at, aliquet iaculis nisl. Quisque vulputate lectus eu dapibus interdum. Sed suscipit, urna non condimentum pellentesque, nunc mauris mattis dolor, sed ultricies nisl velit non libero. Curabitur rhoncus tempor nunc quis porttitor.\r\n\r\nDonec porttitor purus ex, vitae suscipit diam volutpat non. Donec eros nisi, varius sed lacus a, hendrerit porttitor urna. Integer sapien justo, dictum sed leo ut, vulputate hendrerit nulla. Morbi porttitor tempus enim vel accumsan. Nulla blandit sagittis felis, vestibulum gravida quam rhoncus ut. Ut lobortis ex id nisi facilisis convallis. Vivamus egestas velit nunc, non pretium ante iaculis et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin placerat massa congue erat pretium porttitor.',	3,	'2017-03-23 10:25:32',	'2017-03-24 11:33:56'),
(6,	'Laravel',	'Pellentesque sodales quis ex a rutrum. Vestibulum mollis pulvinar venenatis. Phasellus a quam eu lorem molestie porttitor. Praesent consectetur justo quis hendrerit fringilla. Etiam id tincidunt quam. Ut ut pretium ante, sit amet consequat risus. Mauris fringilla, nunc vitae gravida sollicitudin, risus enim efficitur enim, dictum pulvinar quam augue sed diam. Fusce iaculis nunc aliquet enim condimentum cursus.\r\n\r\nDuis convallis urna vel lectus pretium fringilla. Proin varius, felis sit amet pretium varius, enim elit vehicula justo, at dignissim dolor diam vitae nunc. Quisque placerat lectus enim. Curabitur enim lacus, accumsan ac augue vel, rutrum viverra arcu. Nulla sed neque ut nunc ornare interdum. Etiam blandit ac tortor ac accumsan. Donec interdum nisi vestibulum nibh elementum, nec tincidunt risus euismod. Curabitur justo diam, congue placerat volutpat in, eleifend non eros. Aenean tincidunt dolor sed mi sodales tincidunt. Donec in velit interdum, consectetur nisl non, molestie nulla. Donec iaculis purus non pellentesque viverra. Donec ullamcorper, velit eget tempus placerat, est elit porttitor mauris, eu blandit nisi dui ut diam.\r\n\r\nMauris fermentum placerat ex, eget maximus erat. Mauris viverra dignissim arcu, eget suscipit erat sollicitudin eget. Nulla eget sollicitudin augue. Maecenas enim sapien, pulvinar sodales pretium a, congue vel neque. Nam scelerisque elementum dui. Pellentesque feugiat orci id purus euismod ultricies. Integer lacinia elit eu luctus venenatis. Integer sem tortor, interdum rutrum varius nec, sodales vitae ligula. Aliquam erat volutpat. Donec vel ex eget sapien fermentum volutpat.\r\n\r\nNullam sodales nunc lacinia, aliquam tortor non, tristique augue. Fusce blandit turpis pretium velit mattis, sollicitudin varius nulla pellentesque. Aliquam non ante nibh. In neque elit, molestie nec aliquet sed, interdum molestie nisl. Integer mauris lectus, porta quis arcu et, imperdiet rhoncus lacus. Nam consequat erat sed facilisis cursus. Vivamus mattis pulvinar turpis vestibulum tempus. Pellentesque vel porttitor ligula. Proin a feugiat urna. Pellentesque quis augue sollicitudin, placerat ex sit amet, convallis libero. Proin sed nisl non nisl finibus cursus non id tellus.\r\n\r\nVestibulum at diam porttitor, consequat libero dictum, semper est. Ut eget sapien sit amet elit porttitor pretium quis sed tortor. Sed eu luctus felis. Donec ac sapien ac diam imperdiet rutrum. Morbi sed felis ex. Nunc vel bibendum dui. Sed nec elementum sapien, vel imperdiet neque. Vestibulum libero neque, feugiat id lorem non, pharetra vulputate nunc. Cras mattis eleifend sem, at accumsan nisi dignissim ac. Curabitur suscipit lacinia augue, a fringilla nisi varius vel. Nam sagittis eget massa molestie consequat. Maecenas pulvinar arcu eu turpis tempus, ut vehicula mi pharetra. Mauris luctus lacinia euismod. Vivamus ut efficitur tellus, non posuere urna. Ut pharetra augue vestibulum, sollicitudin massa ut, blandit nibh. Vivamus id orci et orci tempus malesuada.',	7,	'2017-03-23 13:35:24',	'2017-03-24 11:32:41'),
(7,	'This is dummy post',	' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis velit tempus ligula malesuada, in lobortis sapien consequat. Nulla sed congue ex. Sed vitae libero scelerisque, mollis lorem in, imperdiet sem. Vestibulum aliquam dolor in sem blandit blandit. Vivamus hendrerit semper tortor, at ornare ipsum laoreet id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in nunc lorem. Proin mattis, velit ac mollis tempor, lorem justo rhoncus massa, eget auctor velit ipsum vitae justo.\r\n\r\nAliquam sit amet dolor felis. Phasellus tincidunt tincidunt ex, sit amet tristique purus cursus faucibus. Vestibulum nulla odio, ullamcorper ut blandit eu, cursus id velit. In augue diam, blandit eu sapien quis, bibendum facilisis arcu. Vivamus ac odio sed turpis aliquam tincidunt sit amet eget tortor. Proin eget lacinia augue. Aenean ullamcorper tortor risus, id vulputate sem varius ac. Morbi euismod diam ac pulvinar rutrum.\r\n\r\nEtiam pretium, mi vel auctor porttitor, erat lectus faucibus purus, sed imperdiet nulla purus quis turpis. Pellentesque nisi mauris, mattis eget ex sed, convallis commodo libero. Duis nisi arcu, volutpat et sodales in, placerat ac urna. Sed scelerisque varius enim eu fermentum. Aenean et diam dictum, molestie est eget, lobortis lectus. In ut porta justo. Maecenas non condimentum odio. Vivamus vehicula nulla fringilla nulla sagittis viverra. Vivamus tempor, quam eu hendrerit tempus, urna neque ultrices ex, quis porta magna felis nec ipsum. Quisque maximus nibh in est ornare hendrerit. Donec a nulla vitae odio bibendum pharetra. Pellentesque quis luctus diam, vel finibus felis. Nunc faucibus, dolor sit amet facilisis placerat, urna mi ornare lacus, in viverra erat dolor a nunc. Vestibulum at tincidunt nisl, vel hendrerit est. Quisque malesuada dignissim risus, eu varius diam varius a.\r\n\r\nDonec lobortis id risus id vulputate. Suspendisse urna urna, dictum ut ullamcorper vel, convallis ut ligula. Integer vitae orci sem. Vivamus auctor imperdiet nulla at porttitor. Etiam nec magna ultrices, porta turpis nec, maximus nisi. Vivamus est arcu, venenatis ut tellus a, ornare hendrerit ligula. Nunc felis neque, consequat vel laoreet nec, blandit eu nunc. Donec dictum dui sed vestibulum pretium. Aliquam erat volutpat. Ut auctor lorem sed felis pretium vehicula. Proin ultricies egestas purus a mattis. Etiam quis pharetra arcu. Praesent ut velit a augue sollicitudin pretium. Pellentesque ultricies arcu quis felis ultrices suscipit. Cras dictum erat ac semper maximus.\r\n\r\nSuspendisse ornare lectus nisl. Vivamus pretium maximus purus, a convallis sapien iaculis ut. Morbi maximus viverra lacinia. Curabitur eget dolor tincidunt lacus consectetur hendrerit id vitae nibh. Maecenas molestie arcu ipsum, sed ullamcorper nunc semper ut. Curabitur vel tincidunt nunc. Donec justo odio, commodo nec eros non, molestie cursus urna. Etiam luctus sapien et justo elementum, sed euismod felis gravida. ',	7,	'2017-03-24 05:32:52',	'2017-03-24 11:32:02'),
(8,	'Hello Everyone',	' Hi, it\'s me Sudipto Chowdhury. It is my first post in this blog. I love to do programming and stuffs. I\'ve been codi\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,',	1,	'2017-03-24 11:34:37',	'2017-03-24 12:44:24'),
(9,	'aaaaa',	'ashjgmbmbm',	1,	'2017-03-27 11:18:43',	'2017-03-27 11:18:43');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`) VALUES
(1,	'Sudipto',	'Chowdhury',	'dip.chy93@gmail.com'),
(3,	'Sabbir',	'Ahmed',	'sabbirahmed99@gmail.com'),
(6,	'Xaber',	'Ahmed',	'xaberahmed99@hotmail.com'),
(7,	'Akhyar',	'Ahmed',	'akhyarahmed99@gmail.com'),
(8,	'Chanchal',	'Islam',	'chanchal89@gmail.com');

-- 2017-04-01 17:46:42
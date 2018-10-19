<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfeedbackclass`;");
E_C("CREATE TABLE `phome_enewsfeedbackclass` (
  `bid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(60) NOT NULL DEFAULT '',
  `btemp` mediumtext NOT NULL,
  `bzs` varchar(255) NOT NULL DEFAULT '',
  `enter` text NOT NULL,
  `mustenter` text NOT NULL,
  `filef` varchar(255) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `checkboxf` text NOT NULL,
  `usernames` text NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfeedbackclass` values('1',0xe6898be69cbae7abaf,0x5b212d2d63702e6865616465722d2d5d3c7461626c652077696474683d3130302520616c69676e3d63656e7465722063656c6c70616464696e673d332063656c6c73706163696e673d31206267636f6c6f723d2723444245414635273e3c666f726d206e616d653d27666565646261636b27206d6574686f643d27706f73742720656e63747970653d276d756c7469706172742f666f726d2d646174612720616374696f6e3d272e2e2f2e2e2f656e6577732f696e6465782e706870273e3c696e707574206e616d653d27656e6577732720747970653d2768696464656e272076616c75653d27416464466565646261636b273e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee5b08fe58cbae5908de7a7b03c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d277869616f71752720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee4bfa1e681afe6a087e9a2983c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d277469746c652720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee68ea8e5b9bfe69da5e6ba903c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276c61697975616e2720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee68ea8e5b9bfe5889be6848f3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d27636875616e6779692720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee682a8e79a84e5a793e5908d3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276e616d652720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee88194e7b3bbe794b5e8af9d3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276d7963616c6c2720747970653d2774657874272076616c75653d27273e282a293c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee5bbbae7ad91e99da2e7a7af3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276d69616e6a692720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee8a385e4bfaee6a1a3e6aca13c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d2764616e6763692720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee8a385e4bfaee9a38ee6a0bc3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d2766656e6767652720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee998b3e58fb0e695b0e9878f3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d2779616e677461692720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee58dabe7949fe997b4e695b0e9878f3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d277765697368656e676a69616e2720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee5aea2e58e85e695b0e9878f3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276b6574696e672720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee58da7e5aea4e695b0e9878f3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d27776f7368692720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee688bfe5b18be7b1bbe59e8b3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276c656978696e672720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee4bfa1e681afe58685e5aeb93c2f74643e3c7464206267636f6c6f723d27666666666666273e3c7465787461726561206e616d653d27736179746578742720636f6c733d2736302720726f77733d273132273e3c2f74657874617265613e3c2f74643e3c2f74723e3c74723e3c7464206267636f6c6f723d27666666666666273e3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e70757420747970653d277375626d697427206e616d653d277375626d6974272076616c75653d27e68f90e4baa4273e3c2f74643e3c2f74723e3c2f666f726d3e3c2f7461626c653e5b212d2d63702e666f6f7465722d2d5d,'',0xe5b08fe58cbae5908de7a7b03c212d2d6669656c642d2d2d3e7869616f71753c212d2d7265636f72642d2d3ee4bfa1e681afe6a087e9a2983c212d2d6669656c642d2d2d3e7469746c653c212d2d7265636f72642d2d3ee68ea8e5b9bfe69da5e6ba903c212d2d6669656c642d2d2d3e6c61697975616e3c212d2d7265636f72642d2d3ee68ea8e5b9bfe5889be6848f3c212d2d6669656c642d2d2d3e636875616e6779693c212d2d7265636f72642d2d3ee682a8e79a84e5a793e5908d3c212d2d6669656c642d2d2d3e6e616d653c212d2d7265636f72642d2d3ee88194e7b3bbe794b5e8af9d3c212d2d6669656c642d2d2d3e6d7963616c6c3c212d2d7265636f72642d2d3ee5bbbae7ad91e99da2e7a7af3c212d2d6669656c642d2d2d3e6d69616e6a693c212d2d7265636f72642d2d3ee8a385e4bfaee6a1a3e6aca13c212d2d6669656c642d2d2d3e64616e6763693c212d2d7265636f72642d2d3ee8a385e4bfaee9a38ee6a0bc3c212d2d6669656c642d2d2d3e66656e6767653c212d2d7265636f72642d2d3ee998b3e58fb0e695b0e9878f3c212d2d6669656c642d2d2d3e79616e677461693c212d2d7265636f72642d2d3ee58dabe7949fe997b4e695b0e9878f3c212d2d6669656c642d2d2d3e7765697368656e676a69616e3c212d2d7265636f72642d2d3ee5aea2e58e85e695b0e9878f3c212d2d6669656c642d2d2d3e6b6574696e673c212d2d7265636f72642d2d3ee58da7e5aea4e695b0e9878f3c212d2d6669656c642d2d2d3e776f7368693c212d2d7265636f72642d2d3ee688bfe5b18be7b1bbe59e8b3c212d2d6669656c642d2d2d3e6c656978696e673c212d2d7265636f72642d2d3ee4bfa1e681afe58685e5aeb93c212d2d6669656c642d2d2d3e736179746578743c212d2d7265636f72642d2d3e,0x2c6d7963616c6c2c,0x2c,'0',0x2c,'');");
E_D("replace into `phome_enewsfeedbackclass` values('2',0xe794b5e88491e7abaf,0x5b212d2d63702e6865616465722d2d5d3c7461626c652077696474683d3130302520616c69676e3d63656e7465722063656c6c70616464696e673d332063656c6c73706163696e673d31206267636f6c6f723d2723444245414635273e3c666f726d206e616d653d27666565646261636b27206d6574686f643d27706f73742720656e63747970653d276d756c7469706172742f666f726d2d646174612720616374696f6e3d272e2e2f2e2e2f656e6577732f696e6465782e706870273e3c696e707574206e616d653d27656e6577732720747970653d2768696464656e272076616c75653d27416464466565646261636b273e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee5b08fe58cbae5908de7a7b03c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d277869616f71752720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee6a087e9a2983c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d277469746c652720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee68ea8e5b9bfe69da5e6ba903c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276c61697975616e2720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee68ea8e5b9bfe5889be6848f3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d27636875616e6779692720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee5aea2e688b7e5a793e5908d3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276e616d652720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee6898be69cbae58fb7e7a0813c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276d7963616c6c2720747970653d2774657874272076616c75653d27273e282a293c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee5bbbae7ad91e99da2e7a7af3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276d69616e6a692720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee8a385e4bfaee6a1a3e6aca13c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d2764616e6763692720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee8a385e4bfaee9a38ee6a0bc3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d2766656e6767652720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee998b3e58fb0e695b0e9878f3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d2779616e677461692720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee58dabe7949fe997b4e695b0e9878f3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d277765697368656e676a69616e2720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee5aea2e58e85e695b0e9878f3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276b6574696e672720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee58da7e5aea4e695b0e9878f3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d27776f7368692720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee688bfe5b18be7b1bbe59e8b3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e707574206e616d653d276c656978696e672720747970653d2774657874272076616c75653d27273e3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee585b6e4bb96e99c80e6b1823c2f74643e3c7464206267636f6c6f723d27666666666666273e3c7465787461726561206e616d653d27736179746578742720636f6c733d2736302720726f77733d273132273e3c2f74657874617265613e3c2f74643e3c2f74723e3c74723e3c7464206267636f6c6f723d27666666666666273e3c2f74643e3c7464206267636f6c6f723d27666666666666273e3c696e70757420747970653d277375626d697427206e616d653d277375626d6974272076616c75653d27e68f90e4baa4273e3c2f74643e3c2f74723e3c2f666f726d3e3c2f7461626c653e5b212d2d63702e666f6f7465722d2d5d,'',0xe5b08fe58cbae5908de7a7b03c212d2d6669656c642d2d2d3e7869616f71753c212d2d7265636f72642d2d3ee6a087e9a2983c212d2d6669656c642d2d2d3e7469746c653c212d2d7265636f72642d2d3ee68ea8e5b9bfe69da5e6ba903c212d2d6669656c642d2d2d3e6c61697975616e3c212d2d7265636f72642d2d3ee68ea8e5b9bfe5889be6848f3c212d2d6669656c642d2d2d3e636875616e6779693c212d2d7265636f72642d2d3ee5aea2e688b7e5a793e5908d3c212d2d6669656c642d2d2d3e6e616d653c212d2d7265636f72642d2d3ee6898be69cbae58fb7e7a0813c212d2d6669656c642d2d2d3e6d7963616c6c3c212d2d7265636f72642d2d3ee5bbbae7ad91e99da2e7a7af3c212d2d6669656c642d2d2d3e6d69616e6a693c212d2d7265636f72642d2d3ee8a385e4bfaee6a1a3e6aca13c212d2d6669656c642d2d2d3e64616e6763693c212d2d7265636f72642d2d3ee8a385e4bfaee9a38ee6a0bc3c212d2d6669656c642d2d2d3e66656e6767653c212d2d7265636f72642d2d3ee998b3e58fb0e695b0e9878f3c212d2d6669656c642d2d2d3e79616e677461693c212d2d7265636f72642d2d3ee58dabe7949fe997b4e695b0e9878f3c212d2d6669656c642d2d2d3e7765697368656e676a69616e3c212d2d7265636f72642d2d3ee5aea2e58e85e695b0e9878f3c212d2d6669656c642d2d2d3e6b6574696e673c212d2d7265636f72642d2d3ee58da7e5aea4e695b0e9878f3c212d2d6669656c642d2d2d3e776f7368693c212d2d7265636f72642d2d3ee688bfe5b18be7b1bbe59e8b3c212d2d6669656c642d2d2d3e6c656978696e673c212d2d7265636f72642d2d3ee585b6e4bb96e99c80e6b1823c212d2d6669656c642d2d2d3e736179746578743c212d2d7265636f72642d2d3e,0x2c6d7963616c6c2c,0x2c,'0',0x2c,'');");

@include("../../inc/footer.php");
?>
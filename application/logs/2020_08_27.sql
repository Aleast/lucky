SELECT *
FROM `manager`
WHERE `username` = 'admin'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
AND `is_del` = 0
AND `is_use` = 1;


SELECT `rl`.*, `manager`.`username`, `manager`.`nickname`, `dept`.`name` as `deptname`, `manager`.`is_del` as `m_is_del`
FROM `rl`
LEFT JOIN `manager` ON `rl`.`mid` = `manager`.`id`
LEFT JOIN `dept` ON `manager`.`deptid` = `dept`.`id`
WHERE `rl`.`is_del` = '0'
ORDER BY `rl`.`id` desc
 LIMIT 10;


SELECT `manager`.*, `dept`.`name` as `deptname`
FROM `manager`
LEFT JOIN `dept` ON `manager`.`deptid` = `dept`.`id`
WHERE `manager`.`is_del` = '0'
 LIMIT 10;


SELECT *
FROM `role`
WHERE `role`.`is_del` = '0'
ORDER BY `role`.`id` desc
 LIMIT 10;


SELECT *
FROM `role`
WHERE `role`.`is_del` = '0'
ORDER BY `role`.`id` desc
 LIMIT 10;


SELECT *
FROM `role`
WHERE `role`.`is_del` = '0'
ORDER BY `role`.`id` desc
 LIMIT 10;


SELECT *
FROM `manager`
WHERE `username` = 'admin'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
AND `is_del` = 0
AND `is_use` = 1;


SELECT `rl`.*, `manager`.`username`, `manager`.`nickname`, `dept`.`name` as `deptname`, `manager`.`is_del` as `m_is_del`
FROM `rl`
LEFT JOIN `manager` ON `rl`.`mid` = `manager`.`id`
LEFT JOIN `dept` ON `manager`.`deptid` = `dept`.`id`
WHERE `rl`.`is_del` = '0'
ORDER BY `rl`.`id` desc
 LIMIT 10;


SELECT *
FROM `manager`
WHERE `username` = 'admin'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
AND `is_del` = 0
AND `is_use` = 1;


SELECT *
FROM `role`
WHERE `role`.`is_del` = '0'
ORDER BY `role`.`id` desc
 LIMIT 10;


SELECT *
FROM `manager`
WHERE `username` = 'admin'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
AND `is_del` = 0
AND `is_use` = 1;


SELECT `rl`.*, `manager`.`username`, `manager`.`nickname`, `dept`.`name` as `deptname`, `manager`.`is_del` as `m_is_del`
FROM `rl`
LEFT JOIN `manager` ON `rl`.`mid` = `manager`.`id`
LEFT JOIN `dept` ON `manager`.`deptid` = `dept`.`id`
WHERE `rl`.`is_del` = '0'
ORDER BY `rl`.`id` desc
 LIMIT 10;


SELECT `rl`.*, `manager`.`username`, `manager`.`nickname`, `dept`.`name` as `deptname`, `manager`.`is_del` as `m_is_del`
FROM `rl`
LEFT JOIN `manager` ON `rl`.`mid` = `manager`.`id`
LEFT JOIN `dept` ON `manager`.`deptid` = `dept`.`id`
WHERE `rl`.`is_del` = '0'
ORDER BY `rl`.`id` desc;


SELECT `rl`.*, `manager`.`username`, `manager`.`nickname`, `dept`.`name` as `deptname`, `manager`.`is_del` as `m_is_del`
FROM `rl`
LEFT JOIN `manager` ON `rl`.`mid` = `manager`.`id`
LEFT JOIN `dept` ON `manager`.`deptid` = `dept`.`id`
WHERE `rl`.`is_del` = '0'
ORDER BY `rl`.`id` desc
 LIMIT 10;



<table border="1">
  <tr>
  <th>ID</th>
  <th>电话</th>
  <th>商城ID</th>
  <th>归属员工</th>
  <th>员工昵称</th>
  <th>归属部门</th>
  <th>创建时间</th>
  </tr>
  <tr>
  <?php foreach ($list as $item): ?>
  <tr>
    <td><?=$item['id']?></td>

    <td><?=$item['cphone']?></td>
    <td><?=$item['cid']?></td>
    <td>
    <?php if ($item['m_is_del'] == '0'): ?>
      <?=$item['username']?>
    <?php else: ?>
      未分配
    <?php endif; ?>
    </td>
    <td>
    <?php if ($item['m_is_del'] == '0'): ?>
      <?=$item['nickname']?>
    <?php else: ?>
      未分配
    <?php endif; ?>
    </td>
    <td><?=$item['deptname']?></td>


    <td><?=date("Y-m-d H:i:s",$item['addtime'])?></td>
    
  </tr>
  <?php endforeach;?>     
</table>
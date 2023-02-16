<!-- File: /app/View/Posts/index.ctp -->
<h1>Blog posts</h1>
<?php echo $this->Html->link(
		'Add Post',
		array('controller' => 'posts', 'action' => 'add')
); ?>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Body</th>
		<th>Action</th>
		<th>Created</th>
	</tr>
	<!-- Here is where we loop through our $posts array, printing out post info -->
	<?php foreach ($posts as $post): ?>
		<?php $post = $post['Post'] ?>
		<tr>
			<td><?= $post['id'] ?></td>
			<td><?= $this->Html->link($post['title'], array('controller' => 'posts', 'action' => 'view', $post['id'])) ?></td>
			<td><?= $post['body'] ?></td>
			<td>
				<?= $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])) ?>
				<?= $this->Form->postLink(__('Remove'), array('action' => 'delete', $post['id']), array('confirm' => 'Are you sure?')) ?>
			</td>
			<td><?= $post['created'] ?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset($posts); ?>
</table>

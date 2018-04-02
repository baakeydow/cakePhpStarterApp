<div class="articles view large-9 medium-8 columns content">
    <table>
        <tr>
            <th>Title</th>
            <th>Created</th>
            <th>Tag</th>
            <th>Action</th>
        </tr>
        <?php foreach ($articles as $article): ?>
        <tr>
            <td>
                <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $article->slug ?>
            </td>
            <td>
                <?php if (isset($currentUser['id'])) {
                    echo $this->Html->link('Edit', ['action' => 'edit', $article->slug]);
                    echo ' / ';
                    echo $this->Form->postLink(
                        'Delete',
                        ['action' => 'delete', $article->slug],
                        ['confirm' => 'Are you sure?']);
                } else { ?>
                    <h4><a href="/users/login">Login</a></h4>
                <?php } ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

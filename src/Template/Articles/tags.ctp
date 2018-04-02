<div class="articles tags large-9 medium-8 columns content">
    <h3>
        List of Articles tagged with
        <?= $this->Text->toList(h($tags), 'or') ?>
    </h3>

    <section>
    <?php foreach ($articles as $article): ?>
        <article>
            <!-- Use the HtmlHelper to create a link -->
            <h4><?= $this->Html->link(
                $article->title,
                ['controller' => 'Articles', 'action' => 'view', $article->slug]
            ) ?></h4>
            <span><?= h($article->created) ?>
        </article>
    <?php endforeach; ?>
    </section>
</div>

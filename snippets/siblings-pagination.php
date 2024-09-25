<nav <?php
echo attr(A::extend([
    'class' => "siblings-pagination"
], $attrs ?? []));
?>>
  <div class="siblings-pagination__inner">
    <?php if ($hasPrev ?? false) : ?>
    <?php
      snippet('siblings-pagination-item', [
        'label' => $prevLabel,
        'href' => $prev->url(),
        'attrs' => [
          'class' => 'siblings-pagination__item siblings-pagination__item--prev',
        ],
      ]);
      ?>
    <?php else : ?>
    <div class="siblings-pagination__item"></div>
    <?php endif; ?>
    <?php if ($hasNext ?? false) : ?>
    <?php
      snippet('siblings-pagination-item', [
        'label' => $nextLabel,
        'href' => $next->url(),
        'attrs' => [
          'class' => 'siblings-pagination__item siblings-pagination__item--next',
        ]
      ]);
      ?>
    <?php else : ?>
    <div class="siblings-pagination__item"></div>
    <?php endif; ?>
  </div>
</nav>

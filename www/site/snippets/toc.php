<? if ($headlines->isNotEmpty()) : ?>
  <div class="toc u-margin-top-md">

    <ol class="toc-list">
      <?php foreach($headlines as $headline): ?>
        <li class="toc-item">
        	<a class="toc-link u-font-sm" href="<?= $headline->url() ?>">
        		<?= $headline->text() ?>
      		</a>
        </li>
      <?php endforeach ?>
    </ol>

  </div>
<? endif ?>
<?php

/** @var string $left */
/** @var string $right */
?>

<div class="flex mx-2 max-w-150">
    <span>
        <?= htmlspecialchars($left) ?>
    </span>
    <span class="flex-1 content-repeat-[.] text-gray ml-1"></span>
    <?php if ($right !== '') { ?>
        <span class="ml-1 text-gray">
            <?=htmlspecialchars($right) ?>
        </span>
    <?php } ?>
</div>

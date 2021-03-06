<?php
/**
 * 一个简洁轻量的博客主题
 *
 * @package AirCloud
 * @author WingLim
 * @version 2.2.1
 * @link https://limxw.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
<div class="index-middle" id="main">
    <div class="post-preview-container" style="min-height: <%- config.per_page * 72 %>px">
        <?php while($this->next()): ?>
        <div class="post-preview">
            <div class="post-time"><?php $this->date(); ?></div>
            <div class="post-info">
                <a href="<?php $this->permalink(); ?>">
                    <h3><?php $this->title() ?></h3>
                </a>
                <p class="tag">
                    <span>/</span>
                    <?php $this->tags('', true, '<a>none</a>'); ?>
                </p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<?php $this->need('footer.php'); ?>

    <div class="article-actions clearfix">

            <?php _the_shares() ?>
   
            <?php $like = _get_post_like_data(get_the_ID()); ?>
            <a href="javascript:;" class="action-like<?php echo $like->liked?' actived':'' ?>" data-pid="<?php echo get_the_ID() ?>" etap="like"><i class="fa">&#xe60d;</i>赞(<span><?php echo $like->count; ?></span>)</a>



            <a href="javascript:;" class="action-rewards" etap="rewards"><i class="fa">&#xe601;</i><?php echo _hui('post_rewards_text', '打赏') ?></a>
 

    </div>
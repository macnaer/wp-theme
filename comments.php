<div class="blog-comments">
	<h4><?php comments_number(); ?></h4>
	<div id="comment-blog">
    <?php foreach($comments as $comment){?> 
		<ul class="comment-list">
			<li class="comment">
				<div class="avatar"><?php get_avatar($comment, 60, '', '');  ?></div>
				<div class="comment-container">
					<h5 class="comment-author"><a href="#"><?php comment_author();  ?></a></h5>
					<div class="comment-meta">
						<a href="#" class="comment-date link-style1"><?php  comment_date('F j, Y'); ?></a>
						<a class="comment-reply-link link-style3" href="#respond">Reply »</a>
					</div>
					<div class="comment-body">
						<p><?php comment_text();  ?></p>
					</div>
				</div>
			</li>
		</ul>
        <?php }
            the_comments_pagination();
        ?>
	</div>
</div>
<div class="comments-form">
	<div class="comment-form-main">
    <?php
    
    comment_form([     
        'fields'  =>  [
            'author'            =>
            '<div class="col-md-4">
            <div class="form-group">
               <input id="author" class="form-control" placeholder="Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />
            </div>
          </div>',
            'email'             =>
            '<div class="col-md-4">
            <div class="form-group">
               <input id="email" class="form-control" placeholder="Email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />
            </div>
          </div>',
            'url'               =>
            '<div class="col-md-4">
            <div class="form-group">
               <input id="url" class="form-control" placeholder="Website URL" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />
            </div>
          </div>'
        ],
        'comment_field'  =>  '<div class="col-md-12">
        <div class="form-group">
           <textarea id="comment" class="form-control" placeholder="Message" name="comment" cols="30" rows="2" aria-required="true"></textarea>
        </div>
      </div>',
        'class_submit'          =>  ' hover-btn-new orange',
        'submit_button'         =>  '<div class="col-md-12 post-btn">
                                        <button class="hover-btn-new orange"><span>Post Comment</span></button>
                                     </div>',
        'label_submit'          =>  __('Post Comment', 'udemy'),
        'title_reply'           =>  __('Leave a <span>Post Comment</span>', 'udemy'),
        'comment_notes_before'  =>  '',
        'title_reply'           =>  '<h4>Leave a comment</h4>',
        'class_form'            =>  'row'
    ]);
    
        ?>
        </div>
</div>
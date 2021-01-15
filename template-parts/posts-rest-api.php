<?php
$url = $section_2_group['wp_json_url_posts'];
$count_of_posts = $section_2_group['count_of_posts'];
$response = wp_remote_get( add_query_arg( array(
    'per_page' => $count_of_posts
),  $url ) );

if( !is_wp_error( $response ) && $response['response']['code'] == 200 ) {

    $remote_posts = json_decode( $response['body'] ); // our posts are here
    foreach( $remote_posts as $remote_post ) {
        ?>
        <div class="post-card">
            <div class="image" style="background:url('<?php echo $remote_media->source_url; ?>')">
                <?php
                $id_img = $remote_post->featured_media;
                $wp_json_url_media = $section_2_group['wp_json_url_media'];
                $response_media = wp_remote_get("$wp_json_url_media/$id_img/");
                $remote_media = json_decode( $response_media['body'] ); // our posts are here
                ?>
            </div>
            <div class="info-card">
                <h2 class="post_title"><?php
                    echo $remote_post->title->rendered
                    ?></h2>
                <div class="post-content">
                    <?php echo $remote_post->excerpt->rendered?>
                </div>
                <a class="btn" href="<?php echo $remote_post->link?>"><?php echo $section_2_group['button_label'] ?></a>
            </div>
        </div>
        <?php
    }
}
?>
<link href="<?php echo base_url('resources/client/css/forumNewsCard.css') ?>" rel="stylesheet" type="text/css">
<?php include 'forum_header_js.php'; ?>

<style type="text/css">
    .hide {
        display: none;
    }
</style>
<?php
if (isset($news)) {
    $i = 0;
    $card_mode = "large";
    include 'pNewsCard.php';
}
include 'forum_js.php'; ?>

<script>
    $(".hide").click(function() {
        this.parentNode.className = "hide";
    })
</script>
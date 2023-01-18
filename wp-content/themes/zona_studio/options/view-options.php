<?php
function theme_options_page()
{
?>
<div class="wrap">
    <h1>Opcje motywu</h1>
    <form method="post" action="options.php">
        <?php
            settings_fields('zona_studio_options_grp');
            do_settings_sections("zona_studio_options");
            submit_button();
            ?>
    </form>
</div>
<?php
}
?>
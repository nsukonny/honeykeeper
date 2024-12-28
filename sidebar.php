<aside>
    <h2>Sidebar</h2>
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <p>Add widgets to the sidebar in Appearance > Widgets.</p>
    <?php endif; ?>
</aside>

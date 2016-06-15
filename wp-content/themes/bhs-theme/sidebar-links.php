<!-- add this sidebar class so we can style it better later -->
<aside class="col-xs-12 col-sm-12 col-md-3 col-lg-3 sidebar">
    <?php if ( ! dynamic_sidebar( 'links' ) ): ?>
    <!-- if no sidebar, show this content -->
    <h3>Set Up this sidebar</h3>
    <p>Drag stuff here so your sidebar wont be empty</p>

    <?php endif; ?>
</aside>

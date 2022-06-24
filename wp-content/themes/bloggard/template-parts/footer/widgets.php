<div class="c-footer c-footer">
    <div class="o-container">
        <div class="o-row">
            <div class="o-row__column o-row__column--span-12 o-row__column--span-@medium">
                <?php if (is_active_sidebar('footer-sidebar-1')) {
                    dynamic_sidebar('footer-sidebar-1');
                } ?>
            </div>
        </div>
        <div class="o-row__column o-row__column--span-12 o-row__column--span-@medium">
            <?php if (is_active_sidebar('footer-sidebar-2')) {
                dynamic_sidebar('footer-sidebar-2');
            } ?>
        </div>
        <div class="o-row__column o-row__column--span-12 o-row__column--span-@medium">
            <?php if (is_active_sidebar('footer-sidebar-3')) {
                dynamic_sidebar('footer-sidebar-3');
            } ?>
        </div>
    </div>
</div>
</div>
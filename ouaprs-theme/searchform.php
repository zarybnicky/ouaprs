<?php
/**
 * The template for displaying search forms
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <!--label for="s" class="assistive-text">Vyhledávání</label-->
    <div class="row">
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" name="s" id="s" class="form-control" placeholder="Vyhledávání" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary" name="submit" id="searchsubmit">Vyhledat</button>
                </div><!-- /.input-group-append -->
            </div><!-- /.input-group -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</form>

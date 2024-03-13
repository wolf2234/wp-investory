<?php
/*
Theme Name: Investors
*/
?>

<?php get_header(); ?>
    <div class="row">
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-lg-8">
            <div class="content">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
            <div class="calc">
                <div class="row">
                    <div class="col-md-6">
                        <div class="calc-programms">
                            <div class="calc-radio">
                                <input type="radio" data-month="6" data-per="0.2" name="programms" id="first" checked>
                                <label for="first">
                                    <span>
                                        20% years
                                        <small>at 6 months</small>
                                    </span>
                                </label>
                            </div>
                            <div class="calc-radio">
                                <input type="radio" data-month="24" data-per="0.26" name="programms" id="second">
                                <label for="second">
                                    <span>
                                        26% years
                                        <small>at 2 years</small>
                                    </span>
                                </label>
                            </div>
                            <div class="calc-radio">
                                <input type="radio" data-month="48" data-per="0.32" name="programms" id="third">
                                <label for="third">
                                    <span>
                                        32% years
                                        <small>at 4 years</small>
                                    </span>
                                </label>
                            </div>
                            <div class="calc-radio">
                                <input type="radio" data-month="36" data-per="0.24" name="programms" id="fourth">
                                <label for="fourth">
                                    <span>
                                        24% years
                                        <small>at 3 years</small>
                                    </span>
                                </label>
                            </div>
                            <div class="calc-radio">
                                <input type="radio" data-month="4" data-per="28" name="programms" id="fifth">
                                <label for="fifth">
                                    <span>
                                        28% years
                                        <small>at 3 years</small>
                                    </span>
                                </label>
                                <div class="calc-popular">
                                    Popular programm
                                </div>
                            </div>
                        </div>
                        <div class="calc-legal">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae consequuntur velit, expedita itaque repudiandae placeat quis blanditiis repellendus debitis, excepturi laudantium, nemo ducimus voluptates. Placeat repellat necessitatibus ratione inventore molestiae consectetur ipsa dignissimos quae rerum corrupti, earum quos id.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Enter sum of invests</h4>
                        <input type="text" name="summ" class="calc-range">
                        <div class="calc-summ-invest">
                            <span class="calc-summ-invest-label">Summ:</span>
                            <span class="calc-summ-invest-num">
                                <span>100 000</span> dollars
                            </span>
                        </div>
                        <div>
                            <span class="calc-total">
                                <strong><span id="total"></span> dollars</strong><br>
                                <small>
                                    Summ in <span id="month">36</span> months
                                </small>
                            </span>
                            <span class="calc-monthly">
                                <strong><span></span> dollars</strong><br>
                                <small>Monthly income</small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
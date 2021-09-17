<footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <?php dynamic_sidebar('footer-1') ?> 
                        </li>
                        
                    </ul>
                </p>
            </div>

            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <?php dynamic_sidebar('footer-2') ?>
                </div>
                <p>This website is developed by GTCoding</p>
            </div>
        </footer>

    </main>

    <?php wp_footer();  ?>
</body>

</html>
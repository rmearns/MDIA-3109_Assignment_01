    </div>
    <div id="footer">&copy;<?php echo date("Y", time()); ?>, Robert Mearns</div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>